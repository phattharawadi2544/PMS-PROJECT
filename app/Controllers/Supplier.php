<?php

namespace App\Controllers;
use App\Models\SupplierModel;

class Supplier extends BaseController
{
    public function supplier()
    {

        $session = session();
        if(is_null($session->get('login'))){
            $session->setFlashdata('message_session', '302');
            return redirect()->to('/login');
        }
        
        $model = new SupplierModel();
        $data["supplier_list"] = $model->where('status <>',0)->orderBy('id_supplier','ASC')->findAll();
        

        return view('template/header.php').
        view('supplier/supplier.php',$data).
        view('template/footer.php');
    }
    
    public function add_supplier()
    {
        //  var_dump($_POST);

        $data = array(
            'id_supplier'=>null, 
            'company_name'=>$_POST['companyname'], 
            'address'=>$_POST['address'], 
            'tel'=>$_POST['tel'],  
            'status'=>1
       
        );
        // var_dump($data);
        // die();


        $model = new SupplierModel();
        $model->save($data);

        $session = session();
        $session->setFlashdata('message_session', '201');
        return redirect()->to('/supplier');

    }
    public function edit_supplier()
    {
        // var_dump($_POST);
        $id = $_POST['id_supplier'];
        $data = array(
            'company_name'=>$_POST['company_name'], 
            'address'=>$_POST['address'], 
            'tel'=>$_POST['tel'],
            'status'=>1 
           
        );
        
         $model = new SupplierModel();
        $model->where('id_supplier',$id)->set($data)->update();


        
        $session = session();
        $session->setFlashdata('message_session', '202');
        return redirect()->to('/supplier');



        //$2y$10$Re8OwFDGLAw6O21232if2uybZVsAMRr8BqW2xPfrlqsW.16qOHoZO
        //$2y$10$R5CeBiM4e3GUyCA1etq.wuI6o7herKXLgvlhAqb6JY2hoy1st48hi
        //$2y$10$hVXutCx8J8ip4g6FPAh85Ol6./IlzdfkrqZkS9FDi1ZqOmyjMkjRK

        // var_dump($data);
    }
    public function del_supplier()
    {
        //  var_dump($_POST);
        $id = $_POST['id_supplier'];
        $data = array(
            'status'=>0, 
        );
        $model = new SupplierModel();
        $model->where('id_supplier',$id)->set($data)->update();

        $session = session();
        $session->setFlashdata('message_session', '203');
        return redirect()->to('/supplier');

    }


}
