<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $session = session();
        if(is_null($session->get('login'))){
            return redirect()->to('/login');
        }
        $sql = "SELECT  IFNULL(SUM(od.sale_price * od.amount),0) as sale_price, IFNULL(SUM(od.cost_price * od.amount),0) as cost_price, IFNULL(SUM(od.amount),0) as amount ".
        "FROM orders o JOIN order_detail od ON o.order_id = od.order_id ".
        "WHERE DATE(o.order_date) = CURRENT_DATE";
        $query = $db->query($sql);
        // var_dump($sql);
        // die();


        $data =array();
        $data_month = array();
        $data_year = array();
        $data_day = array();

        foreach ($query->getResultArray() as $row) {
            $data['sale_price'] = $row['sale_price'];
            $data['cost_price'] = $row['cost_price'];
            $data['amount'] = $row['amount'];
        }
        // var_dump($data);
        $sql = "SELECT YEAR(o.order_date) as S_YEAR , SUM(od.sale_price * od.amount) as sale_price, SUM(od.cost_price * od.amount) as cost_price, IFNULL(SUM(od.amount),0) as amount  FROM orders o JOIN order_detail od ON o.order_id = od.order_id GROUP BY S_YEAR ORDER BY S_YEAR";
        $query = $db->query($sql);

        foreach ($query->getResultArray() as $id=>$row) {
             $data_year[$id] =  array('S_YEAR'=>$row['S_YEAR'], 'sale_price'=>$row['sale_price'], 'cost_price'=>$row['cost_price'],'amount'=>$row['amount']);
        }

        $sql = "SELECT MONTH(o.order_date) as S_MONTH, YEAR(o.order_date) as S_YEAR , SUM(od.sale_price * od.amount) as sale_price, SUM(od.cost_price * od.amount) as cost_price, IFNULL(SUM(od.amount),0) as amount  FROM orders o JOIN order_detail od ON o.order_id = od.order_id GROUP BY S_MONTH,S_YEAR ORDER BY S_YEAR,S_MONTH";
        $query = $db->query($sql);

        foreach ($query->getResultArray() as $id=>$row) {
            $data_month[$id] =  array('S_YEAR'=>$row['S_YEAR'],'S_MONTH'=>$row['S_MONTH'],'sale_price'=>$row['sale_price'], 'cost_price'=>$row['cost_price'],'amount'=>$row['amount']);
        }

        $sql = "SELECT DAY(o.order_date) as S_DAY, MONTH(o.order_date) as S_MONTH , SUM(od.sale_price * od.amount) as sale_price, SUM(od.cost_price * od.amount) as cost_price, IFNULL(SUM(od.amount),0) as amount  FROM orders o JOIN order_detail od ON o.order_id = od.order_id GROUP BY S_MONTH,S_DAY  ORDER BY `S_DAY` ASC";
        $query = $db->query($sql);

        foreach ($query->getResultArray() as $id=>$row) {
            $data_day[$id] =  array('S_MONTH '=>$row['S_MONTH'],'S_DAY'=>$row['S_DAY'],'sale_price'=>$row['sale_price'], 'cost_price'=>$row['cost_price'],'amount'=>$row['amount']);
        }

        $data['data_year'] = $data_year;
        $data['data_month'] = $data_month;
        $data['data_day'] = $data_day;

        // var_dump($data['data_year']);


        return view('template/header.php').
        view('template/dashboard.php',$data).
        view('template/footer.php'); 
    }
    
   
}