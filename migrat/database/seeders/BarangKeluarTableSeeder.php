<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangKeluarTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('barang_keluar')->insert([
            [
                'id_barang' => 1,
                'nama_barang' => 'Laptop',
                'tgl_keluar' => now(),
                'jml_keluar' => 5,
                'lokasi' => 'Office A',
                'penerima' => 'User1',
            ],
            [
                'id_barang' => 2,
                'nama_barang' => 'Projector',
                'tgl_keluar' => now(),
                'jml_keluar' => 2,
                'lokasi' => 'Office B',
                'penerima' => 'User2',
            ],
        ]);
    }
}
