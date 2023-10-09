<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Database\Migrations\ComplainReply;
use App\Models\Admin\ComplainModel;
use App\Models\Admin\ComplainReplyModel;
use PhpParser\Node\Expr\FuncCall;

class Complain extends BaseController
{

  protected $complainModel;
  protected $complainReplyModel;

  public function __construct()
  {
    $this->complainModel = new ComplainModel();
    $this->complainReplyModel = new ComplainReplyModel();
  }

  public function index()
  {
    $page = $this->request->getGet('page') ?? 1;
    $perPage = $this->request->getGet('perPage') ?? 10;

    $offset = ($page - 1) * $perPage;

    $complain =  $this->complainModel->findAll($perPage, $offset);

    $totalRecords = $this->complainModel->countAll();

    $totalPages = ceil($totalRecords / $perPage);

    $pagination = [
      'page' => $page,
      'perPage' => $perPage,
      'totalRecords' => $totalRecords,
      'totalPages' => $totalPages
    ];

    $data = [
      'title'     => 'Complain',
      'complains' => $complain,
      'pagination' => $pagination
    ];

    return view('admin/complain', $data);
  }

  public function updateStatus()
  {
    $id = $this->request->getVar('id');
    $status = $this->request->getVar('status');
    $this->complainModel->set('status', $status);
    $this->complainModel->where('id', $id);
    if (!$this->complainModel->update()) {
      return redirect()->to('kb/administrator/complain');
    } else {
      return redirect()->to('kb/administrator/complain');
    }
  }

  public function updateVisibility()
  {
    $id = $this->request->getVar('id');
    $visibility = $this->request->getVar('visibility');
    $this->complainModel->set('visibility', $visibility);
    $this->complainModel->where('id', $id);
    if (!$this->complainModel->update()) {
      return redirect()->to('kb/administrator/complain');
    } else {
      return redirect()->to('kb/administrator/complain');
    }
  }

  public function reply($id)
  {
    $data = [
      'title'         => 'Reply Complain',
      'complain'      => $this->complainModel->find($id),
      'complainReply' => $this->complainReplyModel->select('*')->where("id_complain", $id)->findAll()
    ];

    return view('admin/replycomplain', $data);
  }

  public function sendReply()
  {
    $id_complain = $this->request->getVar('id_complain');
    $id_user = $this->request->getVar('id_user');
    $message = $this->request->getVar('message');

    $data = [
      'id_complain' => $id_complain,
      'id_user'     => $id_user,
      'description' => $message,
      'is_read'     => 0
    ];

    if (!$this->complainReplyModel->save($data)) {
      return redirect()->to('kb/administrator/complain/reply/' . $id_complain)->with('errorMessage', "Pesan gagal terkirim");
    } else {
      return redirect()->to('kb/administrator/complain/reply/' . $id_complain)->with('successMessage', "Pesan telah terkirim");
    }
  }
}
