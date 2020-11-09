<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Tool;

class OrderController extends Controller
{
    public function retrive(){
        $Orders = Order::all();

        return view('ad-dashboard-orderManage',compact('Orders'));

    }
}
