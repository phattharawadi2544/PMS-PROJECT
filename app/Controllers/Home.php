<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = session();
        if(is_null($session->get('login'))){
            return redirect()->to('/login');
        }
        return view('template/header.php').
        view('template/dashboard.php').
        view('template/footer.php'); 
    }
    
    public function f_kmild()
    {
        return view('template/header.php').
        view('template/e_mild.php').
        view('template/footer.php');
    }
   
}
