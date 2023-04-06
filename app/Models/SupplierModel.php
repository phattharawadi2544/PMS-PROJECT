<?php namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model {
    protected $table = 'supplier';
    
    protected $allowedFields = ['id_supplier','company_name', 'tel','address','status'];
   
    
    
    
}