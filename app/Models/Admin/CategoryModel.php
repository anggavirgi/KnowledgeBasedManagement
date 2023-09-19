<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table            = 'categories';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['name_category','slug','icon'];

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
