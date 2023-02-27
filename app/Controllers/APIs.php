<?php

namespace App\Controllers;
use App\Models\UserModel;

class APIs extends BaseController
{
    public function index()
    {

    }
    public function api_get($api_name,$id = null)
    {
        $model = new UserModel();
        $data = $model->orderBy('user_id','ASC')->findAll();
        return $this->response->setJSON($data);
    }

}
