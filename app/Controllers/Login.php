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
            var_dump($data);
            $password_form = $_POST['password'];
            $password_db = $data['password'];
            $pass = md5($password_form);
            // echo ("<br>[".$password_form."][".$password_db."][".$pass ."]");
            // var_dump($password_form);
            if( $pass  == $password_db){
                echo "Login";
                //SET SESSION 
                $data_user = array (
                    'user_id'=>$data["user_id"],
                    'username'=>$data["username"],
                    'id_license'=>$data["id_license"],
                    'email'=>$data["email"],
                    'f_name'=>$data["f_name"],
                    'l_name'=>$data["l_name"],
                    'user_role'=>$data["user_role"],
                );
                $session = session();
                $session->set($data_user);
                $_SESSION["login"] = true;

            }else{
                echo "Cannot login";
            }
            return redirect()->to('/');
        }
       
    }

    public function user_logout()
    {
        $session = session();
        $session->destroy();
        return view('template/login.php');
    }
    
}
