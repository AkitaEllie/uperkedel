<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $table = 'suppliers';
    protected $fillable = ['id_supplier', 'nama_supplier', 'alamat_supplier', 'telp_supplier'];
    protected $primaryKey = 'id_supplier';

    public function barangMasuk()
    {
        return $this->hasMany(BarangMasuk::class, 'id_supplier', 'id_supplier');
    }
}
