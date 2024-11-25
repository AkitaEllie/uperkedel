<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Barang_keluarSeeder extends Seeder
{
    public function run()
    {
        DB::table('barang_keluar')->insert([
            [
                'id_barang_keluar' => 1,
                'id_barang' => 1,
                'tgl_keluar' => now(),
                'jml_keluar' => 2,
                'penerima' => 'Nathan',
            ],
            [
                'id_barang_keluar' => 2,
                'id_barang' => 2,
                'tgl_keluar' => now(),
                'jml_keluar' => 2,
                'penerima' => 'penli',
            ],
            [
                'id_barang_keluar' => 3,
                'id_barang' => 3,
                'tgl_keluar' => now(),
                'jml_keluar' => 2,
                'penerima' => 'Epan',
            ],
        ]);
    }
}
