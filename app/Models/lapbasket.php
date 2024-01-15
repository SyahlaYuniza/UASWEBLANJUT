<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lapbasket extends Model
{
    use HasFactory;
    protected $table ='lapbaskets';

    protected $fillable = ['image','Nama_lapangan_basket','Lokasi','Harga'];
}
