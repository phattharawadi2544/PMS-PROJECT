<?php

namespace App\Controllers;

use App\Models\Pharmacy_typeModel;
use App\Models\Recive_typeModel;
use App\Models\User_roleModel;

class Management extends BaseController
{

    public function pharmacies_type()
    {
        $session = session();
        if(is_null($session->get('login'))){
            return redirect()->to('/login');
        }
        
        $model = new Pharmacy_typeModel();
        $data["pharmacy_group"] = $model->orderBy('id_pharmacy_type','ASC')->findAll();

        return view('template/header.php').
        view('basic_management/pharmacy_type.php',$data).
        view('template/footer.php');
    }
    //delete_user
    public function delete_pharmacies_type()
    {
        //  var_dump($_POST);
        $id = $_POST['id_pharmacy_type'];
        $data = array(
            'status'=>0, 
        );
        $model = new Pharmacy_typeModel();
        $model->where('id_pharmacy_type',$id)->set($data)->update();

        $session = session();
        $session->setFlashdata('message_session', '201');
        return redirect()->to('/pharmacy_type.php');

    }

    public function recive_type()
    {
        $model = new Recive_typeModel();
        $data["recive_type_list"] = $model->orderBy('recive_type_id','ASC')->findAll();

        return view('template/header.php').
        view('basic_management/recive_type.php',$data).
        view('template/footer.php');
    }
    public function delete_recive_type()
    {
        //  var_dump($_POST);
        $id = $_POST['recive_type_id'];
        $data = array(
            'status'=>0, 
        );
        $model = new Pharmacy_typeModel();
        $model->where('recive_type_id',$id)->set($data)->update();

        $session = session();
        $session->setFlashdata('message_session', '202');
        return redirect()->to('/recive_type.php');

    }

    // public function user_role()
    // {
    //     $model = new User_roleModel();
    //     $data["user_role_list"] = $model->orderBy('role_id','ASC')->findAll();

    //     return view('template/header.php').
    //     view('basic_management/user_role.php',$data).
    //     view('template/footer.php');
    // }
    
    
}