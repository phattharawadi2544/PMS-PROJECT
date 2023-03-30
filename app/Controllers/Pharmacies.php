<?php

namespace App\Controllers;
use App\Models\PharmacyModel;

class Pharmacies extends BaseController
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
        view('pharmacy/pharmacies.php',$data).
        view('template/footer.php');
    }

    public function add_pharmacy()
    {
        $data = array(
            'pharmacy_id'=>null, 
            'reg_no'=>$_POST['reg'],
            'barcode'=>$_POST['barcode'], 
            'pharmacy_name' => $_POST['pharmacyname'],
            'pharmacy_details'=>$_POST['pharmacydetails'], 
            'counting_unit'=>$_POST['unit'], 
            'pharmacy_warning'=>$_POST['pharmacywarning'], 
            'pharmacy_group'=>$_POST['pharmacygroup'], 
            'price'=>$_POST['price'], 
            'cost'=>$_POST['cost'], 
            'amount'=>$_POST['amount'], 
            'Status'=>1
        );
        // var_dump($data);
        // // die();
        
        $model = new PharmacyModel();
        $model->save($data);

        $session = session();
        $session->setFlashdata('message_code', '201');
        return redirect()->to('/pharmacies');



        //$2y$10$Re8OwFDGLAw6O21232if2uybZVsAMRr8BqW2xPfrlqsW.16qOHoZO
        //$2y$10$R5CeBiM4e3GUyCA1etq.wuI6o7herKXLgvlhAqb6JY2hoy1st48hi
        //$2y$10$hVXutCx8J8ip4g6FPAh85Ol6./IlzdfkrqZkS9FDi1ZqOmyjMkjRK

        // var_dump($data);
    }
    public function edit_pharmacy()
    {
        //  var_dump($_POST);
        $id = $_POST['pharmacy_id'];
        $data = array(
            'reg_no'=>$_POST['reg'],
            'barcode'=>$_POST['barcode'], 
            'pharmacy_name' => $_POST['pharmacyname'],
            'pharmacy_details'=>$_POST['pharmacydetails'], 
            'counting_unit'=>$_POST['unit'], 
            'pharmacy_warning'=>$_POST['pharmacywarning'], 
            'pharmacy_group'=>$_POST['pharmacygroup'], 
            'price'=>$_POST['price'], 
            'cost'=>$_POST['cost'], 
            'Status'=>1
        );
        
        
        $model = new PharmacyModel();
        $model->where('pharmacy_id',$id)->set($data)->update();

        $session = session();
        $session->setFlashdata('message_session', '202');
        return redirect()->to('/pharmacies');

    }
   
    public function delete_pharmacy()
    {
        //  var_dump($_POST);
        $id = $_POST['pharmacy_id'];
        $data = array(
            'status'=>0, 
        );
        $model = new PharmacyModel();
        $model->where('pharmacy_id',$id)->set($data)->update();

        $session = session();
        $session->setFlashdata('message_session', '203');
        return redirect()->to('/pharmacies');

    }
    
    
}
