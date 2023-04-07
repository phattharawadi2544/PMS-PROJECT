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
        $db = \Config\Database::connect();
        $session = session();
        if(is_null($session->get('login'))){
            return redirect()->to('/login');
        }
        $start_date="";
        $end_date ="";

        if(isset($_GET['start_date'])){
            $start_date = $_GET['start_date'];
        }

        // $sql = " SELECT * FROM orders o JOIN order_detail od ON o.order_id = od.order_id JOIN pharmacy p ON od.pharmacy_id = p.pharmacy_id  JOIN user u ON u.user_id = o.seller_id
        // // WHERE p.pharmacy_group in(3) 
        // // and o.order_date >= start_dateand o.order_date <= end_date";

        if(isset($_GET['end_date'])){
            $end_date = $_GET['end_date'];
        }
        $sql_select = "date(o.order_date), o.customer , od.sale_price, od.amount , p.pharmacy_name , p.counting_unit, u.f_name ";


        if($start_date==""){
            $sql = "SELECT $sql_select FROM orders o JOIN order_detail od ON o.order_id = od.order_id JOIN pharmacy p ON od.pharmacy_id = p.pharmacy_id  JOIN user u ON u.user_id = o.seller_id
            WHERE p.pharmacy_group in(3) 
            and YEAR(o.order_date) = YEAR(current_date) and MONTH(o.order_date) = MONTH(current_date) ";

        }else{
            $sql = "SELECT $sql_select FROM orders o JOIN order_detail od ON o.order_id = od.order_id JOIN pharmacy p ON od.pharmacy_id = p.pharmacy_id  JOIN user u ON u.user_id = o.seller_id
            WHERE  p.pharmacy_group = 3 and date(o.order_date) BETWEEN '$start_date' and '$end_date' ";
        }
    //    echo $sql ;
    //    die();


        $query  = $db->query($sql);

        $data["specially_list"] = $query->getResultArray();
        

        return view('template/header.php').
        view('report/sales_specially.php',$data).
        view('template/footer.php');


    }


    public function sales_dangerous()
    {
        $db = \Config\Database::connect();
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
        // $sql = " SELECT * FROM orders o JOIN order_detail od ON o.order_id = od.order_id JOIN pharmacy p ON od.pharmacy_id = p.pharmacy_id  JOIN user u ON u.user_id = o.seller_id
        // WHERE p.pharmacy_group in(2) 
        // and o.order_date >= start_dateand o.order_date <= end_date";
        $sql_select = "date(o.order_date), o.customer , od.sale_price, od.amount , p.pharmacy_name , p.counting_unit, u.f_name ";
       
        if($start_date==""){
            $sql = "SELECT $sql_select  FROM orders o JOIN order_detail od ON o.order_id = od.order_id JOIN pharmacy p ON od.pharmacy_id = p.pharmacy_id  JOIN user u ON u.user_id = o.seller_id
            WHERE p.pharmacy_group in(2) 
            and YEAR(o.order_date) = YEAR(current_date) and MONTH(o.order_date) = MONTH(current_date) ";

        }else{
            $sql = "SELECT $sql_select  FROM orders o JOIN order_detail od ON o.order_id = od.order_id JOIN pharmacy p ON od.pharmacy_id = p.pharmacy_id  JOIN user u ON u.user_id = o.seller_id
            WHERE  p.pharmacy_group = 2 and date(o.order_date) BETWEEN '$start_date' and '$end_date' ";
        }
       
        $query  = $db->query($sql);

        $data["dangerous_list"] = $query->getResultArray();
        

        
        return view('template/header.php').
        view('report/sales_dangerous.php',$data).
        view('template/footer.php');
    
    
}
}