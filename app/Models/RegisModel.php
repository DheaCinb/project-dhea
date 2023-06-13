<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisModel extends Model
{

    protected $table = 'member';
    protected $primaryKey = 'id';
    protected $allowedFields = ['no', 'id', 'nama', 'email', 'wa', 'username', 'password'];

    public function addMember($data)
    {
        $this->insert($data);
    }

}