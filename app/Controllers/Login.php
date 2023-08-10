<?php

namespace App\Controllers;

class Login extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Login'
    ];

    return view('login/login', $data);
  }

  public function register()
  {
    $data = [
      'title' => 'Register'
    ];

    return view('login/register', $data);
  }

  public function forgotpassword()
  {
    $data = [
      'title' => 'Register'
    ];

    return view('login/forgotpassword', $data);
  }
}
