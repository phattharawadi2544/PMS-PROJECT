<?php namespace App\Models;

use CodeIgniter\Model;

class PharmacyModel extends Model {
    protected $table = 'pharmacy';
    
    protected $allowedFields = ['pharmacy_id', 'reg_no','barcode', 'pharmacy_name', 'pharmacy_details', 'pharmacy_warning','counting_unit','pharmacy_group', 'pharmacy_type','cost','price','status'];
    
}