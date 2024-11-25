<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('barang', function (Blueprint $table) {
        $table->id('id_barang');
        $table->string('nama_barang');
        $table->text('spesifikasi');
        $table->string('lokasi');
        $table->string('kondisi');
        $table->integer('jumlah_barang');
        $table->string('sumber_dana');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
