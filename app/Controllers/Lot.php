<?php

namespace App\Controllers;
use App\Models\LotModel;
use App\Models\SupplierModel;
use App\Models\PharmacyModel;


class Lot extends BaseController
{
  
    
    public function index()
    {
        $session = session();
        if(is_null($session->get('login'))){
            return redirect()->to('/login');
        }
        
        $model = new LotModel();
        $data["lot_list"] = $model->where('status <>',0)->orderBy('lot_id','ASC')->findAll();

        $pharmacyModel = new PharmacyModel();
        $data["pharmacy_list"] = $pharmacyModel->where('status <>',0)->orderBy('pharmacy_name','ASC')->findAll();
        $supplierModel = new SupplierModel();
        $data["supplier_list"]  = $supplierModel->where('status <>',0)->orderBy('company_name','ASC')->findAll();

        
        return view('template/header.php').
        view('inventory/lot.php',$data).
        view('template/footer.php');
    }
    public function add_lot()
    {
        $data = array(
            'lot_id'=>null,  
            'pharmacy_id'=>$_POST['pharmacy_id'],
            'id_supplie'=>$_POST['id_supplier'],
            'batch_no'=>$_POST['batch_no'], 
            'manu_date'=>$_POST['manu_date'], 
            'exp_date'=>$_POST['exp_date'], 
            'amount'=>$_POST['amount'],
            'remain'=>$_POST['amount'],  
            'cost_price'=>$_POST['cost_price'], 
            'import_date'=>$_POST['import_date'], 
            'status'=>1
        );
        // var_dump($data);
        // // die();
        
        $model = new LotModel();
        $model->save($data);

        $session = session();
        $session->setFlashdata('message_session', '201');
        return redirect()->to('/lot');



        //$2y$10$Re8OwFDGLAw6O21232if2uybZVsAMRr8BqW2xPfrlqsW.16qOHoZO
        //$2y$10$R5CeBiM4e3GUyCA1etq.wuI6o7herKXLgvlhAqb6JY2hoy1st48hi
        //$2y$10$hVXutCx8J8ip4g6FPAh85Ol6./IlzdfkrqZkS9FDi1ZqOmyjMkjRK

        // var_dump($data);
    }
    public function edit_lot()
    {
        // var_dump($_POST);
        $id = $_POST['lot_id'];
        $data = array(
            'batch_no'=>$_POST['batch_no'], 
            'manu_date'=>$_POST['manu_date'], 
            'exp_date'=>$_POST['exp_date'], 
            'amount'=>$_POST['amount'], 
            'cost_price'=>$_POST['cost_price'], 
            'import_date'=>$_POST['import_date'], 
            'status'=>1
           
        );
        
        $model = new LotModel();
        $model->where('lot_id',$id)->set($data)->update();


        
        $session = session();
        $session->setFlashdata('message_session', '202');
        return redirect()->to('/lot');



        //$2y$10$Re8OwFDGLAw6O21232if2uybZVsAMRr8BqW2xPfrlqsW.16qOHoZO
        //$2y$10$R5CeBiM4e3GUyCA1etq.wuI6o7herKXLgvlhAqb6JY2hoy1st48hi
        //$2y$10$hVXutCx8J8ip4g6FPAh85Ol6./IlzdfkrqZkS9FDi1ZqOmyjMkjRK

        // var_dump($data);
    }

    public function del_lot()
    {
         
        $id = $_POST['lot_id'];
        $data = array(
            'status'=>0, 
        );

        $model = new LotModel();
        $model->where('lot_id',$id)->set($data)->update();

        $session = session();
        $session->setFlashdata('message_session', '203');
        return redirect()->to('/lot');
        
    }
    public function remain()
    {
        $db = \Config\Database::connect();
        $session = session();
        if(is_null($session->get('login'))){
            return redirect()->to('/login');
        }

        $sql = "SELECT * FROM pharmacy_inventory WHERE total_remain < min_stock";
        $query  = $db->query($sql);

        $data["pharmacy_list"] = $query->getResultArray();

       

        
        return view('template/header.php').
        view('report/remain.php',$data).
        view('template/footer.php');

    }
    public function exp_date()
    {
        $db = \Config\Database::connect();
        $session = session();
        if(is_null($session->get('login'))){
            return redirect()->to('/login');
        }

        $sql = "SELECT l.*, DATEDIFF(l.exp_date,CURRENT_DATE) as remain_date FROM lot l WHERE DATEDIFF(l.exp_date,CURRENT_DATE) <=180 AND remain > 0";
        $query  = $db->query($sql);

        $data["exp_list"] = $query->getResultArray();

       

        
        return view('template/header.php').
        view('report/exp_date.php',$data).
        view('template/footer.php');


    }
    

}