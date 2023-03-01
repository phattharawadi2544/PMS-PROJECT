<?php

namespace App\Controllers;
use App\Models\SupplierModel;

class Supplier extends BaseController
{
    public function index()
    {

        $session = session();
        if(is_null($session->get('login'))){
            return redirect()->to('/login');
        }
        
        $model = new SupplierModel();
        $data["supplier"] = $model->orderBy('id_supplier','ASC')->findAll();
        

        return view('template/header.php').
        view('supplier/supplier.php',$data).
        view('template/footer.php');
    }
    
    public function add_supplier()
    {
        // var_dump($_POST);


        $data = array(
            'id_supplier'=>null, 
            'name'=>$_POST['name'], 
            'address'=>$_POST['address'], 
            'tel'=>$_POST['tel']  
        );
        
        $model = new SupplierModel();
        $model->save($data);


        
        $session = session();
        $session->setFlashdata('message_code', '202');
        return redirect()->to('/supplier');



        //$2y$10$Re8OwFDGLAw6O21232if2uybZVsAMRr8BqW2xPfrlqsW.16qOHoZO
        //$2y$10$R5CeBiM4e3GUyCA1etq.wuI6o7herKXLgvlhAqb6JY2hoy1st48hi
        //$2y$10$hVXutCx8J8ip4g6FPAh85Ol6./IlzdfkrqZkS9FDi1ZqOmyjMkjRK

        // var_dump($data);
    }

}
