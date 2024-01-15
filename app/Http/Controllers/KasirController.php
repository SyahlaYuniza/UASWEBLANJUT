<?php

namespace App\Http\Controllers;

use App\Models\kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    //
     
     public function index (){
        $data = kasir::all();
        return view("kasir.index", compact("data"));

        //dd($data);
        
        
    }
    
    public function create()
    {
        return view("kasir.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            "Nama" => "required",
            "No_telp" => "required",
            "Alamat" => "required",
        ]);
        kasir::create($request->all());
        return redirect()->route("kasir.index")->with("success", "Data berhasil disimpan");
    }

    public function show(kasir $kasir){

    }
    public function edit(kasir $kasir){
   
        return view("kasir.edit", compact("kasir"));
    }
    
    public function update(Request $request, kasir $kasir){
        $request->validate([
            "Nama"=> "required",
            "No_telp"=> "required",
            "Alamat"=> "required",

        ]);

        $kasir->update($request->all());
        return redirect()->route("kasir.index")->with("success","Data berhasil disimpan");

    }

    public function destroy(kasir $kasir){
        $kasir->delete();
        return to_route("kasir.index")->with("success","Data berhasil disimpan");
    }
}

