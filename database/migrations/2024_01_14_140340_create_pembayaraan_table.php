<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pembayaraan', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_customer', 100);
            $table->string('Jumlah_jam_sewa', 100);
            $table->double('Jumlah_bayar',20);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaraan');
    }
};
