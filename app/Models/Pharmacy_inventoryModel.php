<?php namespace App\Models;

use CodeIgniter\Model;

class Pharmacy_inventoryModel extends Model {
    protected $table = 'pharmacy_inventory';
    
    protected $allowedFields = ['pharmacy_id', 'reg_no', 'std_24', 'barcode', 'pharmacy_name', 'commonpha_name', 'pharmacy_details', 'counting_unit', 'pharmacy_warning', 'pharmacy_group', 'price', 'status', 'min_stock', 'max_stock', 'pharmacy_type_name', 'total_remain', 'average_cost'];
    
}