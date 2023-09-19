<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table            = 'article';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['id_content','id_project'];

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
