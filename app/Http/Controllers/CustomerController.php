<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() //display records
    {
        $customers = \App\Customer::all();

        return view('customer.index', compact('customers'));
    }
}
