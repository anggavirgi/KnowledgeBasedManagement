<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table            = 'project';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['name_project'];

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
