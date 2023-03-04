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
    public function add_pharmacy_type()
    {
        //  var_dump($_POST);

        $data = array(
            'id_pharmacy_type'=>null, 
            'pharmacy_type_name'=>$_POST['pharmacy_type_name'], 
            
        );
        // var_dump($data);
        // die();

        $model = new Pharmacy_typeModel();
        $model->save($data);

        $session = session();
        $session->setFlashdata('message_session', '111');
        return redirect()->to('/pharmacy_type');

    }
    //delete_user
    public function edit_pharmacy_type()
    {
        //  var_dump($_POST);
        $id = $_POST['id_pharmacy_type'];
        $data = array(
            'pharmacy_type_name'=>$_POST['pharmacy_type_name'], 
            // 'status'=>0, 
        );
        
        $model = new Pharmacy_typeModel();
        $model->where('id_pharmacy_type',$id)->set($data)->update();

        $session = session();
        $session->setFlashdata('message_session', '112');
        return redirect()->to('/pharmacy_type');
        

    }
    //delete_pharmacies_type
    public function delete_pharmacies_type()
    {
        //  var_dump($_POST);
        $id = $_POST['id_pharmacy_type'];
        $data = array(
            'pharmacy_type_name'=>$_POST['pharmacy_type_name'], 
            
        );
        $model = new Pharmacy_typeModel();
        $model->where('id_pharmacy_type',$id)->set($data)->update();

        $session = session();
        $session->setFlashdata('message_session', '113');
        return redirect()->to('/pharmacy_type');

    }




    public function recive_type()
    {
        $model = new Recive_typeModel();
        $data["recive_type_list"] = $model->orderBy('recive_type_id','ASC')->findAll();

        return view('template/header.php').
        view('basic_management/recive_type.php',$data).
        view('template/footer.php');
    }
    public function edit_recive_type()
    {
        //  var_dump($_POST);
        $id = $_POST['recive_type_id'];
        $data = array(
            'recive_name'=>$_POST['recive_name'], 
            'recive_detail'=>$_POST['recive_detail'], 
        );
       
        $model = new Recive_typeModel();
        $model->where('recive_type_id',$id)->set($data)->update();

        $session = session();
        $session->setFlashdata('message_session', '114');
        return redirect()->to('/recive_type');

    }

    public function delete_recive_type()
    {
        //  var_dump($_POST);
        $id = $_POST['recive_type_id'];
        $data = array(
            'status'=>0, 
        );
        $model = new Recive_typeModel();
        $model->where('recive_type_id',$id)->set($data)->update();

        $session = session();
        $session->setFlashdata('message_session', '115');
        return redirect()->to('/recive_type');

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