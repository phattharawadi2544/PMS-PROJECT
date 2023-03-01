<?php

namespace App\Controllers;
use App\Models\PharmacyModel;

class Pharmacies extends BaseController
{
    public function index()
    {
        $session = session();
        if(is_null($session->get('login'))){
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
    public function edit_pharmacy()
    {
        //  var_dump($_POST);
        $id = $_POST['pharmacy_id'];
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
        if($_POST['password']!=''){
            $data['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        }
        
        $model = new PharmacyModel();
        $model->save($data);

        $session = session();
        $session->setFlashdata('message_session', '201');
        return redirect()->to('/pharmacy');

    }
    //delete_user
    public function delete_user()
    {
        //  var_dump($_POST);
        $id = $_POST['userID'];
        $data = array(
            'status'=>0, 
        );
        $model = new PharmacyModel();
        $model->where('user_id',$id)->set($data)->update();

        $session = session();
        $session->setFlashdata('message_session', '201');
        return redirect()->to('/Pharmacy');

    }
    
    
}
