<?php

namespace App\Http\Controllers\users\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function index()
    {
        return view('customer');
    }
}
