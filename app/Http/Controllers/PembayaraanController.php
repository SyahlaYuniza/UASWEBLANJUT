<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\pembayaraan;
use Illuminate\Http\Request;

class PembayaraanController extends Controller
{
    //
     
    public function index()
    {
        $data = pembayaraan::with('customer')->get();

        // dd($data);

        return view('pembayaraan/index', compact('data'));
    }
    
    public function create()
    {
        $data_customer = Customer::all();
        return view('pembayaraan.create', compact('data_customer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        pembayaraan::create($request->all());
        return to_route('pembayaraan.index');
    }


    public function show(pembayaraan $pembayaraan){

    }
    public function edit(pembayaraan $pembayaraan){
   
        return view("pembayaraan.edit", compact("pembayaraan"));
    }
    
    public function update(Request $request, pembayaraan $pembayaraan){
        $request->validate([
            "Nama_customer" => "required",
            "Jumlah_jam_sewa" => "required",
            "Jumlah_bayar" => "required",

        ]);

        $pembayaraan->update($request->all());
        return redirect()->route("pembayaraan.index")->with("success","Data berhasil disimpan");

    }

    public function destroy(pembayaraan $pembayaraan){
        $pembayaraan->delete();
        return to_route("pembayaraan.index")->with("success","Data berhasil disimpan");
    }
}