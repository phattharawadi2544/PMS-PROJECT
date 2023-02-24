<?php namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model {
    protected $table = 'orders';
    
    protected $allowedFields = ['order_id', 'order_date', 'seller_id', 'recive_type_id', 'total_price', 'vat'];
    
    
}