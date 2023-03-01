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
        $session = session();
        $model = new UserModel();
        $data = $model->where('username',$_POST['username'])->first();
        if($data){
            $password_db = $data['password'];
            $pass = md5($_POST['password']);
            if( $pass  == $password_db){
                $data_user = array (
                    'user_id'=>$data["user_id"],
                    'username'=>$data["username"],
                    'id_license'=>$data["id_license"],
                    'email'=>$data["email"],
                    'f_name'=>$data["f_name"],
                    'l_name'=>$data["l_name"],
                    'user_role'=>$data["user_role"],
                    'login'=>true,
                );
                
                $session->set($data_user);
                return redirect()->to('/');
            }else{
                $session->setFlashdata('message_session', '301');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('message_session', '301');
            return redirect()->to('/login');
        }
    }

    public function user_logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
    
}
