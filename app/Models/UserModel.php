<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'user';
    
    protected $allowedFields = ['user_id', 'id_license','username', 'password', 'email', 'f_name', 'l_name', 'tel', 'work_experience','address','hiredate','licenseexp', 'status', 'user_role'];
    
}