<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['id_barang', 'nama_barang', 'spesifikasi', 'lokasi', 'kondisi', 'sumber_dana'];
    protected $primaryKey = 'id_barang';

    public function barangMasuk()
    {
        return $this->hasMany(BarangMasuk::class, 'id_barang', 'id_barang');
    }

    public function barangKeluar()
    {
        return $this->hasMany(BarangKeluar::class, 'id_barang', 'id_barang');
    }

    public function barangPinjam()
    {
        return $this->hasMany(BarangKeluar::class, 'id_barang', 'id_barang');
    }
}

