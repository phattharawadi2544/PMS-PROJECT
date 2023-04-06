<?php

namespace App\Controllers;
use App\Models\LotModel;
use App\Models\SupplierModel;
use App\Models\PharmacyModel;

class Stock extends BaseController
{
   public function index()
   {
       $session = session();
       if(is_null($session->get('login'))){
           return redirect()->to('/login');
       }
       
       $model = new LotModel();
       $data["lot_list"] = $model->where('status <>',0)->orderBy('lot_id','ASC')->findAll();

       $pharmacyModel = new PharmacyModel();
       $data["pharmacy_list"] = $pharmacyModel->where('status <>',0)->orderBy('pharmacy_name','ASC')->findAll();
       $supplierModel = new SupplierModel();
       $data["supplier_list"]  = $supplierModel->where('status <>',0)->orderBy('company_name','ASC')->findAll();

       
       return view('template/header.php').
       view('inventory/lot.php',$data).
       view('template/footer.php');
   }
}