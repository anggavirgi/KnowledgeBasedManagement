<?php

namespace App\Controllers\Admin;

use App\Models\Admin\UserModel;
use CodeIgniter\RESTful\ResourceController;

use function PHPUnit\Framework\isEmpty;

class User extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */

    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'User',
            'users' => $this->userModel->findAll()
        ];

        return view('admin/user', $data);
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
        $data = [
            'title' => 'Add User'
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
            $password = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
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

            $this->userModel->save($data);

            return redirect()->to('kb/administrator/user')->with('success', "Data user berhasil ditambah");
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $data = [
            'title' => 'Edit User',
            'user'  => $this->userModel->find($id)
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
            'name'          => 'required|alpha_dash',
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



            if (!empty($pass)) {
                $password = password_hash($pass, PASSWORD_DEFAULT);
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

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->userModel->delete($id);
        return redirect()->route('kb/administrator/user')->with('success', "Data user berhasil dihapus");
    }
}
