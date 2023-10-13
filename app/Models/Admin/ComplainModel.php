<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ComplainModel extends Model
{
    protected $table            = 'complains';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['id_user', 'id_project', 'email', 'subject', 'description', 'file', 'is_read', 'status', 'visibility', 'slug'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
