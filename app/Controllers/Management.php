<?php

namespace App\Controllers;

use App\Models\Pharmacy_typeModel;
use App\Models\Recive_typeModel;
use App\Models\User_roleModel;

class Management extends BaseController
{

    public function pharmacies_type()
    {
        $model = new Pharmacy_typeModel();
        $data["pharmacy_group"] = $model->orderBy('id_pharmacy_type','ASC')->findAll();

        return view('template/header.php').
        view('basic_management/pharmacy_type.php',$data).
        view('template/footer.php');
    }

    public function recive_type()
    {
        $model = new Recive_typeModel();
        $data["recive_type_list"] = $model->orderBy('recive_type_id','ASC')->findAll();

        return view('template/header.php').
        view('basic_management/recive_type.php',$data).
        view('template/footer.php');
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