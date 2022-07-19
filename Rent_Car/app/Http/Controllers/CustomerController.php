<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerList(){

        $customer = Customer::all();
        return view("customer\list",["customer"=>$customer]);
    }
}
