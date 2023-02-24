<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('template/template.php');
        return view('template/header.php').
        view('template/dashboard.php').
        // view('template/customers.php').
        view('template/footer.php');
    }
    public function f_kmild()
    {
        return view('template/header.php').
        view('template/e_mild.php').
        view('template/footer.php');
    }
   
}
