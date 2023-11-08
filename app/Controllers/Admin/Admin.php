<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\ComplainModel;
use App\Models\Admin\UserModel;
use App\Models\Admin\ProjectModel;
use App\Models\Admin\ArticleModel;
use App\Models\Admin\CategoryModel;
use App\Models\Admin\SubCategoryModel;

class Admin extends BaseController
{

  protected $complainModel;
  protected $articleModel;
  protected $userModel;
  protected $projectModel;
  protected $categoryModel;
  protected $subcategoryModel;

  public function __construct()
  {
    $this->complainModel = new ComplainModel();
    $this->articleModel = new ArticleModel();
    $this->userModel = new UserModel();
    $this->projectModel = new ProjectModel();
    $this->categoryModel = new CategoryModel();
    $this->subcategoryModel = new SubCategoryModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Admin',
      'user' => $this->userModel->countAll(),
      'article' => $this->articleModel->countAll(),
      'project' => $this->projectModel->countAll(),
      'category' => $this->categoryModel->countAll(),
      'subcategory' => $this->subcategoryModel->countAll(),
      'inbox' => $this->complainModel->countAll(),
      'notification' => count($this->complainModel->select("*")->where("is_read", 0)->findAll())
    ];
    return view('admin/index', $data);
  }
}
