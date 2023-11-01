<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\ComplainModel;

class Admin extends BaseController
{

  protected $complainModel;

  public function __construct()
  {
    $this->complainModel = new ComplainModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Admin',
      'notification' => count($this->complainModel->select("*")->where("is_read", 0)->findAll())
    ];

    return view('admin/index', $data);
  }
}
