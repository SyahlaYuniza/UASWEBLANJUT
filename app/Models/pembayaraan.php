<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaraan extends Model
{
    use HasFactory;
    protected $table ='pembayaraan';

    protected $fillable = ['Nama_customer','Jumlah_jam_sewa','Jumlah_bayar'];

    public function customer(){

        return $this->belongsTo(Customer::class, 'Nama_customer', 'Nama_customer');
}




}
