<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Category extends BaseController
{
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
