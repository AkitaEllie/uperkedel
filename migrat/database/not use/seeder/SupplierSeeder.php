<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run()
    {
        DB::table('suppliers')->insert([
            [
                'id_supplier' => 1,
                'nama_supplier' => 'Nathan',
                'alamat_supplier' => 'kapuk',
                'telp_supplier' => '123-456-7890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_supplier' => 2,
                'nama_supplier' => 'penli',
                'alamat_supplier' => 'gay street',
                'telp_supplier' => '987-654-3210',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_supplier' => 3,
                'nama_supplier' => 'epan',
                'alamat_supplier' => 'sigma street',
                'telp_supplier' => '555-555-5555',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
