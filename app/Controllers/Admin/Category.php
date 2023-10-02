<?php

namespace App\Controllers\Admin;

use App\Models\Admin\CategoryModel;
use App\Models\Admin\SubCategoryModel;
use CodeIgniter\RESTful\ResourceController;
use Exception;

class Category extends ResourceController
{
  protected $categoryModel;
  protected $subCategoryModel;
  protected $db;


  public function __construct()
  {
    $this->categoryModel = new CategoryModel();
    $this->subCategoryModel = new SubCategoryModel();
    $this->db = db_connect();
  }

  public function index()
  {
    $page = $this->request->getGet('page') ?? 1;
    $perPage = $this->request->getGet('perPage') ?? 10;

    $offset = ($page - 1) * $perPage;

    $dataCategory = $this->categoryModel->findAll($perPage, $offset);

    $totalRecords = $this->categoryModel->countAll();

    $countByCategory = $this->db->table('sub_category')
      ->select('DISTINCT(id_category),COUNT(*) as subcategory_count')
      ->groupBy('id_category')
      ->get()
      ->getResultArray();

    $totalPages = ceil($totalRecords / $perPage);

    $pagination = [
      'page' => $page,
      'perPage' => $perPage,
      'totalRecords' => $totalRecords,
      'totalPages' => $totalPages
    ];
    return view('admin/category', [
      'title' => 'Category',
      'categories' => $dataCategory,
      'subCategory' => $countByCategory,
      'pagination' => $pagination
    ]);
  }

  public function new()
  {
    $data = [
      'title' => 'Add Category'
    ];

    return view('admin/addcategory', $data);
  }

  public function create()
  {

    $rules = [
      'category'      => 'required|alpha_numeric_space',
      'icon'          => 'uploaded[icon]|max_size[icon,1024]|is_image[icon]|mime_in[icon,image/jpg,image/jpeg,image/png,image/svg,image/webp]'
    ];

    if (!$this->validate($rules)) {
      return redirect()->route('kb/administrator/category/new')->withInput()->with('errors', $this->validator->getErrors());
    } else {
      $name_category = $this->request->getVar('category');
      $slug = url_title($name_category, "-", true);

      $icon_file = $this->request->getFile('icon');
      $icon_name = $icon_file->getRandomName();
      $icon_file->move('src/images/icon', $icon_name);

      $data = [
        'name_category' => $name_category,
        'slug'          => $slug,
        'icon'          => $icon_name
      ];
      if (!$this->categoryModel->save($data)) {
        return redirect()->to('kb/administrator/category')->with('error', "Data category gagal ditambah");
      } else {
        return redirect()->to('kb/administrator/category')->with('success', "Data category berhasil ditambah");
      }
    }
  }

  public function edit($id = null)
  {
    $data = [
      'title' => 'Edit Category',
      'category'  => $this->categoryModel->find($id)
    ];

    return view('admin/editcategory', $data);
  }

  public function update($id = null)
  {
    $rules = [
      'category'      => 'required|alpha_numeric_space',
      'icon'          => 'max_size[icon,1024]|is_image[icon]|mime_in[icon,image/jpg,image/jpeg,image/png,image/svg,image/webp]'
    ];

    if (!$this->validate($rules)) {
      return redirect()->route('kb/administrator/category/edit/' . $id)->withInput()->with('errors', $this->validator->getErrors());
    } else {
      $name_category = $this->request->getVar('category');
      $slug = url_title($name_category, "-", true);

      $icon_file = $this->request->getFile('icon');
      if ($icon_file->getError() == 4) {
        $icon_name = $this->request->getVar('old_icon');
      } else {
        $icon_name = $icon_file->getRandomName();
        $icon_file->move('src/images/icon', $icon_name);
        unlink('src/images/icon/' . $this->request->getVar('old_icon'));
      }

      $data = [
        'id'            => $id,
        'name_category' => $name_category,
        'slug'          => $slug,
        'icon'          => $icon_name
      ];
      if (!$this->categoryModel->update($id, $data)) {
        return redirect()->to('kb/administrator/category')->with('error', "Data category gagal diupdate");
      } else {
        return redirect()->to('kb/administrator/category')->with('success', "Data category berhasil diupdate");
      }
    }
  }

  public function delete($id = null)
  {
    $dataCategory = $this->categoryModel->find($id);
    unlink('src/images/icon/' . $dataCategory['icon']);
    if (!$this->categoryModel->delete($id)) {
      return redirect()->to('kb/administrator/category')->with('error', "Data category gagal hapus");
    } else {
      $this->subCategoryModel->where('id_category', $id)->delete();
      return redirect()->to('kb/administrator/category')->with('success', "Data category berhasil dihapus");
    }
  }

  public function deleteBatch()
  {
    $id_categories = $this->request->getVar("ids");
    for ($i = 0; $i < count($id_categories); $i++) {
      $id = $id_categories[$i];

      $dataCategory = $this->categoryModel->find($id);
      unlink('src/images/icon/' . $dataCategory['icon']);

      $this->categoryModel->delete($id);
      $this->subCategoryModel->where('id_category', $id)->delete();
    }

    return redirect()->to('kb/administrator/category')->with('success', "Data category berhasil dihapus");
  }

  public function subcategory()
  {
    $categoryId = $this->request->getGet('category_id');
    $page = $this->request->getGet('page') ?? 1;
    $perPage = $this->request->getGet('perPage') ?? 10;

    $offset = ($page - 1) * $perPage;

    $totalRecords = $this->subCategoryModel->where('id_category', $categoryId)->countAllResults();

    $subCategory = $this->subCategoryModel->where('id_category', $categoryId)->findAll($perPage, $offset);

    $totalPages = ceil($totalRecords / $perPage);

    $pagination = [
      'page' => $page,
      'perPage' => $perPage,
      'totalRecords' => $totalRecords,
      'totalPages' => $totalPages
    ];
    return view('admin/subcategory', [
      'title' => 'Category',
      'subcategory' => $subCategory,
      'pagination' => $pagination
    ]);
  }

  public function addsub()
  {
    $idCategory = $this->categoryModel->findAll();
    $data = [
      'title'       => 'Add Sub-Category',
      'categories'  => $this->categoryModel->findAll(),
    ];
    return view('admin/addsubcategory', $data);
  }

  public function createSubCategory()
  {
    $rules = [
      'id_category'       => "required",
      'subcategory'       => "required|is_unique[sub_category.name_subcategory]"
    ];


    if (!$this->validate($rules)) {
      return redirect()->to('kb/administrator/category/subcategory/addsubcategory')->withInput()->with('errors', $this->validator->getErrors());
    } else {
      $id_category  = $this->request->getVar('id_category');
      $sub_category = $this->request->getVar('subcategory');
      $x            = explode(" ", strtolower($sub_category));
      $slug         = implode("-", $x);


      $data = [
        'id_category'       => $id_category,
        'name_subcategory'  => $sub_category,
        'slug'              => $slug
      ];


      if (!$this->subCategoryModel->save($data)) {
        return redirect()->to('kb/administrator/category/subcategory?category_id=' . $id_category . '')->with('error', "Data sub category gagal ditambah");
      } else {
        return redirect()->to('kb/administrator/category/subcategory?category_id=' . $id_category . '')->with('success', "Data sub category berhasil ditambah");
      }
    }
  }

  public function editsub($id = null)
  {
    $id = $this->request->getGet('id');
    $data = [
      'title'       => 'Edit Sub-Category',
      'categories'  => $this->categoryModel->findAll(),
      'subcategory' => $this->subCategoryModel->find($id)
    ];

    return view('admin/editsubcategory', $data);
  }

  public function updateSubCategory($id = null)
  {
    $rules = [
      'id_category'       => "required",
      'subcategory'       => "required"
    ];

    if (!$this->validate($rules)) {
      return redirect()->to('kb/administrator/category/subcategory/editsubcategory/' . $id)->withInput()->with('errors', $this->validator->getErrors());
    }

    $id_category  = $this->request->getVar('id_category');
    $sub_category = $this->request->getVar('subcategory');
    $x            = explode(" ", strtolower($sub_category));
    $slug         = implode("-", $x);

    $cek_subcategory = $this->subCategoryModel->select('*')->where('name_subcategory', $sub_category)->where('id !=', $id)->findAll();
    if ($cek_subcategory) {
      return redirect()->to('kb/administrator/user/edit/' . $id)->withInput()->with('errors', ['subcategory' => 'Nama Subcategory sudah tersedia']);
    } else {
      $data = [
        'id_category'       => $id_category,
        'name_subcategory'  => $sub_category,
        'slug'              => $slug
      ];

      if (!$this->subCategoryModel->update($id, $data)) {
        return redirect()->to('kb/administrator/category/subcategory')->with('error', "Data sub category gagal diupdate");
      } else {
        return redirect()->to('kb/administrator/category/subcategory')->with('success', "Data sub category berhasil diupdate");
      }
    }
  }

  public function deleteSubCategory($id = null)
  {
    if (!$this->subCategoryModel->delete($id)) {
      return redirect()->to('kb/administrator/category/subcategory')->with('error', "Data sub category gagal hapus");
    } else {
      return redirect()->to('kb/administrator/category/subcategory')->with('success', "Data sub category berhasil dihapus");
    }
  }

  public function deleteBatchSubCategory()
  {
    $id_sub_categories = $this->request->getVar("ids");
    for ($i = 0; $i < count($id_sub_categories); $i++) {
      $id = $id_sub_categories[$i];
      $this->subCategoryModel->delete($id);
    }

    return redirect()->to('kb/administrator/category/subcategory')->with('success', "Data sub category berhasil dihapus");
  }
}
