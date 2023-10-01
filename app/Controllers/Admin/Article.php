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
    $dataArticle = $this->articleModel->findAll();
    $dataContent = $this->contentModel->findAll();

    $data = [
      'title' => 'Article',
      'articles' => $dataArticle,
      'contents' => $dataContent
    ];
    
    return view('admin/article', $data);
  }

  public function new()
  {
    $data = [
      'title' => 'Add Article'
    ];
    
    return view('admin/addarticle', $data);
  }

  public function edit($id=null)
  {
    $data = [
      'title' => 'Edit Article',
      'article'  => $this->articleModel->find($id)
    ];
    
    return view('admin/editarticle', $data);
  }

  public function detail($id=null)
  {
    $data = [
      'title' => 'Detail Article',
      'article'  => $this->articleModel->find($id)
    ];
    
    return view('admin/detailarticle', $data);
  }
}
