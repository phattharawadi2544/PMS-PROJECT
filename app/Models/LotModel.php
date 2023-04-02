<?php namespace App\Models;

use CodeIgniter\Model;

class LotModel extends Model {
    protected $table = 'lot';
    
    protected $allowedFields = ['lot_id', 'pharmacy_id', 'batch_no', 'import_date', 'exp_date', 'manu_date', 'amount', 'cost_price', 'remain', 'id_supplie'];
    
}