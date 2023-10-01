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
    $page = $this->request->getGet('page') ?? 1;
    $perPage = $this->request->getGet('perPage') ?? 10;

    $offset = ($page - 1) * $perPage;

    $dataArticle = $this->articleModel->findAll($perPage, $offset);

    $totalRecords = $this->articleModel->countAll();

    $totalPages = ceil($totalRecords / $perPage);

    $pagination = [
      'page' => $page,
      'perPage' => $perPage,
      'totalRecords' => $totalRecords,
      'totalPages' => $totalPages
    ];
    return view('admin/article', [
      'title' => 'article',
      'articles' => $dataArticle,
      'pagination' => $pagination
    ]);
  }

  public function add()
  {
    $data = [
      'title' => 'Add Article'
    ];

    return view('admin/addarticle', $data);
  }

  public function edit($id = null)
  {
    $data = [
      'title' => 'Edit Article'
    ];

    return view('admin/editarticle', $data);
  }

  public function detail($id = null)
  {
    $data = [
      'title' => 'Detail Article'
    ];

    return view('admin/detailarticle', $data);
  }
}
