<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('stok')->insert([
            [
                'id_barang' => 1,
                'nama_barang' => 'Laptop',
                'jml_masuk' => 10,
                'jml_keluar' => 5,
                'total_barang' => 5,
            ],
            [
                'id_barang' => 2,
                'nama_barang' => 'Projector',
                'jml_masuk' => 5,
                'jml_keluar' => 2,
                'total_barang' => 3,
            ],
        ]);
    }
}
