<?php namespace App\Models;

use CodeIgniter\Model;

class OrderDetailModel extends Model {
    protected $table = 'order_detail';
    
    protected $allowedFields = ['pharmacy_id', 'order_id', 'lot_id', 'sale_price', 'cost_price', 'amount'];
    
    
}