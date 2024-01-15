<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //
     
     public function index (){
        $data = Customer::all();
        return view("customer.index", compact("data"));

        //dd($data);
        
        
    }
    

  
    public function create()
    {
        return view("customer.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            "Nama_customer" => "required",
            "Alamat" => "required",
            "No_telp" => "required",
        ]);
        Customer::create($request->all());
        return redirect()->route("customer.index")->with("success", "Data berhasil disimpan");
    }

    public function show(Customer $customer){

    }
    public function edit(Customer $customer){
   
        return view("customer.edit", compact("customer"));
    }
    
    public function update(Request $request, Customer $customer){
        $request->validate([
            "Nama_customer" => "required",
            "Alamat" => "required",
            "No_telp" => "required",

        ]);

        $customer->update($request->all());
        return redirect()->route("customer.index")->with("success","Data berhasil disimpan");

    }

    public function destroy(Customer $customer){
        $customer->delete();
        return to_route("customer.index")->with("success","Data berhasil disimpan");
    }
    

    
}
