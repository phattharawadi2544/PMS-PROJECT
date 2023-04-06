<?php namespace App\Models;

use CodeIgniter\Model;

class PharmacyModel extends Model {
    protected $table = 'pharmacy';
    
    protected $allowedFields = ['pharmacy_id', 'reg_no', 'barcode','std_24' ,'pharmacy_name', 'commonpha_name', 'pharmacy_details', 'counting_unit', 'pharmacy_warning', 'pharmacy_group', 'price', 'status', 'min_stock', 'max_stock'];
    
}