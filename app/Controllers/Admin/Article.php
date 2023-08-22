<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Article extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Article'
    ];
    
    return view('admin/article', $data);
  }
}
