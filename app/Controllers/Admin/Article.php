<?php

namespace App\Controllers\Admin;

use App\Models\Admin\ArticleModel;
use App\Models\Admin\ContentModel;
use App\Models\Admin\CategoryModel;
use App\Models\Admin\SubCategoryModel;
use App\Models\Admin\ProjectModel;
use CodeIgniter\RESTful\ResourceController;
use Exception;

class Article extends ResourceController
{
  protected $articleModel;
  protected $contentModel;
  protected $categoryModel;
  protected $subCategoryModel;
  protected $projectModel;
  protected $db;

  public function __construct()
  {
    $this->articleModel = new ArticleModel();
    $this->contentModel = new ContentModel();
    $this->categoryModel = new CategoryModel();
    $this->subCategoryModel = new SubCategoryModel();
    $this->projectModel = new ProjectModel();
    $this->db = db_connect();
  }

  public function index()
  {
    $page = $this->request->getGet('page') ?? 1;
    $perPage = $this->request->getGet('perPage') ?? 10;

    $offset = ($page - 1) * $perPage;

    $dataArticle = $this->articleModel->findAll($perPage, $offset);

    $totalRecords = $this->articleModel->countAll();

    $totalPages = ceil($totalRecords / $perPage);

    $content = $this->contentModel->findAll();

    $pagination = [
      'page' => $page,
      'perPage' => $perPage,
      'totalRecords' => $totalRecords,
      'totalPages' => $totalPages
    ];
    
    return view('admin/article', [
      'title' => 'article',
      'articles' => $dataArticle,
      'contents' => $content,
      'pagination' => $pagination
    ]);
  }

  public function new()
  {
    $category = $this->categoryModel->findAll();
    $sub_category = $this->subCategoryModel->findAll();
    $project = $this->projectModel->findAll();

    $data = [
      'title' => 'Add Article',
      'category' => $category,
      'sub_category' => $sub_category,
      'project' => $project,
    ];

    return view('admin/addarticle', $data);
  }

  public function create()
  {
    $rules = [
      'title'            => 'required|alpha_numeric_space',
      'category'         => 'required',
      'subcategory'     => 'required',
      'project'          => 'required',
    ];

    if (!$this->validate($rules)) {
      return redirect()->to('kb/administrator/article/new')->withInput()->with('errors', $this->validator->getErrors());
    } else {
      $title = $this->request->getVar('title');
      $slug = url_title($title, "-", true);
      
      $category = $this->request->getVar('category');
      $subcategory = $this->request->getVar('subcategory');
      $project = $this->request->getVar('project');
      $desc = $_REQUEST['description'];

      $file_upload = array() ;
      if (isset($_FILES['upload']['name'])){
        $file_name= $_FILES['upload']['name'];
        $file_path= base_url().'public/src/images/img_article/'.$file_name;
        $file_extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
        if($file_extension=='jpg' || $file_extension=='jpeg' || $file_extension=='png' || $file_extension=='webp' || $file_extension=='svg'){
          if (move_uploaded_file($_FILES['upload']['tmp_name'], $file_path)){
            $file_upload['file']= $file_name;
            $file_upload['url']= $file_path;
            $file_upload['uploaded']= 1;
          } else {
            $file_upload['uploaded']= 0;
            $file_upload['error']['message'] = 'Error! File not uploaded';
          }
        } else {
          $file_upload['uploaded']= 0;
          $file_upload['error']['message'] = 'Invalid Extension !';
        }
      }

      echo json_encode($file_upload);

      $data = [
        'id_category'     => $category,
        'id_sub_category'  => $subcategory,
        'title'           => $title,
        'slug'            => $slug,
        'content'         => $desc
      ];
      
      $this->contentModel->save($data);

      $insertedID = $this->contentModel->insertID();

      $data2 = [
        'id_content'  => $insertedID,
        'id_project'  => $project
      ];
      if (!$this->articleModel->save($data2)) {
        return redirect()->to('kb/administrator/article')->with('error', "Article gagal ditambah");
      } else {
        return redirect()->to('kb/administrator/article')->with('success', "Article berhasil ditambah");
      }
    }
  }

  public function edit($id = null)
  {
    $article = $this->articleModel->where('id_content', $id)->findAll();
    $content = $this->contentModel->where('id', $id)->findAll();

    $category = $this->categoryModel->findAll();
    $subcategory = $this->subCategoryModel->findAll();
    $project = $this->projectModel->findAll();

    $data = [
      'title' => 'Edit Article',
      'article'  => $article,
      'content'  => $content,
      'category'  => $category,
      'subcategory'  => $subcategory,
      'project'  => $project,
    ];

    return view('admin/editarticle', $data);
  }

  public function update($id = null)
  {
    $rules = [
      'title'            => 'required|alpha_numeric_space',
      'category'         => 'required',
      'subcategory'     => 'required',
      'project'          => 'required',
    ];

    if (!$this->validate($rules)) {
      return redirect()->to('kb/administrator/article/edit/' . $id)->withInput()->with('errors', $this->validator->getErrors());
    } else {
      $title = $this->request->getVar('title');
      $slug = url_title($title, "-", true);
      
      $category = $this->request->getVar('category');
      $subcategory = $this->request->getVar('subcategory');
      $project = $this->request->getVar('project');
      $desc = $_REQUEST['description'];

      $file_upload = array() ;
      if (isset($_FILES['upload']['name'])){
        $file_name= $_FILES['upload']['name'];
        $file_path= base_url().'public/src/images/img_article/'.$file_name;
        $file_extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
        if($file_extension=='jpg' || $file_extension=='jpeg' || $file_extension=='png' || $file_extension=='webp' || $file_extension=='svg'){
          if (move_uploaded_file($_FILES['upload']['tmp_name'], $file_path)){
            $file_upload['file']= $file_name;
            $file_upload['url']= $file_path;
            $file_upload['uploaded']= 1;
          } else {
            $file_upload['uploaded']= 0;
            $file_upload['error']['message'] = 'Error! File not uploaded';
          }
        } else {
          $file_upload['uploaded']= 0;
          $file_upload['error']['message'] = 'Invalid Extension !';
        }
      }

      echo json_encode($file_upload);

      $data = [
        'id'              => $id,
        'id_category'     => $category,
        'id_sub_category' => $subcategory,
        'title'           => $title,
        'slug'            => $slug,
        'content'         => $desc
      ];
      
      $this->contentModel->update($id, $data);

      $article = $this->articleModel->where('id_content', $id)->findAll();
      $id_article = $article[0]['id'];

      $data2 = [
        'id'          => $id_article,
        'id_content'  => $id,
        'id_project'  => $project
      ];
      if (!$this->articleModel->update($id, $data2)) {
        return redirect()->to('kb/administrator/article')->with('error', "Article gagal diupdate");
      } else {
        return redirect()->to('kb/administrator/article')->with('success', "Article berhasil diupdate");
      }
    }
  }

  public function delete($id = null)
  {
    $article = $this->articleModel->where('id_content', $id)->findAll();
    $id_article = $article[0]['id'];

    $this->articleModel->delete($id_article);
    
    if (!$this->contentModel->delete($id)) {
      return redirect()->to('kb/administrator/category')->with('error', "Data category gagal hapus");
    } else {
      return redirect()->to('kb/administrator/category')->with('success', "Data category berhasil dihapus");
    }
  }

  public function detail($id = null)
  {
    $article = $this->articleModel->where('id_content', $id)->findAll();
    $content = $this->contentModel->where('id', $id)->findAll();

    $data = [
      'title'     => 'Detail Article',
      'articles'  => $article,
      'contents'   => $content
    ];

    return view('admin/detailarticle', $data);
  }
}
