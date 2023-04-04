<?php

namespace App\Controllers;
use App\Models\LotModel;
use App\Models\SupplierModel;
use App\Models\PharmacyModel;

class Lot extends BaseController
{
  
    
    public function index()
    {
        $session = session();
        if(is_null($session->get('login'))){
            return redirect()->to('/login');
        }
        
        $model = new LotModel();
        $data["lot_list"] = $model->orderBy('lot_id','ASC')->findAll();
        
        return view('template/header.php').
        view('lot/lot.php',$data).
        view('template/footer.php');
    }

    public function add_lot()
    {
        // var_dump($_POST);
        $data = array(
            'lot_id'=>null, 
            'pharmacy_id'=>null,
            'id_supplie'=>null,
            'batch_no'=>$_POST['batch'], 
            'manu_date'=>$_POST['manu'], 
            'exp_date'=>$_POST['exp'], 
            'amount'=>$_POST['amount'], 
            'cost_price'=>$_POST['cost'], 
            'import_date'=>$_POST['import'], 
            
           
        );
        
        $model = new LotModel();
        $model->save($data);


        
        $session = session();
        $session->setFlashdata('message_code', '202');
        return redirect()->to('/lot');



        //$2y$10$Re8OwFDGLAw6O21232if2uybZVsAMRr8BqW2xPfrlqsW.16qOHoZO
        //$2y$10$R5CeBiM4e3GUyCA1etq.wuI6o7herKXLgvlhAqb6JY2hoy1st48hi
        //$2y$10$hVXutCx8J8ip4g6FPAh85Ol6./IlzdfkrqZkS9FDi1ZqOmyjMkjRK

        // var_dump($data);
    }

   
    
}
