<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pinjam_barangSeeder extends Seeder
{
    public function run(): void
    {
       DB::table('pinjam_barang')->insert([
        [
            'id_pinjam' => 1,
            'peminjam' => 'Nathan', 
            'tgl_pinjam' => now(), 
            'id_barang' => 1, 
            'jml_barang' => 50, 
            'tgl_kembali' => now()->addDays(7), 
            'kondisi' => 'Baik'
        ],
        [
            'id_pinjam' => 2,
            'peminjam' => 'Epan', 
            'tgl_pinjam' => now(), 
            'id_barang' => 2, 
            'jml_barang' => 53, 
            'tgl_kembali' => now()->addDays(7), 
            'kondisi' => 'Baik'
        ],
        [
            'id_pinjam' => 3,
            'peminjam' => 'penli', 
            'tgl_pinjam' => now(), 
            'id_barang' => 3, 
            'jml_barang' => 1523, 
            'tgl_kembali' => now()->addDays(7), 
            'kondisi' => 'Baik'
        ],
       ]);
    }
}
