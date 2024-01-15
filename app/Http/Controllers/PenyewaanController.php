<?php

namespace App\Http\Controllers;

use App\Models\lapbasket;
use App\Models\penyewaan;
use App\Models\Customer;
use Illuminate\Http\Request;

class PenyewaanController extends Controller
{
    //
    public function index()
    {
        $data = penyewaan::with('Customer', 'lapbasket')->orderBy('created_at', 'desc')->get();

        // dd($data);

        return view('penyewaan.index', compact('data'));
    }


    public function create()
    {
        $data_customer = Customer::all();
        $data_lapbasket = lapbasket::all();
        return view('penyewaan.create', compact('data_customer', 'data_lapbasket'));
    }

   

    public function store(Request $request)
    {
        $request->validate([
            "Nama_customer" => "",
            "Nama_lapangan_basket" => "",
            "Tanggal_sewa" => "required",
            "Jam_mulai" => "required",
            "Jam_selesai" => "required",
        
        ]);

        penyewaan::create($request->all());
        return to_route('penyewaan.index');
    }



    public function show(penyewaan $penyewaan){

    }
    public function edit(penyewaan $penyewaan)
    {
        $data_customer = Customer::all();
        $data_lapbasket = lapbasket::all();
        return view("penyewaan.edit", compact('data_customer', 'data_lapbasket','penyewaan'));
    }

    
    public function update(Request $request, penyewaan $penyewaan){
        $request->validate([
            "Nama_customer"=> "required",
            "Nama_lapangan_basket"=> "required",
            "Tanggal_sewa"=> "required",
            "Jam_mulai"=> "required",
            "Jam_selesai"=> "required",

        ]);

        $penyewaan->update($request->all());
        return redirect()->route("penyewaan.index")->with("success","Data berhasil disimpan");

    }

    public function destroy(penyewaan $penyewaan){
        $penyewaan->delete();
        return to_route("penyewaan.index")->with("success","Data berhasil disimpan");
    }
}
