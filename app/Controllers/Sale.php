<?php

namespace App\Controllers;
use App\Models\OrderModel;
use App\Models\PharmacyModel;

class Sale extends BaseController
{
    public function sale_all()
    {
        $session = session();
        if(is_null($session->get('login'))){
            $session->setFlashdata('message_session', '302');
            return redirect()->to('/login');
        }

        $model = new OrderModel();
        $data["order_list"] = $model->orderBy('order_id','ASC')->findAll();

        return view('template/header.php').
        view('sale/sale_all.php',$data).
        view('template/footer.php');
    }

    public function sale_today()
    {
        $session = session();
        if(is_null($session->get('login'))){
            $session->setFlashdata('message_session', '302');
            return redirect()->to('/login');
        }
        return view('template/header.php').
        view('sale/sale_today.php').
        view('template/footer.php');
    }

    public function sale_week()
    {
        $session = session();
        if(is_null($session->get('login'))){
            $session->setFlashdata('message_session', '302');
            return redirect()->to('/login');
        }
        return view('template/header.php').
        view('sale/sale_week.php').
        view('template/footer.php');
    }
    public function sale_new()
    {
        $session = session();
        if(is_null($session->get('login'))){
            $session->setFlashdata('message_session', '302');
            return redirect()->to('/login');
        }
        return view('template/header.php').
        view('sale/sale_new.php').
        view('sale/sale_footer.php');
    }
    public function sale_test()
    {
        $session = session();
        if(is_null($session->get('login'))){
            $session->setFlashdata('message_session', '302');
            return redirect()->to('/login');
        }
        
        $model = new PharmacyModel();
        $data["pharmacy_list"] = $model->where('status',1)->orderBy('pharmacy_id','ASC')->findAll();

        return view('template/header.php').
        view('sale/sale_test.php',$data).
        view('template/footer.php');
    }
    
    
    
}
