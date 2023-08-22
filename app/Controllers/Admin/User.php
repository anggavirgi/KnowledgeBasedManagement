<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class User extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'User'
    ];
    
    return view('admin/user', $data);
  }
}
