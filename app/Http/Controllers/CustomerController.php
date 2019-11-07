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

    public function create() //1. create record (form)
    {
        return view('customer.create');
    }

    public function store() //2. store record
    {
        //validation
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        //logic to store the data
        //Add this code to Customer Model
        //protected $guarded = []; (set to empty array)
        // to prevent mass assignment of data.
        \App\Customer::create($data);

        return redirect('/customers');
    }
}
