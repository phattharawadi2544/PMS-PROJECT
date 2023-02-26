<?php

namespace App\Controllers;
use App\Models\PharmacyModel;

class Pharmacies extends BaseController
{
    public function index()
    {
        $model = new PharmacyModel();
        $data["pharmacy_list"] = $model->orderBy('pharmacy_id','ASC')->findAll();

        return view('template/header.php').
        view('pharmacy/pharmacies.php',$data).
        view('template/footer.php');
    }
    public function add_pharmacy()
    {
        // var_dump($_POST);


        $data = array(
            'pharmacy_id'=>null, 
            'img'=>$_POST['img'], 
            'reg'=>$_POST['reg'], 
            'pharmacyname' => $_POST['pharmacyname'],
            'pharmacydetails'=>$_POST['pharmacydetails'], 
            'pharmacywarning'=>$_POST['pharmacywarning'], 
            'pharmacygroup'=>$_POST['pharmacygroup'], 
            'unit'=>$_POST['unit'], 
            
        );
        
        $model = new PharmacyModel();
        $model->save($data);

        $session = session();
        $session->setFlashdata('message_code', '202');
        return redirect()->to('/pharmacies');



        //$2y$10$Re8OwFDGLAw6O21232if2uybZVsAMRr8BqW2xPfrlqsW.16qOHoZO
        //$2y$10$R5CeBiM4e3GUyCA1etq.wuI6o7herKXLgvlhAqb6JY2hoy1st48hi
        //$2y$10$hVXutCx8J8ip4g6FPAh85Ol6./IlzdfkrqZkS9FDi1ZqOmyjMkjRK

        // var_dump($data);
    }
    
    
    
}
