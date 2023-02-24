<?php namespace App\Models;

use CodeIgniter\Model;

class LotModel extends Model {
    protected $table = 'lot';
    
    protected $allowedFields = ['pharmacy_id', 'lot_id', 'batch_no', 'exp_date', 'manu_date', 'amount', 'sale_price', 'cost_price', 'remain', 'shelf_life', 'id_supplie'];
    
}