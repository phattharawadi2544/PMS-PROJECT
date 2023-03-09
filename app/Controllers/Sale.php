<?php

namespace App\Controllers;
use App\Models\OrderModel;

class Sale extends BaseController
{
    public function sale_all()
    {
        $model = new OrderModel();
        $data["order_list"] = $model->orderBy('order_id','ASC')->findAll();

        return view('template/header.php').
        view('sale/sale_all.php',$data).
        view('template/footer.php');
    }

    public function sale_today()
    {
        return view('template/header.php').
        view('sale/sale_today.php').
        view('template/footer.php');
    }

    public function sale_week()
    {
        return view('template/header.php').
        view('sale/sale_week.php').
        view('template/footer.php');
    }
    public function sale_new()
    {
        return view('template/header.php').
        view('sale/sale_new.php').
        view('sale/sale_footer.php');
    }
    public function sale_test()
    {
        return view('template/header.php').
        view('sale/sale_test.php').
        view('template/footer.php');
    }
    
    
    
}
