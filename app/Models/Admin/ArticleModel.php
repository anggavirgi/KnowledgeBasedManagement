<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table            = 'article';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['id_content','id_project','created_at','updated_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

}
