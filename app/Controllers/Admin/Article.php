<?php

namespace App\Controllers\Admin;

use App\Models\Admin\ArticleModel;
use App\Models\Admin\ContentModel;
use CodeIgniter\RESTful\ResourceController;
use Exception;

class Article extends ResourceController
{
  protected $articleModel;
  protected $contentModel;

  public function __construct()
  {
    $this->articleModel = new ArticleModel();
    $this->contentModel = new ContentModel();
  }

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

  public function edit($id=null)
  {
    $data = [
      'title' => 'Edit Article'
    ];
    
    return view('admin/editarticle', $data);
  }

  public function detail($id=null)
  {
    $data = [
      'title' => 'Detail Article'
    ];
    
    return view('admin/detailarticle', $data);
  }
}
