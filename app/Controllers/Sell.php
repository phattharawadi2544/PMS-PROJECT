<?php

namespace App\Controllers;
use App\Models\SellModel;

class Sale extends BaseController
{
    public function index()
    {
        $model = new SellModel();
        $data["sell"] = $model->orderBy('sell_id','ASC')->findAll();

        return view('template/header.php').
        view('sell/sel.php',$data).
        view('template/footer.php');
    }

    
    
    
}
