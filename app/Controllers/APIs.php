<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\PharmacyModel;
use App\Models\SupplierModel;
use App\Models\Pharmacy_typeModel;
use App\Models\Recive_typeModel;
use App\Models\OrderModel;
use App\Models\LotModel;

class APIs extends BaseController
{
    public function index()
    {

    }
   
    public function get_api($api_name,$id = null)
    {
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

        // }elseif($api_name=='getUserRole'){
        //     $model = new UserModel();
        //     if($id!=NULL){
        //         $get_data = $model->where('user_id',$id)->findAll();
        //     }else{
        //         $get_data = $model->orderBy('user_id','ASC')->findAll();
        //     }
        //     $data = [
        //         'success' => true,
        //         'message' => "OK",
        //         'data' => $get_data,
        //     ];
        //     return $this->response->setJSON($data);

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

        }elseif($api_name=='getsupplier'){
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

        // }elseif($api_name=='getUserRole'){
        // }elseif($api_name=='getUserRole'){
        // }elseif($api_name=='getUserRole'){
        // }elseif($api_name=='getUserRole'){

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

   