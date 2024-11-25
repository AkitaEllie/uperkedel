<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang_keluar extends Model
{
    use HasFactory;

    protected $table = 'barang_keluar'; // Table name
    protected $primaryKey = 'id_barang_keluar'; // Primary key
    public $incrementing = true;
    protected $fillable = ['id_barang', 'tgl_keluar', 'jml_keluar', 'penerima'];

    // Relationship with Barang
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }
}
