<?php

namespace App\Controllers;

use App\Models\Admin\ProjectModel;

class Login extends BaseController
{

  protected $projectModel;

  public function __construct()
  {
    $this->projectModel = new ProjectModel();
  }

  public function register()
  {
    $project = $this->projectModel->findAll();

    $data = [
      'title' => 'Register',
      'project' => $project,
    ];
    dd($data);
    return view('login/register', $data);
  }

  public function forgotpassword()
  {
    $data = [
      'title' => 'Forgot Password'
    ];

    return view('login/forgotpassword', $data);
  }
}
