<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ContentModel extends Model
{
    protected $table            = 'content';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['id_category','id_sub_category','title','slug','content','good_insight','bad_insight','visibility'];

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
