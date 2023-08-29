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
}
