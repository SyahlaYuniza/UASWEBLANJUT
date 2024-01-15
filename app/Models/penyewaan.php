<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyewaan extends Model
{
    use HasFactory;
    protected $table ='penyewaans';

    protected $fillable = ['Nama_customer','Nama_lapangan_basket','Tanggal_sewa','Jam_mulai','Jam_selesai'];

    public function customer(){

        return $this->belongsTo(Customer::class, 'customer_id', 'id');
}


public function lapbasket()
{
    return $this->belongsTo(lapbasket::class, 'produk_id', 'id');
}

}
