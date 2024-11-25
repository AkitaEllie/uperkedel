<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Barang_masukSeeder extends Seeder
{
    public function run()
    {
        DB::table('barang_masuk')->insert([
            [
                'id_barang_masuk' => 1,
                'id_barang' => 1, 
                'tgl_masuk' => now(), 
                'jml_barang' => 10, 
                'id_supplier' => 2
            ],
            [
                'id_barang_masuk' => 2,
                'id_barang' => 2, 
                'tgl_masuk' => now(), 
                'jml_barang' => 30, 
                'id_supplier' => 1
            ],
            [
                'id_barang_masuk' => 3,
                'id_barang' => 3, 
                'tgl_masuk' => now(), 
                'jml_barang' => 102, 
                'id_supplier' => 3
            ],
        ]);
    }
}
