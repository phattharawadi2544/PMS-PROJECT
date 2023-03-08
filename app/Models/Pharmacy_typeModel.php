<?php namespace App\Models;

use CodeIgniter\Model;

class Pharmacy_typeModel extends Model {
    protected $table = 'pharmacy_group';
    
    protected $allowedFields = ['id_pharmacy_type', 'pharmacy_type_name','status'];
    
}