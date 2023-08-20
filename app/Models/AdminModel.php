<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $useTimestamps = true;
    protected $createdField  = false;
    protected $updatedField   = false;
    //protected $allowedFields = ['pendulang']; //table yang diizinkan untuk di kelola
}
