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
        $data["supplier"] = $model->orderBy('id_supplier','ASC')->findAll();
        

        return view('template/header.php').
        view('supplier/supplier.php',$data).
        view('template/footer.php');
    }
    
    public function add_supplier()
    {
         var_dump($_POST);

        $data = array(
            'id_supplier'=>null, 
            'company_name'=>$_POST['companyname'], 
            'address'=>$_POST['address'], 
            'tel'=>$_POST['tel']  
       
        );
        // var_dump($data);
        // die();


        $model = new SupplierModel();
        $model->save($data);

        $session = session();
        $session->setFlashdata('message_session', '201');
        return redirect()->to('/supplier');

    }

}
