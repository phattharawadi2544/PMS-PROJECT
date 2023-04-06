<?php

namespace App\Controllers;
use App\Models\LotModel;
use App\Models\SupplierModel;
use App\Models\PharmacyModel;
use App\Models\Pharmacy_inventoryModel;

class Inventory extends BaseController
{
  
    public function index()
    {
        $session = session();
        if(is_null($session->get('login'))){
            return redirect()->to('/login');
        }
        
        $model = new Pharmacy_inventoryModel();
        $data["inventory_list"] = $model->orderBy('pharmacy_id','ASC')->findAll();
        
        return view('template/header.php').
        view('inventory/inventory.php',$data).
        view('template/footer.php');
    }
   
    

}