<?php

namespace App\Http\Controllers;

use App\Models\lapbasket;
use Illuminate\Http\Request;

class LapbasketController extends Controller
{
    //
     
     public function index (){
        $data = lapbasket::all();
        return view("lapbasket.index", compact("data"));

        //dd($data);
        
        
    }
    
    public function create()
    {
        return view("lapbasket.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            "image" => "required|image|mimes:jpg,png,jpeg",
            "Nama_lapangan_basket"=> "required",
            "Lokasi"=> "required",
            "Harga"=> "required",
        ]);
        $input = $request->all();

        //upload gambar
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        }


        lapbasket::create($input);
      
        return redirect()->route("lapbasket.index")->with("success", "Data berhasil disimpan");
    }

    public function show(lapbasket $lapbasket){

    }
    public function edit(lapbasket $lapbasket){
   
        return view("lapbasket.edit", compact("lapbasket"));


    }
    
    public function update(Request $request, lapbasket $lapbasket){
        $request->validate([

            "Nama_lapangan_basket"=> "required",
            "Lokasi"=> "required",
            "Harga"=> "required",
            "Image"=> "image|mimes:jpg,png,jpeg",

        ]);
        $input = $request->except('image');

        if ($request->hasFile('image')) {
            $destinationPath = 'images/';

            // Hapus gambar lama jika ada
            if ($lapbasket->image && file_exists($destinationPath . $lapbasket->image)) {
                unlink($destinationPath . $lapbasket->image);
            }

            // Upload dan simpan gambar baru
            $image = $request->file('image');
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = $postImage;
        }

        $lapbasket->update($input);
       
        return redirect()->route("lapbasket.index")->with("success","Data berhasil disimpan");

    }

    public function destroy(lapbasket $lapbasket){
        $lapbasket->delete();
        return to_route("lapbasket.index")->with("success","Data berhasil disimpan");
    }
}
