<?php

namespace App\Controllers\Admin;

use App\Models\Admin\CategoryModel;
use CodeIgniter\RESTful\ResourceController;
use Exception;

class Category extends ResourceController
{
  
  protected $categoryModel;

  public function __construct()
  {
      $this->categoryModel = new CategoryModel();
  }

  public function index()
  {
    $dataCategory = $this->categoryModel->findAll();

    $data = [
      'title' => 'Category',
      'categories' => $dataCategory
    ];
    
    return view('admin/category', $data);
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
      'icon'          => 'uploaded[icon]|max_size[icon,1024]|is_image[icon]|mime_in[icon,image/jpg,image/jpeg,image/png,image/svg,image/webp]'
    ];

    if (!$this->validate($rules)) {
        return redirect()->route('kb/administrator/category/edit/' . $id)->withInput()->with('errors', $this->validator->getErrors());
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
          return redirect()->to('kb/administrator/category')->with('error', "Data category gagal diubah");
      } else {
          return redirect()->to('kb/administrator/category')->with('success', "Data category berhasil diubah");
      }
    }
  }

  public function subcategory()
  {
    $data = [
      'title' => 'Sub-Category'
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

  public function editsub()
  {
    $data = [
      'title' => 'Edit Sub-Category'
    ];
    
    return view('admin/editsubcategory', $data);
  }
}
