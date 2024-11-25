<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang_pinjam extends Model
{
    use HasFactory;

    protected $table = 'pinjam_barang'; // Table name
    protected $primaryKey = 'id_pinjam'; // Primary key
    public $incrementing = true;
    protected $fillable = ['peminjam', 'tgl_pinjam', 'id_barang', 'jml_barang', 'tgl_kembali', 'kondisi'];

    // Relationship with Barang
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }
}
