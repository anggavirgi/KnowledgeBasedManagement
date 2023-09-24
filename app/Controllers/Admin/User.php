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

  public function detail()
  {
    $data = [
      'title' => 'Detail User'
    ];

    return view('admin/detailuser', $data);
  }

  public function add()
  {
    $data = [
      'title' => 'Add User'
    ];

    return view('admin/adduser', $data);
  }


  public function save()
  {
    dd($this->request->getVar());
  }

  public function edit()
  {
    $data = [
      'title' => 'Edit User'
    ];

    return view('admin/edituser', $data);
  }
}
