<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PinjamBarangTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('pinjam_barang')->insert([
            [
                'id_pinjam' => 1,
                'peminjam' => 'User1',
                'tgl_pinjam' => now(),
                'id_barang' => 1,
                'nama_barang' => 'Laptop',
                'jml_barang' => 2,
                'tgl_kembali' => now()->addDays(7),
                'kondisi' => 'Good',
            ],
            [
                'id_pinjam' => 2,
                'peminjam' => 'User2',
                'tgl_pinjam' => now(),
                'id_barang' => 2,
                'nama_barang' => 'Projector',
                'jml_barang' => 1,
                'tgl_kembali' => now()->addDays(7),
                'kondisi' => 'Good',
            ],
        ]);
    }
}
