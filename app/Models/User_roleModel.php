<?php namespace App\Models;

use CodeIgniter\Model;

class User_roleModel extends Model {
    protected $table = 'user_role';
    
    protected $allowedFields = ['role_id', 'role_name'];
    
}