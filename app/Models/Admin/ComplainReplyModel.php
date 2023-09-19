<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ComplainReplyModel extends Model
{
    protected $table            = 'complain_reply';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['id_complain','id_user','description','is_read'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

}
