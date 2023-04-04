<?php

namespace App\Controllers;
use App\Models\OrderModel;
use App\Models\OrderDetailModel;
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

    public function sell_all()
    {
        $session = session();
        if(is_null($session->get('login'))){
            $session->setFlashdata('message_session', '302');
            return redirect()->to('/login');
        }
        
        $model = new OrderModel();
        $data["order_list"] = $model->orderBy('order_id','ASC')->findAll();

        return view('template/header.php').
        view('sell/sell.php',$data).
        view('template/footer.php');
    }

   
    public function add_order()
    {
        $db = \Config\Database::connect();
        $session = session();
        var_dump($_POST);
        //============Insert Order============//
        
        $order_data = array(
                            'order_id'=>null,
                            // 'order_date'=>null,
                            'seller_id'=>$session->user_id,
                            'customer'=>$_POST['customer'],
                            'address'=>$_POST['address'],
                            'vat_number'=>$_POST['vat_number'],
                            'recive_type_id'=>$_POST['recive_type'],
                            'total_price'=>$_POST['total_price'],
                            'vat'=> ($_POST['total_price']*0.07),
                        );
        $model_order = new OrderModel();
        $model_order->save($order_data);
        $order_id =  $model_order->getInsertID();
                
        // $order_id = $this->model->insert($data); 
        //============Insert Order Detail============//
        $phamacyID_arr = $_POST['phamacyID'];
        $amount_arr = $_POST['amount'];
        foreach($phamacyID_arr as $key => $value){
            $model = new PharmacyModel();
            $pharmacy_data = $model->where('pharmacy_id',$value)->findAll();

            $order_d_data = array(
                'pharmacy_id'   =>$value, 
                'order_id'      =>$order_id, 
                'lot_id'        =>null, 
                'sale_price'    =>$pharmacy_data[0]['price'], 
                // 'cost_price'    =>$pharmacy_data[0]['cost'], 
                'amount'        =>$amount_arr[$key]
            );
            var_dump($order_d_data);
            
            $model_order_d = new OrderDetailModel();
            $model_order_d->save($order_d_data);

            // update stock 
            $db->query('UPDATE pharmacy SET amount = amount-'.($amount_arr[$key]).' WHERE pharmacy_id ='.$value);

        }


        $session = session();
        $session->setFlashdata('message_session', '201');
        return redirect()->to('/sell');

    }
}