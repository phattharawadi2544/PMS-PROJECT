<?php namespace App\Models;

use CodeIgniter\Model;

class Recive_typeModel extends Model {
    protected $table = 'recive_type';
    
    protected $allowedFields = ['recive_type_id', 'recive_name','status'];
    
}