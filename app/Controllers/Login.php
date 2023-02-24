<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('template/login.php');
    }
    public function check_user_login()
    {
        var_dump($_POST);
        //Check Usrename Password  
        $model = new UserModel();
        $data = $model->where('username',$_POST['username']) ->first();
        if($data){
            //var_dump($data);
            $password_form = $_POST['password'];
            $password_db = $data['password'];

            if( $password_form == $password_db){
                echo "Login";
            }else{
                echo "Cannot login";
            }
            return redirect()->to('/');
        }
       
    }
    
}
