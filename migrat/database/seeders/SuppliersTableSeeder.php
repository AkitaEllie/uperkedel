<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuppliersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('suppliers')->insert([
            [
                'id_supplier' => 1,
                'nama_supplier' => 'Supplier A',
                'alamat_supplier' => 'Jl. Merdeka No. 1',
                'telp_supplier' => '081234567890',
            ],
            [
                'id_supplier' => 2,
                'nama_supplier' => 'Supplier B',
                'alamat_supplier' => 'Jl. Proklamasi No. 2',
                'telp_supplier' => '081234567891',
            ],
        ]);
    }
}
