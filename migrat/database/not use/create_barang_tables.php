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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id_supplier');
            $table->string('nama_supplier');
            $table->string('alamat_supplier');
            $table->string('telp_supplier');
            $table->timestamps();
        });

        Schema::create('barang', function (Blueprint $table) {
            $table->bigIncrements('id_barang');
            $table->string('nama_barang')->unique();
            $table->string('spesifikasi');
            $table->string('lokasi')->nullable(); // Optional location
            $table->string('kondisi');
            $table->string('sumber_dana');
            $table->timestamps();
        });
        
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->bigIncrements('id_barang_masuk');
            $table->unsignedBigInteger('id_barang');
            $table->foreign('id_barang')->references('id_barang')->on('barang')->onDelete('cascade');
            $table->date('tgl_masuk');
            $table->integer('jml_barang');
            $table->unsignedBigInteger('id_supplier'); // Correct spelling and reference
            $table->foreign('id_supplier')->references('id_supplier')->on('suppliers')->onDelete('cascade');
            $table->timestamps();
        });

       
        
        Schema::create('pinjam_barang', function (Blueprint $table) {
            $table->bigIncrements('id_pinjam');
            $table->string('peminjam');
            $table->date('tgl_pinjam');
            $table->unsignedBigInteger('id_barang');
            $table->foreign('id_barang')->references('id_barang')->on('barang')->onDelete('cascade');  
            $table->integer('jml_barang');
            $table->date('tgl_kembali');
            $table->string('kondisi');
            $table->timestamps();
        });

        Schema::create('barang_keluar', function (Blueprint $table) {
            $table->bigIncrements('id_barang_keluar');
            $table->unsignedBigInteger('id_barang');
            $table->foreign('id_barang')->references('id_barang')->on('barang')->onDelete('cascade');
            $table->date('tgl_keluar');
            $table->integer('jml_keluar');
            $table->string('penerima');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_keluar');
        Schema::dropIfExists('pinjam_barang');
        Schema::dropIfExists('barang');
        Schema::dropIfExists('barang_masuk');
        Schema::dropIfExists('suppliers');
    }
};
