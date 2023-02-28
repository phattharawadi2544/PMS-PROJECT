<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\PharmacyModel;
use App\Models\SupplierModel;

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

        }elseif($api_name=='getUserRole'){

        }else{
            $data = [
                'success' => false,
                'message' => "Not have APIs fuction ".$api_name,
                'data' => null,
            ];
            return $this->response->setJSON($data);
        }
    }

    public function get_api($api_name,$id = null)
    {
        if($api_name=='getPharmacy'){
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

        }else{
            $data = [
                'success' => false,
                'message' => "Not have APIs fuction ".$api_name,
                'data' => null,
            ];
            return $this->response->setJSON($data);
        }
    }

    public function get_1($api_name,$id = null)
    {
        if($api_name=='getsupplier'){
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

        }elseif($api_name=='getsupplier'){

        }else{
            $data = [
                'success' => false,
                'message' => "Not have APIs fuction ".$api_name,
                'data' => null,
            ];
            return $this->response->setJSON($data);
        }
    }
    public function get_1($api_name,$id = null)
    {
        if($api_name=='getsupplier'){
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

        }elseif($api_name=='getsupplier'){

        }else{
            $data = [
                'success' => false,
                'message' => "Not have APIs fuction ".$api_name,
                'data' => null,
            ];
            return $this->response->setJSON($data);
        }
    }
    public function get_1($api_name,$id = null)
    {
        if($api_name=='getsupplier'){
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

        }elseif($api_name=='getsupplier'){

        }else{
            $data = [
                'success' => false,
                'message' => "Not have APIs fuction ".$api_name,
                'data' => null,
            ];
            return $this->response->setJSON($data);
        }
        public function get_1($api_name,$id = null)
        {
            if($api_name=='getsupplier'){
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
    
            }elseif($api_name=='getsupplier'){
    
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

}

   