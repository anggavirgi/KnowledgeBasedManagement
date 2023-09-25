<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\SubCategoryModel;

class Category extends BaseController
{

  protected $subCategoryModel;

  public function __construct()
  {
    $this->subCategoryModel = new SubCategoryModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Category'
    ];

    return view('admin/category', $data);
  }

  public function add()
  {
    $data = [
      'title' => 'Add Category'
    ];

    return view('admin/addcategory', $data);
  }

  public function edit()
  {
    $data = [
      'title' => 'Edit Category'
    ];

    return view('admin/editcategory', $data);
  }

  public function subcategory()
  {
    $data = [
      'title'       => 'Sub-Category',
      'subcategory' => $this->subCategoryModel->findAll()
    ];

    return view('admin/subcategory', $data);
  }

  public function addsub()
  {
    $data = [
      'title' => 'Add Sub-Category'
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
        return redirect()->to('kb/administrator/category/subcategory')->with('error', "Data sub category gagal ditambah");
      } else {
        return redirect()->to('kb/administrator/category/subcategory')->with('success', "Data sub category berhasil ditambah");
      }
    }
  }

  public function editsub($id = null)
  {
    $data = [
      'title'       => 'Edit Sub-Category',
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
}
