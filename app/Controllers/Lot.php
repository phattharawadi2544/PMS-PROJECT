<?php

namespace App\Controllers;
use App\Models\LotModel;

class Lot extends BaseController
{
  
    
    public function index()
    {
        $model = new LotModel();
        $data["lot_list"] = $model->orderBy('lot_id','ASC')->findAll();
        
        return view('template/header.php').
        view('lot/lot.php',$data).
        view('template/footer.php');
    }

   
    
}
