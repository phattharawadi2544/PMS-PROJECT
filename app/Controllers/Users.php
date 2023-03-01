<?php

namespace App\Controllers;
use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $session = session();
        if(is_null($session->get('login'))){
            $session->setFlashdata('message_session', '302');
            return redirect()->to('/login');
        }
        
        $model = new UserModel();
        $data["users_list"] = $model->where('status',1)->orderBy('user_id','ASC')->findAll();
        

        return view('template/header.php').
        view('user/users.php',$data).
        view('template/footer.php');
    }
    public function add_user()
    {
        //  var_dump($_POST);

        $data = array(
            'user_id'=>null, 
            'license'=>$_POST['license'], 
            'username'=>$_POST['username'], 
            'password' => md5($_POST['password'], PASSWORD_DEFAULT), 
            'email'=>$_POST['email'], 
            'f_name'=>$_POST['fname'], 
            'l_name'=>$_POST['lname'], 
            'tel'=>$_POST['telno'], 
            'work_experience'=>$_POST['work'], 
            'address'=>$_POST['address'], 
            'hiredate'=>$_POST['hiredate'], 
            'licenseexp'=>$_POST['licenseexp'], 
            'status'=>$_POST['status'], 
            'user_role'=>$_POST['role']
        );
        // var_dump($data);
        // die();


        $model = new UserModel();
        $model->save($data);

        $session = session();
        $session->setFlashdata('message_session', '201');
        return redirect()->to('/users');

    }

    public function edit_user()
    {
        //  var_dump($_POST);
        $id = $_POST['userID'];
        $data = array(
            'license'=>$_POST['license'], 
            'username'=>$_POST['username'], 
            'email'=>$_POST['email'], 
            'f_name'=>$_POST['fname'], 
            'l_name'=>$_POST['lname'], 
            'tel'=>$_POST['telno'], 
            'work_experience'=>$_POST['work'], 
            'address'=>$_POST['address'], 
            'hiredate'=>$_POST['hiredate'], 
            'licenseexp'=>$_POST['licenseexp'], 
            'status'=>$_POST['status'], 
            'user_role'=>$_POST['role']
        );
        if($_POST['password']!=''){
            $data['password'] = md5($_POST['password'], PASSWORD_DEFAULT);
        }
        $model = new UserModel();
        $model->where('user_id',$id)->set($data)->update();

        $session = session();
        $session->setFlashdata('message_session', '202');
        return redirect()->to('/users');

    }

    //delete_user
    public function delete_user()
    {
        //  var_dump($_POST);
        $id = $_POST['userID'];
        $data = array(
            'status'=>0, 
        );
        $model = new UserModel();
        $model->where('user_id',$id)->set($data)->update();

        $session = session();
        $session->setFlashdata('message_session', '203');
        return redirect()->to('/users');

    }
    
}
