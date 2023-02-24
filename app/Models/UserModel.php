<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'user';
    
    protected $allowedFields = ['user_id', 'username', 'password', 'email', 'f_name', 'l_name', 'tel', 'address', 'status', 'user_role'];
    
}