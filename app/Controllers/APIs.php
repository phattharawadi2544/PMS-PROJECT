<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\PharmacyModel;
use App\Models\SupplierModel;
use App\Models\Pharmacy_typeModel;
use App\Models\Recive_typeModel;
use App\Models\OrderModel;
use App\Models\OrderDetailModel;
use App\Models\LotModel;
use App\MOdels\Pharmacy_inventoryModel;

class APIs extends BaseController
{
    public function index()
    {

    }
   
    public function get_api($api_name,$id = null)
    {
        $db = \Config\Database::connect();

        if($api_name=='getUser'){
            $model = new UserModel();
            if($id!=NULL){
                $get_data = $model->where('user_id',$id)->findAll();
            }else{
                $get_data = $model->orderBy('user_id','ASC')->findAll();
            }
            $data = [
                'success' => true,
                'message' => "OK",
                'data' => $get_data,
            ];
            return $this->response->setJSON($data);

        }elseif($api_name=='getUserRole'){
            $model = new UserModel();
            if($id!=NULL){
                $get_data = $model->where('user_id',$id)->findAll();
            }else{
                $get_data = $model->orderBy('user_id','ASC')->findAll();
            }
            $data = [
                'success' => true,
                'message' => "OK",
                'data' => $get_data,
            ];
            return $this->response->setJSON($data);



        }elseif($api_name=='getPharmacy'){
            $model = new PharmacyModel();
            if($id!=NULL){
                $get_data = $model->where('pharmacy_id',$id)->findAll();
            }else{
                $get_data = $model->orderBy('pharmacy_id','ASC')->findAll();
            }
            $data = [
                'success' => true,
                'message' => "OK",
                'data' => $get_data,
            ];
            return $this->response->setJSON($data);


        }elseif($api_name=='getPharmacybybarcode'){
            $model = new PharmacyModel();
            if($id!=NULL){
                $get_data = $model->where('barcode',$id)->findAll();
            }else{
                $get_data = $model->orderBy('barcode','ASC')->findAll();
            }
            $data = [
                'success' => true,
                'message' => "OK",
                'data' => $get_data,
            ];
            return $this->response->setJSON($data);

        }elseif($api_name=='getPharmacyGroup'){
            $model = new Pharmacy_typeModel();
            if($id!=NULL){
                $get_data = $model->where('pharmacy_id',$id)->findAll();
            }else{
                $get_data = $model->orderBy('pharmacy_id','ASC')->findAll();
            }
            $data = [
                'success' => true,
                'message' => "OK",
                'data' => $get_data,
            ];
            return $this->response->setJSON($data);

        }elseif($api_name=='getSupplier'){
            $model = new SupplierModel();
            if($id!=NULL){
                $get_data = $model->where('id_supplier',$id)->findAll();
            }else{
                $get_data = $model->orderBy('id_supplier','ASC')->findAll();
            }
            $data = [
                'success' => true,
                'message' => "OK",
                'data' => $get_data,
            ];
            return $this->response->setJSON($data);

        }elseif($api_name=='getuse Recive_type'){
            $model = new Recive_typeModel();
            if($id!=NULL){
                $get_data = $model->where('recive_type_id',$id)->findAll();
            }else{
                $get_data = $model->orderBy('recive_type_id','ASC')->findAll();
            }
            $data = [
                'success' => true,
                'message' => "OK",
                'data' => $get_data,
            ];
            return $this->response->setJSON($data);


        }elseif($api_name=='getOrder'){
            $model = new OrderModel();
            if($id!=NULL){
                $get_data = $model->where('order_id',$id)->findAll();
            }else{
                $get_data = $model->orderBy('order_id','ASC')->findAll();
            }
            $data = [
                'success' => true,
                'message' => "OK",
                'data' => $get_data,
            ];
            return $this->response->setJSON($data);


        }elseif($api_name=='getOrderdetail'){
            $model = new OrderDetailModel();
            if($id!=NULL){
                $get_data = $model->where('pharmacy_id',$id)->findAll();
            }else{
                $get_data = $model->orderBy('pharmacy_id','ASC')->findAll();
            }
            $data = [
                'success' => true,
                'message' => "OK",
                'data' => $get_data,
            ];
            return $this->response->setJSON($data);

        }elseif($api_name=='getOrderSummary'){
            $model_order_d = new OrderDetailModel();
            $model_order = new OrderModel();

            if($id!=NULL){
                $get_data = $model_order->where('order_id',$id)->findAll();
                $data_order_d   = $db->query('SELECT o.*,p.barcode,p.pharmacy_name,p.pharmacy_group,p.counting_unit FROM order_detail o JOIN pharmacy p ON o.pharmacy_id = p.pharmacy_id WHERE o.order_id = '.$id)->getResultArray();
                $get_data[0]['order_detail'] =  $data_order_d;
                // var_dump($get_data);
            }else{
                $get_data = $model_order->orderBy('order_id','ASC')->findAll();
            }
            $data = [
                'success' => true,
                'message' => "OK",
                'data' => $get_data,
            ];
            return $this->response->setJSON($data);

        }elseif($api_name=='getOrderReceipt'){
            $model_order_d = new OrderDetailModel();
            $model_order = new OrderModel();

            if($id!=NULL){
                $data_order   = $db->query('SELECT * FROM orders o JOIN user u ON o.seller_id = u.user_id WHERE o.order_id = '.$id)->getResultArray();
                $get_data[0]['order']= $data_order;

                $data_order_d   = $db->query('SELECT * FROM order_detail d JOIN pharmacy p ON d.pharmacy_id = p.pharmacy_id WHERE d.order_id = '.$id)->getResultArray();
                $get_data[0]['order_detail'] =  $data_order_d;


                // $get_data = $model_order->where('order_id',$id)->findAll();
                // $data_order_d   = $db->query('SELECT * FROM orders WHERE order_id = '.$id)->getResultArray();
                // $get_data[0]['order_detail'] =  $data_order_d;
                // var_dump($get_data);
            }else{
                $get_data = $model_order->orderBy('order_id','ASC')->findAll();
            }
            $data = [
                'success' => true,
                'message' => "OK",
                'data' => $get_data,
            ];
            return $this->response->setJSON($data);






        // }elseif($api_name=='getStock'){
        //     $model = new LotModel();
        //     $model_p = new PharmacyModel();
        //     if($id!=NULL){
        //         $sql = "SELECT p.*, SUM(l.amount),SUM(l.remain) as remain, SUM(l.amount*l.cost_price)/SUM(l.amount) as cost_price FROM pharmacy p JOIN lot l ON p.pharmacy_id = l.pharmacy_id WHERE p.pharmacy_id = ".$id;
        //         $data   = $db->query($sql)->getResultArray();
        //         $get_data[0]['order_detail'] =  $data_order_d;
        //         // var_dump($get_data);
        //     }else{
        //         $get_data = $model->orderBy('lot_id','ASC')->findAll();
        //     }
        //     $data = [
        //         'success' => true,
        //         'message' => "OK",
        //         'data' => $get_data,
        //     ];
        //     return $this->response->setJSON($data);

        // }elseif($api_name=='getCurrentStock'){
        //     $model = new LotModel();
        //     $model_p = new PharmacyModel();
            
        //     if($id!=NULL){
        //         $sql = "SELECT pharmacy_id, SUM(l.remain + l.amount) AS total_remain FROM lot l GROUP BY pharmacy_id;"
        //         $data_order_d   = $db->query($sql)->getResultArray();
        //         $get_data[0]['order'] =  $data_order_d;
        //         // var_dump($get_data);
        //     }else{
        //         $get_data = $model_order->orderBy('pharmacy_id','ASC')->findAll();
        //     }
        //     $data = [
        //         'success' => true,
        //         'message' => "OK",
        //         'data' => $get_data,
        //     ];
        //     return $this->response->setJSON($data);


        }elseif($api_name=='getLot'){
            $model = new LotModel();
            if($id!=NULL){
                $get_data = $model->where('lot_id',$id)->findAll();
            }else{
                $get_data = $model->orderBy('lot_id','ASC')->findAll();
            }
            $data = [
                'success' => true,
                'message' => "OK",
                'data' => $get_data,
            ];
            return $this->response->setJSON($data);

            // เช็ครหัสยาก่อน แล้วดูจำนวนคงเหลือใน lot ถ้าจำนวนที่ซื้อ มีไม่พอที่จะขายให้แจ้งเตือน
        }elseif($api_name=='getRemain'){
            $model = new Pharmacy_inventoryModel();
            if($id!=NULL){
                $get_data = $model->where('pharmacy_id',$id)->findAll();
            }else{
                $get_data = $model->orderBy('pharmacy_id','ASC')->findAll();
            }
            $data = [
                'success' => true,
                'message' => "OK",
                'data' => $get_data,
            ];
            return $this->response->setJSON($data);


        }elseif($api_name=='getSalespecially'){
            $model_order_d = new OrderDetailModel();
            $model_order = new OrderModel();

            if($id!=NULL){
                $get_data = $model_order->where('order_id',$id)->findAll();
                $data_order_d   = $db->query('SELECT o.*,p.barcode,p.pharmacy_name,p.pharmacy_group,p.counting_unit FROM order_detail o JOIN pharmacy p ON o.pharmacy_id = p.pharmacy_id WHERE o.order_id = '.$id)->getResultArray();
                $get_data[0]['order_detail'] =  $data_order_d;
                // var_dump($get_data);
            }else{
                $get_data = $model_order->orderBy('order_id','ASC')->findAll();
            }
            $data = [
                'success' => true,
                'message' => "OK",
                'data' => $get_data,
            ];
            return $this->response->setJSON($data);
        }else{
            $data = [
                'success' => false,
                'message' => "Not have APIs fuction ".$api_name,
                'data' => null,
            ];
            return $this->response->setJSON($data);
        }
    }

}
// SELECT pharmacy_id, SUM(l.remain) AS total_remain FROM lot l GROUP BY pharmacy_id;

   