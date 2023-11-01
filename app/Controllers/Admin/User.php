<?php

namespace App\Controllers\Admin;

use App\Models\Admin\ProjectModel;
use App\Models\Admin\UserModel;
use App\Models\Admin\ComplainModel;
use CodeIgniter\RESTful\ResourceController;
use Exception;
use Myth\Auth\Password;

use function PHPUnit\Framework\isEmpty;

class User extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */

    protected $userModel;
    protected $projectModel;
    protected $complainModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->projectModel = new ProjectModel();
        $this->complainModel = new ComplainModel();
    }

    public function index()
    {
        $page = $this->request->getGet('page') ?? 1;
        $perPage = $this->request->getGet('perPage') ?? 10;

        $offset = ($page - 1) * $perPage;

        $dataUser = $this->userModel->findAll($perPage, $offset);

        $totalRecords = $this->userModel->countAll();

        $totalPages = ceil($totalRecords / $perPage);

        foreach ($dataUser as &$user) {
            $project = $this->projectModel->find($user['id_project']);
            if ($user['id_project'] !== 0) {
                if ($project !== null) {
                    $user['id_project'] = $project['name_project'];
                } else {
                    $user['id_project'] = 'virtusee';
                }
            }
        }


        $pagination = [
            'page' => $page,
            'perPage' => $perPage,
            'totalRecords' => $totalRecords,
            'totalPages' => $totalPages
        ];
        return view('admin/user', [
            'title' => 'User',
            'users' => $dataUser,
            'pagination' => $pagination,
            'notification' => count($this->complainModel->select("*")->where("is_read", 0)->findAll())
        ]);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {

        $dataProject = $this->projectModel->find();
        $data = [
            'title' => 'Add User',
            'projects' => $dataProject,
            'notification' => count($this->complainModel->select("*")->where("is_read", 0)->findAll())
        ];

        return view('admin/adduser', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {

        $rules = [
            'name'          => 'required|alpha_numeric_space',
            'username'      => 'required|min_length[3]|is_unique[users.username]',
            'email'         => 'required|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[8]',
            'status_user'   => 'required',
            'id_project'    => 'required',
            'level'         => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->route('kb/administrator/user/new')->withInput()->with('errors', $this->validator->getErrors());
        } else {

            $name = $this->request->getVar('name');
            $username = $this->request->getVar('username');
            $email = $this->request->getVar('email');
            $password = Password::hash($this->request->getVar('password'));
            $level = $this->request->getVar('level');
            $id_project = $this->request->getVar('id_project');

            $data = [
                'id_project'    => $id_project,
                'name'          => $name,
                'email'         => $email,
                'username'      => $username,
                'password_hash' => $password,
                'level'         => $level,
                'active'        => 1
            ];
            if (!$this->userModel->save($data)) {
                return redirect()->to('kb/administrator/user')->with('error', "Data user gagal ditambah");
            } else {
                return redirect()->to('kb/administrator/user')->with('success', "Data user berhasil ditambah");
            }
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $dataProject = $this->projectModel->find();
        $data = [
            'title' => 'Edit User',
            'user'  => $this->userModel->find($id),
            'projects' => $dataProject,
            'notification' => count($this->complainModel->select("*")->where("is_read", 0)->findAll())
        ];

        return view('admin/edituser', $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {

        $rules = [
            'name'          => 'required',
            'id_project'    => 'required',
            'level'         => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('kb/administrator/user/edit/' . $id)->withInput()->with('errors', $this->validator->getErrors());
        } else {

            $user = $this->userModel->find($id);
            $name = $this->request->getVar('name');
            $username = $this->request->getVar('username');
            $email = $this->request->getVar('email');
            $pass = $this->request->getVar('password');
            $level = $this->request->getVar('level');
            $id_project = $this->request->getVar('id_project');

            $cek_username = $this->userModel->select('*')->where('username', $username)->where('id !=', $id)->findAll();
            if ($cek_username) {
                return redirect()->to('kb/administrator/user/edit/' . $id)->withInput()->with('errors', ['username' => 'Username sudah terdaftar']);
            } else {
                $cek_email = $this->userModel->select('*')->where('email', $email)->where('id !=', $id)->findAll();
                if ($cek_email) {
                    return redirect()->to('kb/administrator/user/edit/' . $id)->withInput()->with('errors', ['email' => 'Alamat email sudah terdaftar']);
                } else {
                    if (!empty($pass)) {
                        $password = Password::hash($pass);
                    } else {
                        $password = $user['password_hash'];
                    }

                    $data = [
                        'id_project'    => $id_project,
                        'name'          => $name,
                        'email'         => $email,
                        'username'      => $username,
                        'password_hash' => $password,
                        'level'         => $level
                    ];

                    // dd($data);

                    $this->userModel->update($id, $data);

                    return redirect()->route('kb/administrator/user')->with('success', "Data user berhasil diupdate");
                }
            }
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->userModel->delete($id);
        return redirect()->to('kb/administrator/user')->with('success', "Data user berhasil dihapus");
    }

    public function detail($id = null)
    {
        $dataUser = $this->userModel->find($id);

        $data = [
            'title' => 'Detail User',
            'user' => $dataUser,
            'notification' => count($this->complainModel->select("*")->where("is_read", 0)->findAll())
        ];

        return view('admin/detailuser', $data);
    }

    public function deleteBatchUser()
    {
        $id_user = $this->request->getVar("ids");
        for ($i = 0; $i < count($id_user); $i++) {
            $id = $id_user[$i];
            $this->userModel->delete($id);
        }

        return redirect()->to('kb/administrator/user')->with('success', "Data user berhasil dihapus");
    }
}
