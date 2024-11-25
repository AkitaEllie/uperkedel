<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang_masuk extends Model
{
    use HasFactory;

    protected $table = 'barang_masuk'; // Table name
    protected $primaryKey = 'id_barang_masuk'; // Primary key
    public $incrementing = true;
    protected $fillable = ['id_barang', 'tgl_masuk', 'jml_barang', 'id_supplier'];

    // Relationship with Barang
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }

    // Relationship with Supplier
    public function suplier()
    {
        return $this->belongsTo(Suplier::class, 'id_supplier', 'id_supplier');
    }
}
