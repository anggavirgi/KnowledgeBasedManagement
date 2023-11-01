<?php

namespace App\Controllers;

use App\Models\Admin\ProjectModel;

class Login extends BaseController
{

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
    // $ch = curl_init();
    // d(curl_setopt($ch, CURLOPT_URL, 'https://example.com'));
    // d(curl_setopt($ch, CURLOPT_RETURNTRANSFER, true));

    // // Set the path to the CA bundle file for SSL certificate verification
    // d(curl_setopt($ch, CURLOPT_CAINFO, 'path/to/ca-bundle.crt'));
    // dd($this->googleClient);
    $token = $this->googleClient->fetchAccessTokenWithAuthCode($this->request->getVar('code'));
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
