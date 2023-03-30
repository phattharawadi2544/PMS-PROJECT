<?php

namespace App\Controllers;
use App\Models\OrderModel;
use App\Models\OrderDetailModel;
use App\Models\PharmacyModel;


class Order extends BaseController
{
    public function order_detail()
    {
        $session = session();
        if(is_null($session->get('login'))){
            $session->setFlashdata('message_session', '302');
            return redirect()->to('/login');
        }
        $start_date="";
        $end_date ="";
        if(isset($_GET['start_date'])){
            $start_date = $_GET['start_date'];
        }
        if(isset($_GET['end_date'])){
            $end_date = $_GET['end_date'];
        }
        
        
        // var_dump( $start_date);
        // var_dump( $end_date);
        // die();
        $model = new OrderModel();
        if($start_date==""){
            $data["orders_list"] = $model->orderBy('order_id','ASC')->findAll();
        }else{
            $array_where = ['order_date >=' => $start_date, 'order_date <=' => $end_date.' 23:59:59'];
            $data["orders_list"] = $model->where($array_where)->orderBy('order_id','ASC')->findAll();
        }
       
        // $data["order_detail"] = $model->orderBy('order_id','ASC')->findAll();
        $model = new PharmacyModel();
        
        $data["pharmacy_list"] = $model->where('status',1)->orderBy('pharmacy_id','ASC')->findAll();

        return view('template/header.php').
        view('report/order_detail.php',$data).
        view('template/footer.php');
    }

    public function sales_specially()
    {
        $session = session();
        if(is_null($session->get('login'))){
            $session->setFlashdata('message_session', '302');
            return redirect()->to('/login');
        }
        $start_date="";
        $end_date ="";
        if(isset($_GET['start_date'])){
            $start_date = $_GET['start_date'];
        }
        if(isset($_GET['end_date'])){
            $end_date = $_GET['end_date'];
        }
        
        
        // var_dump( $start_date);
        // var_dump( $end_date);
        // die();
        $model = new OrderModel();
        if($start_date==""){
            $data["orders_list"] = $model->orderBy('order_id','ASC')->findAll();
        }else{
            $array_where = ['order_date >=' => $start_date, 'order_date <=' => $end_date.' 23:59:59'];
            $data["orders_list"] = $model->where($array_where)->orderBy('order_id','ASC')->findAll();
        }
       
        // $data["order_detail"] = $model->orderBy('order_id','ASC')->findAll();
        $model = new PharmacyModel();
        
        $data["pharmacy_list"] = $model->where('status',1)->orderBy('pharmacy_id','ASC')->findAll();

        return view('template/header.php').
        view('report/sales_specially.php',$data).
        view('template/footer.php');
    }

    public function sales_dangerous()
    {
        $session = session();
        if(is_null($session->get('login'))){
            $session->setFlashdata('message_session', '302');
            return redirect()->to('/login');
        }
        $start_date="";
        $end_date ="";
        if(isset($_GET['start_date'])){
            $start_date = $_GET['start_date'];
        }
        if(isset($_GET['end_date'])){
            $end_date = $_GET['end_date'];
        }
        
        
        // var_dump( $start_date);
        // var_dump( $end_date);
        // die();
        $model = new OrderModel();
        if($start_date==""){
            $data["orders_list"] = $model->orderBy('order_id','ASC')->findAll();
        }else{
            $array_where = ['order_date >=' => $start_date, 'order_date <=' => $end_date.' 23:59:59'];
            $data["orders_list"] = $model->where($array_where)->orderBy('order_id','ASC')->findAll();
        }
       
        // $data["order_detail"] = $model->orderBy('order_id','ASC')->findAll();
        $model = new PharmacyModel();
        
        $data["pharmacy_list"] = $model->where('status',1)->orderBy('pharmacy_id','ASC')->findAll();

        return view('template/header.php').
        view('report/sales_dangerous.php',$data).
        view('template/footer.php');
    
    
}
}
