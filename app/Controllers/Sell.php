<?php

namespace App\Controllers;
use App\Models\OrderModel;
use App\Models\PharmacyModel;

class Sell extends BaseController
{
    public function index()
    {
        $session = session();
        if(is_null($session->get('login'))){
            $session->setFlashdata('message_session', '302');
            return redirect()->to('/login');
        }
        
        $model = new PharmacyModel();
        $data["pharmacy_list"] = $model->where('status',1)->orderBy('pharmacy_id','ASC')->findAll();

        return view('template/header.php').
        view('sell/sell.php',$data).
        view('template/footer.php');
    }

   
    
}