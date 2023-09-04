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

  public function add()
  {
    $data = [
      'title' => 'Add Article'
    ];
    
    return view('admin/addarticle', $data);
  }

  public function edit()
  {
    $data = [
      'title' => 'Edit Article'
    ];
    
    return view('admin/editarticle', $data);
  }

  public function detail()
  {
    $data = [
      'title' => 'Detail Article'
    ];
    
    return view('admin/detailarticle', $data);
  }
}
