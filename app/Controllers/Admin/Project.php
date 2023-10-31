<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\ProjectModel;
use App\Models\Admin\ComplainModel;

class Project extends BaseController
{

    protected $projectModel;
    protected $complainModel;

    public function __construct()
    {
        $this->projectModel = new ProjectModel();
        $this->complainModel = new ComplainModel();
    }

    public function index()
    {

        $page = $this->request->getGet('page') ?? 1;
        $perPage = $this->request->getGet('perPage') ?? 10;
        $offset = ($page - 1) * $perPage;
        $dataUser = $this->projectModel->findAll($perPage, $offset);
        $totalRecords = $this->projectModel->countAll();
        $totalPages = ceil($totalRecords / $perPage);

        $pagination = [
            'page' => $page,
            'perPage' => $perPage,
            'totalRecords' => $totalRecords,
            'totalPages' => $totalPages
        ];

        $data = [
            "title"         => "Project",
            "projects"       => $this->projectModel->findAll(),
            "pagination"    => $pagination,
            'notification' => count($this->complainModel->select("*")->where("is_read", 0)->findAll())
        ];

        return view('admin/project', $data);
    }

    public function new()
    {
        $data = [
            'title' => 'Add User',
            'notification' => count($this->complainModel->select("*")->where("is_read", 0)->findAll())
        ];

        return view('admin/addproject', $data);
    }

    public function create()
    {
        $rules = [
            'name_project' => 'required|is_unique[project.name_project]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('kb/administrator/project/new')->withInput()->with('errors', $this->validator->getErrors());
        } else {
            $name_project = $this->request->getVar('name_project');
            $data = [
                'name_project' => $name_project,
            ];
            if (!$this->projectModel->save($data)) {
                return redirect()->to('kb/administrator/project')->with('error', "Data project gagal ditambah");
            } else {
                return redirect()->to('kb/administrator/project')->with('success', "Data project berhasil ditambah");
            }
        }
    }

    public function edit($id = null)
    {
        $data = [
            'title' => 'Edit Project',
            'project'  => $this->projectModel->find($id),
            'notification' => count($this->complainModel->select("*")->where("is_read", 0)->findAll())
        ];

        return view('admin/editproject', $data);
    }

    public function update($id = null)
    {
        $rules = [
            'name_project' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('kb/administrator/project/edit/' . $id)->withInput()->with('errors', $this->validator->getErrors());
        } else {
            $name_project = $this->request->getVar('name_project');
            $cek_project = $this->projectModel->select('*')->where('name_project', $name_project)->where('id !=', $id)->findAll();
            if ($cek_project) {
                return redirect()->to('kb/administrator/project/edit/' . $id)->withInput()->with('errors', ["name_project" => "Nama Project sudah tersedia"]);
            } else {

                $data = [
                    'name_project' => $name_project,
                ];
                if (!$this->projectModel->update($id, $data)) {
                    return redirect()->to('kb/administrator/project')->with('error', "Data project gagal diedit");
                } else {
                    return redirect()->to('kb/administrator/project')->with('success', "Data project berhasil diedit");
                }
            }
        }
    }

    public function delete($id = null)
    {
        if (!$this->projectModel->delete($id)) {
            return redirect()->to('kb/administrator/project')->with('error', "Data project gagal hapus");
        } else {
            return redirect()->to('kb/administrator/project')->with('success', "Data project berhasil dihapus");
        }
    }

    public function deleteBatchProject()
    {
        $id_project = $this->request->getVar("ids");
        for ($i = 0; $i < count($id_project); $i++) {
            $id = $id_project[$i];
            $this->projectModel->delete($id);
        }

        return redirect()->to('kb/administrator/project')->with('success', "Data project berhasil dihapus");
    }
}
