<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('barang')->insert([
            [
                'id_barang' => 1,
                'nama_barang' => 'Laptop',
                'spesifikasi' => 'Core i5, 8GB RAM, 256GB SSD',
                'lokasi' => 'Warehouse A',
                'kondisi' => 'Good',
                'jumlah_barang' => 50,
                'sumber_dana' => 'Budget A',
            ],
            [
                'id_barang' => 2,
                'nama_barang' => 'Projector',
                'spesifikasi' => 'Full HD, 3000 Lumens',
                'lokasi' => 'Warehouse B',
                'kondisi' => 'Good',
                'jumlah_barang' => 20,
                'sumber_dana' => 'Budget B',
            ],
        ]);
    }
}
