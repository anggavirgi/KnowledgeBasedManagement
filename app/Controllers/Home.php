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
        $content = $this->db->table('content a')
            ->select('a.*, b.name_category AS name_category, c.name_subcategory AS name_subcategory')
            ->join('categories b', 'a.id_category = b.id')
            ->join('sub_category c', 'a.id_sub_category = c.id')
            ->where('a.visibility', 'open')
            ->get()
            ->getResultArray();
        if (logged_in()) {
            $project =  $this->projectModel->find(user()->id_project);
        } else {
            $project = "";
        }
        $complain = $this->db->table('complains')
            ->select('complains.*, project.name_project')
            ->join('project', 'project.id = complains.id_project')
            ->where(['complains.visibility' => 'open', 'complains.status' => 'solved'])
            ->get()
            ->getResultArray();

        $data = [
            'title' => 'Virtusee | Knowledge Based',
            'file_message' => $file_message,
            'category' => $category,
            'contents' => $content,
            'complains' => $complain,
            'project' => $project
        ];
        return view('customer/index', $data);
    }

    public function generalarticle()
    {
        $category = $this->request->getVar('category');
        $subcategory = $this->request->getVar('subcategory');
        $categories =  $this->categoryModel->findAll();
        $subcategories =  $this->subCategoryModel->findAll();
        $content = $this->db->table('content a')
            ->select('a.*, b.name_category AS name_category, c.name_subcategory AS name_subcategory')
            ->join('categories b', 'a.id_category = b.id')
            ->join('sub_category c', 'a.id_sub_category = c.id')
            ->orderBy('a.content_views', 'DESC')
            ->limit(5)
            ->get()
            ->getResultArray();
        if (logged_in()) {
            $project =  $this->projectModel->find(user()->id_project);
        } else {
            $project = "";
        }
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
        $category = $this->request->getVar('category');
        $subcategory = $this->request->getVar('subcategory');
        $id = $this->request->getVar('article');
        $categories =  $this->categoryModel->findAll();
        $subcategories =  $this->subCategoryModel->findAll();
        $content = $this->db->table('content a')
            ->select('a.*, b.name_category AS name_category, c.name_subcategory AS name_subcategory')
            ->join('categories b', 'a.id_category = b.id')
            ->join('sub_category c', 'a.id_sub_category = c.id')
            ->where('b.name_category', $category)
            ->where('c.name_subcategory', $subcategory)
            ->where('a.slug', $id)
            ->get()
            ->getRow();
        if (logged_in()) {
            $project =  $this->projectModel->find(user()->id_project);
        } else {
            $project = "";
        }
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

    public function updateReaction()
    {
        $id = $this->request->getVar('id');
        $type = $this->request->getVar('type');
        if ($type === 'like') {
            $content = $this->contentModel
                ->where('id', $id)
                ->first();
            if ($content) {
                $good_insight = $content['good_insight'] + 1;
                $this->contentModel
                    ->where('id', $content['id'])
                    ->set('good_insight', $good_insight);
            }
        } else {
            $content = $this->contentModel
                ->where('id', $id)
                ->first();
            if ($content) {
                $bad_insight = $content['bad_insight'] + 1;
                $this->contentModel
                    ->where('id', $content['id'])
                    ->set('bad_insight', $bad_insight);
            }
        }
        if (!$this->contentModel->update()) {
            return redirect()->to(current_url())->with('error', "Terimakasih feedback-nya");
        } else {
            return redirect()->to(current_url())->with('success', "Terimakasih feedback-nya")->with('' . $type . '', $type);
        }
    }

    public function updateContentviews()
    {
        $id = $this->request->getVar('article');
        $href = $this->request->getVar('href');
        $content = $this->contentModel
            ->where('id', $id)
            ->first();
        if ($content) {
            $content_views = $content['content_views'] + 1;
            $this->contentModel
                ->where('id', $content['id'])
                ->set('content_views', $content_views);
        }
        if (!$this->contentModel->update()) {
            return redirect()->to($href);
        } else {
            return redirect()->to($href);
        }
    }

    public function complain()
    {
        if (logged_in()) {
            $project =  $this->projectModel->find(user()->id_project);
        } else {
            $project = "";
        }
        $file_message = session('errors.file');
        $complain = $this->db->table('complains')
            ->select('complains.*, project.name_project')
            ->join('project', 'project.id = complains.id_project')
            ->where('complains.id_user', user()->id)
            ->whereNotIn('complains.status', ['solved'])
            ->get()
            ->getResultArray();
        $data = [
            'title' => 'Virtusee | complain',
            'file_message' => $file_message,
            'project' => $project,
            'complain' => $complain
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
            return redirect()->to(previous_url())->withInput()->with('errors', $this->validator->getErrors());
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
        $file_message = session('errors.file');
        if (logged_in()) {
            $project =  $this->projectModel->find(user()->id_project);
        } else {
            $project = "";
        }
        $complain = $this->db->table('complains')
            ->select('complains.*, project.name_project')
            ->join('project', 'project.id = complains.id_project')
            ->where('complains.id_user', user()->id)
            ->where('complains.status', 'solved')
            ->get()
            ->getResultArray();
        $data = [
            'title' => 'Virtusee | history complain',
            'file_message' => $file_message,
            'project' => $project,
            'complain' => $complain

        ];
        return view('customer/historycomplain', $data);
    }

    public function personalarticle()
    {
        if (logged_in()) {
            $project =  $this->projectModel->find(user()->id_project);
        } else {
            $project = "";
        }
        $file_message = session('errors.file');
        $content = $this->db->table('content a')
            ->select('a.*, b.id_project AS id_project, c.name_project AS name_project, d.name_category AS name_category, e.name_subcategory AS name_subcategory')
            ->join('article b', 'a.id = b.id_content')
            ->join('project c', 'b.id_project = c.id')
            ->join('categories d', 'a.id_category = d.id')
            ->join('sub_category e', 'a.id_sub_category = e.id')
            ->where('b.id_project', user()->id_project)
            ->get()
            ->getResultArray();
        $data = [
            'title' => 'Virtusee | article',
            'file_message' => $file_message,
            'project' => $project,
            'content' => $content
        ];
        return view('customer/articlepersonal', $data);
    }

    public function personalarticledetail()
    {
        if (logged_in()) {
            $project =  $this->projectModel->find(user()->id_project);
        } else {
            $project = "";
        }
        $category = $this->request->getVar('category');
        $subcategory = $this->request->getVar('subcategory');
        $id = $this->request->getVar('article');
        $categories =  $this->categoryModel->findAll();
        $subcategories =  $this->subCategoryModel->findAll();
        $content = $this->db->table('content a')
            ->select('a.*, b.name_category AS name_category, c.name_subcategory AS name_subcategory')
            ->join('categories b', 'a.id_category = b.id')
            ->join('sub_category c', 'a.id_sub_category = c.id')
            ->where('b.name_category', $category)
            ->where('c.name_subcategory', $subcategory)
            ->where('a.slug', $id)
            ->get()
            ->getRow();
        $data = [
            'title' => 'Virtusee | article detail',
            'category_title' => $category,
            'subcategory_title' => $subcategory,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'content' => $content,
            'project' => $project
        ];
        return view('customer/articledetailpersonal', $data);
    }

    public function reply()
    {
        $slug = $this->request->getVar('complainId');
        if (logged_in()) {
            $project =  $this->projectModel->find(user()->id_project);
        } else {
            $project = "";
        }
        $data = [
            'title' => 'Virtusee | article reply',
            'project' => $project
        ];
        return view('customer/replycomplain', $data);
    }

    public function allcomplain()
    {
        if (logged_in()) {
            $project =  $this->projectModel->find(user()->id_project);
        } else {
            $project = "";
        }
        $file_message = session('errors.file');
        $complain = $this->db->table('complains')
        ->select('complains.*, project.name_project')
        ->join('project', 'project.id = complains.id_project')
        ->where(['visibility' => 'open', 'status' => 'solved'])
        ->get()
        ->getResultArray();
        $data = [
            'title' => 'Virtusee | complain',
            'file_message' => $file_message,
            'project' => $project,
            'complains' => $complain
        ];
        return view('customer/complaingeneral', $data);
    }

    public function searchresult()
    {
        $search = $this->request->getVar('search');

        $content = $this->db->table('content a')
        ->select('*')
        ->join('article b', 'a.id = b.id_content')
        ->join('project c', 'b.id_project = c.id')
        ->join('categories d', 'a.id_category = d.id')
        ->join('sub_category e', 'a.id_sub_category = e.id')
        ->like('a.title', $search, 'both')
        ->where('a.visibility', 'open')
        ->get()
        ->getResultArray();

        $complain = $this->db->table('complains')
        ->select('complains.*, project.name_project')
        ->join('project', 'project.id = complains.id_project')
        ->like('complains.subject', $search, 'both')
        ->where(['complains.visibility' => 'open', 'complains.status' => 'solved'])
        ->get()
        ->getResultArray();

        if (logged_in()) {
            $project =  $this->projectModel->find(user()->id_project);
        } else {
            $project = "";
        }
        
        $data = [
            'title' => 'Virtusee | complain',
            'contents' => $content,
            'complains' => $complain,
            'project' => $project,
            'keyword' => $search
        ];
        return view('customer/searchresult', $data);
    }
}
