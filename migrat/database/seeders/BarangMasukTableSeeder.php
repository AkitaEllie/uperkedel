<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangMasukTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('barang_masuk')->insert([
            [
                'id_barang' => 1,
                'nama_barang' => 'Laptop',
                'tgl_masuk' => now(),
                'jml_masuk' => 10,
                'id_supplier' => 1,
            ],
            [
                'id_barang' => 2,
                'nama_barang' => 'Projector',
                'tgl_masuk' => now(),
                'jml_masuk' => 5,
                'id_supplier' => 2,
            ],
        ]);
    }
}
