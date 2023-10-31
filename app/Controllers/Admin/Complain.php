<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Database\Migrations\ComplainReply;
use App\Models\Admin\ComplainModel;
use App\Models\Admin\ComplainReplyModel;
use PhpParser\Node\Expr\FuncCall;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Border;


class Complain extends BaseController
{

  protected $complainModel;
  protected $complainReplyModel;
  protected $db;

  public function __construct()
  {
    $this->complainModel = new ComplainModel();
    $this->complainReplyModel = new ComplainReplyModel();
    $this->db = db_connect();
  }

  public function index()
  {
    $dates = $this->request->getGet('dates');
    $methodFilter = $this->request->getGet('methodFilter');
    $page = $this->request->getGet('page') ?? 1;
    $perPage = $this->request->getGet('perPage') ?? 10;

    $offset = ($page - 1) * $perPage;

    if (!empty($dates)) {
      list($start_date, $end_date) = explode("-", $dates);
      $start_date = date('Y-m-d', strtotime($start_date));
      $end_date = date('Y-m-d', strtotime($end_date));
      $this->complainModel->where("created_at >=", $start_date)->where("created_at <=", $end_date);
    }

    if (!empty($methodFilter)) {
      $this->complainModel->where("method", $methodFilter);
    }

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
      'pagination' => $pagination,
      'dates'     => $dates,
      'methodFilter'     => $methodFilter
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
    $complain = $this->db->table('complains a')
      ->select('a.*, b.username AS username, b.level')
      ->join('users b', 'a.id_user = b.id')
      ->where('a.id', $id)
      ->get()
      ->getRowArray();
    $data = [
      'title'         => 'Reply Complain',
      'complain'      => $complain,
      'complainReply' => $this->db->table('complain_reply')->select('complain_reply.*, users.level')->join("users", "complain_reply.id_user = users.id")->where("complain_reply.id_complain", $id)->orderBy('complain_reply.created_at', 'ASC')->get()->getResultArray()
    ];

    // dd($data['complainReply']);

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

  function exportDataToExcel()
  {

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    $data = [
      ['No', 'Email', 'Complain', 'Status', 'Open / Close']
    ];
    $complains = $this->complainModel->findAll();
    $i = 1;
    foreach ($complains as $complains) {
      $rowData = [];
      array_push($rowData, $i, $complains['email'], $complains['description'], $complains['status'], $complains['visibility']);

      array_push($data, $rowData);
      $i++;
    }

    // Set data ke dalam spreadsheet
    $row = 1;
    foreach ($data as $rowData) {
      $col = 1;
      foreach ($rowData as $cellData) {
        if ($row === 1) {
          $sheet->getStyleByColumnAndRow($col, $row)->getFont()->setBold(true);
        }
        // Atur border untuk sel-sel
        $style = $sheet->getStyleByColumnAndRow($col, $row);
        $style->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);
        $sheet->setCellValueByColumnAndRow($col, $row, $cellData);
        $col++;
      }
      $row++;
    }

    // Membuat file Excel
    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
    $filename = 'complains.xlsx';

    // Atur header HTTP untuk menghasilkan file XLSX
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

    // Tulis file Excel ke output
    $writer->save('php://output');
  }
}
