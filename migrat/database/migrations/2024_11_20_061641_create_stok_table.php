<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('stok', function (Blueprint $table) {
            $table->id();  // This will create the primary key column for the 'stok' table
            $table->foreignId('id_barang')->constrained('barang', 'id_barang')->onDelete('cascade'); // Foreign key referencing 'barang'
            $table->string('nama_barang');
            $table->integer('jml_masuk');
            $table->integer('jml_keluar');
            $table->integer('total_barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok');
    }
};
