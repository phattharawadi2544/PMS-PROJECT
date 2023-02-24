<?php

namespace App\Controllers;
use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data["users_list"] = $model->orderBy('user_id','ASC')->findAll();
        

        return view('template/header.php').
        view('user/users.php',$data).
        view('template/footer.php');
    }
    public function add_user()
    {
        // var_dump($_POST);


        $data = array(
            'user_id'=>null, 
            'username'=>$_POST['username'], 
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT), 
            'email'=>$_POST['email'], 
            'f_name'=>$_POST['fname'], 
            'l_name'=>$_POST['lname'], 
            'tel'=>$_POST['telno'], 
            'address'=>$_POST['address'], 
            'status'=>$_POST['status'], 
            'user_role'=>$_POST['role']
        );
        
        $model = new UserModel();
        $model->save($data);


        
        $session = session();
        $session->setFlashdata('message_code', '202');
        return redirect()->to('/users');



        //$2y$10$Re8OwFDGLAw6O21232if2uybZVsAMRr8BqW2xPfrlqsW.16qOHoZO
        //$2y$10$R5CeBiM4e3GUyCA1etq.wuI6o7herKXLgvlhAqb6JY2hoy1st48hi
        //$2y$10$hVXutCx8J8ip4g6FPAh85Ol6./IlzdfkrqZkS9FDi1ZqOmyjMkjRK

        // var_dump($data);
    }
    
    
}
