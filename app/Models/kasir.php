<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kasir extends Model
{
    use HasFactory;
    protected $table ='kasirs';

    protected $fillable = ['Nama','No_telp','Alamat'];
}
