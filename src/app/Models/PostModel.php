<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'post_id';
    protected $allowedFields = [
        'post_thumbnail',
        'post_title',
        'post_description',
        'post_content',
        'post_author',
        'post_date'
    ];

}
