<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ContentModel extends Model
{
    protected $table            = 'content';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['id_category', 'id_sub_category', 'title', 'slug', 'content', 'good_insight', 'bad_insight', 'content_views', 'visibility', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
