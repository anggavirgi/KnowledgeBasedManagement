<?php

namespace App\Controllers;

use App\Controllers\Admin\Complain;
use App\Models\Admin\ComplainModel;

class Home extends BaseController
{
    protected $complainModel;

    public function __construct()
    {
        $this->complainModel = new ComplainModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Virtusee | Knowledge Based'
        ];
        return view('customer/index', $data);
    }

    public function generalarticle()
    {
        $data = [
            'title' => 'Virtusee | article'
        ];
        return view('customer/articlegeneral', $data);
    }

    public function generalarticledetail()
    {
        $data = [
            'title' => 'Virtusee | article detail'
        ];
        return view('customer/articledetailgeneral', $data);
    }

    public function complain()
    {
        $data = [
            'title' => 'Virtusee | complain'
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

            $data = [
                'id_user' => $id_user,
                'id_project' => $id_project,
                'email' => $email,
                'subject' => $subject,
                'description' => $message,
                'file'  => $picture_name
            ];
            if (!$this->complainModel->save($data)) {
                return redirect()->to('kb/complain')->with('error', "Data complain gagal ditambah");
            } else {
                return redirect()->to('kb/complain')->with('success', "Data complain berhasil ditambah");
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
        $data = [
            'title' => 'Virtusee | article'
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
