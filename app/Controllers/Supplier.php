<?php

namespace App\Controllers;
use App\Models\SupplierModel;

class Supplier extends BaseController
{
    public function index()
    {
        $model = new SupplierModel();
        $data["supplie"] = $model->orderBy('id_supplier','ASC')->findAll();
        

        return view('template/header.php').
        view('supplier/supplier.php',$data).
        view('template/footer.php');
    }
    
    
}
