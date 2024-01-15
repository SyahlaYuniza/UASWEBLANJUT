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
        Schema::create('lapbaskets', function (Blueprint $table) {
            $table->id();
            $table->string('image', 100);
            $table->string('Nama_lapangan_basket', 100);
            $table->string('Lokasi' , 100);
            $table->double('Harga', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lapbaskets');
    }
};
