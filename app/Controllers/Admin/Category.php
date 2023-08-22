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
}
