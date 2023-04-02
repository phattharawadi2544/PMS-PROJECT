<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'user';
    
    protected $allowedFields = ['user_id', 'username', 'id_license', 'password', 'email', 'f_name', 'l_name', 'tel', 'work_experience', 'address', 'status', 'licenseexp', 'hiredate', 'user_role', 'salary'];
    
}