<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "users_id";
    protected $allowedFields = [
        "users_name",
        "users_email",
        "users_password"
    ];

    public function getByEmail($email)
    {
        return $this->where("users_email", $email)->first();
    }
}