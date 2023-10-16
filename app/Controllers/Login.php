<?php

namespace App\Controllers;

use Google_Client;
use App\Models\Admin\ProjectModel;

class Login extends BaseController
{

  protected $googleClient;
  protected $projectModel;

  public function __construct()
  {
    $this->projectModel = new ProjectModel();
    $this->googleClient = new Google_Client();
    $this->googleClient->setClientId('68235445122-s9tfb97u83qbr80v023b9qriurtuquds.apps.googleusercontent.com');
    $this->googleClient->setClientSecret('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');
    $this->googleClient->setRedirectUri('http://localhost:8080/kb/proses');
    $this->googleClient->addScope('email');
    $this->googleClient->addScope('profile');
  }

  public function proses()
  {
    $token = $this->googleClient->fetchAccessTokenWithAuthCode($this->request->getVar('code'));
    dd($token);
    if (!isset($token['error'])) {
      $this->googleClient->setAccessToken($token['access_token']);
      $googleService = new \Google_Service_Oauth2($this->googleClient);
      $data = $googleService->userinfo->get();
      dd($data);
    }
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
