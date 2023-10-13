<?php

namespace App\Controllers;

use App\Controllers\Admin\Complain;
use App\Models\Admin\ComplainModel;
use App\Models\Admin\CategoryModel;
use App\Models\Admin\SubCategoryModel;
use App\Models\Admin\ContentModel;
use App\Models\Admin\projectModel;

class Home extends BaseController
{
    protected $complainModel;
    protected $categoryModel;
    protected $subCategoryModel;
    protected $contentModel;
    protected $projectModel;
    protected $db;

    public function __construct()
    {
        $this->complainModel = new ComplainModel();
        $this->categoryModel = new categoryModel();
        $this->subCategoryModel = new subcategoryModel();
        $this->contentModel = new contentModel();
        $this->projectModel = new projectModel();
        $this->db = db_connect();
    }

    public function index()
    {
        $category =  $this->categoryModel->findAll();
        $file_message = session('errors.file');
        $project =  $this->projectModel->find(user()->id_project);
        $data = [
            'title' => 'Virtusee | Knowledge Based',
            'file_message' => $file_message,
            'category' => $category,
            'project' => $project
        ];
        return view('customer/index', $data);
    }

    public function generalarticle()
    {
        $category = $this->request->getGet('category') ?? 'Category';
        $subcategory = $this->request->getGet('subcategory') ?? null;
        $categories =  $this->categoryModel->findAll();
        $subcategories =  $this->subCategoryModel->findAll();
        $content = $this->db->table('content a')
            ->select('a.*, b.name_category AS name_category, c.name_subcategory AS name_subcategory')
            ->join('categories b', 'a.id_category = b.id')
            ->join('sub_category c', 'a.id_sub_category = c.id')
            ->get()
            ->getResultArray();
        $project =  $this->projectModel->find(user()->id_project);
        $data = [
            'title' => 'Virtusee | article',
            'category_title' => $category,
            'subcategory_title' => $subcategory,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'content' => $content,
            'project' => $project
        ];
        return view('customer/articlegeneral', $data);
    }

    public function generalarticledetail()
    {
        $category = $this->request->getGet('category') ?? 'Category';
        $subcategory = $this->request->getGet('subcategory') ?? 'Subcategory';
        $id = $this->request->getGet('articleId') ?? '1';
        $categories =  $this->categoryModel->findAll();
        $subcategories =  $this->subCategoryModel->findAll();
        $content = $this->db->table('content a')
            ->select('a.*, b.name_category AS name_category, c.name_subcategory AS name_subcategory')
            ->join('categories b', 'a.id_category = b.id')
            ->join('sub_category c', 'a.id_sub_category = c.id')
            ->where('b.name_category', $category)
            ->where('c.name_subcategory', $subcategory)
            ->where('a.id', $id)
            ->get()
            ->getResult();
        $project =  $this->projectModel->find(user()->id_project);
        $data = [
            'title' => 'Virtusee | article detail',
            'category_title' => $category,
            'subcategory_title' => $subcategory,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'content' => $content,
            'project' => $project
        ];
        return view('customer/articledetailgeneral', $data);
    }

    public function complain()
    {
        $file_message = session('errors.file');
        $project =  $this->projectModel->find(user()->id_project);
        $data = [
            'title' => 'Virtusee | complain',
            'file_message' => $file_message,
            'project' => $project
        ];
        return view('customer/complain', $data);
    }

    public function create()
    {
        $rules = [
            'message'      => 'required|alpha_numeric_space',
            'file'          => 'uploaded[file]|max_size[file,1024]|is_image[file]|mime_in[file,image/jpg,image/jpeg,image/png,image/svg,image/webp]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->route('kb/complain')->withInput()->with('errors', $this->validator->getErrors());
        } else {
            $id_project = $this->request->getVar('id_project');
            $id_user = $this->request->getVar('id_user');
            $email = $this->request->getVar('email');
            $subject = $this->request->getVar('subject');
            $message = $this->request->getVar('message');

            $picture_file = $this->request->getFile('file');
            $picture_name = $picture_file->getRandomName();
            $picture_file->move('src/images/prove', $picture_name);
            $slug = str_pad(mt_rand(1, 999999999999999), 15, '0', STR_PAD_LEFT);


            $data = [
                'id_user' => $id_user,
                'id_project' => $id_project,
                'email' => $email,
                'subject' => $subject,
                'description' => $message,
                'file'  => $picture_name,
                'slug' => $slug
            ];
            if (!$this->complainModel->save($data)) {
                return redirect()->to(previous_url())->with('error', "Data complain gagal ditambah");
            } else {
                return redirect()->to(previous_url())->with('success', "Data complain berhasil ditambah");
            }
        }
    }

    public function history()
    {
        $data = [
            'title' => 'Virtusee | history complain'
        ];
        return view('customer/historycomplain', $data);
    }

    public function personalarticle()
    {
        $file_message = session('errors.file');
        $project =  $this->projectModel->find(user()->id_project);
        $data = [
            'title' => 'Virtusee | article',
            'file_message' => $file_message,
            'project' => $project
        ];
        return view('customer/articlepersonal', $data);
    }

    public function personalarticledetail()
    {
        $data = [
            'title' => 'Virtusee | article detail'
        ];
        return view('customer/articledetailpersonal', $data);
    }
    public function reply()
    {
        $data = [
            'title' => 'Virtusee | article reply'
        ];
        return view('customer/replycomplain', $data);
    }
}
