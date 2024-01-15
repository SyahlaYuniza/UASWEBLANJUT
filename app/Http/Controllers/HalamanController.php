<?php

namespace App\Http\Controllers;

use App\Models\lapbasket;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
     public function index (){
        $data = lapbasket::all();
        return view("halaman.index", compact("data"));

        //dd($data);
        
        
    
}

}
