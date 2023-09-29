<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class SubCategoryModel extends Model
{
    protected $table            = 'sub_category';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['id_category', 'name_subcategory', 'slug'];

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
