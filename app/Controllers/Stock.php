<?php

namespace App\Controllers;
use App\Models\LotModel;
use App\Models\SupplierModel;
use App\Models\PharmacyModel;

class Stock extends BaseController


    SELECT p., SUM(l.amount),SUM(l.remain) as remain, SUM(l.amountl.cost_price)/SUM(l.amount) as cost_price FROM pharmacy p JOIN lot l ON p.pharmacy_id = l.pharmacy_id;
 