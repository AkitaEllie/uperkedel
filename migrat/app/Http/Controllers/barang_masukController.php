<?php

namespace App\Http\Controllers;

use App\Models\barang_masuk;
use App\Models\Suplier;
use App\Models\Barang;
use Illuminate\Http\Request;

class barang_masukController extends Controller
{
    // Display all barang masuk records
    public function index()
    {
        $barangMasuk = barang_masuk::with(['barang', 'suplier'])->get(); // Eager load relationships
        return view('barang_masuk.index', compact('barangMasuk'));
    }

    // Show the form to create a new barang masuk record
    public function create()
    {
        $suppliers = Suplier::all(); // Fetch all suppliers
        $barang = Barang::all();     // Fetch all barang
        return view('barang_masuk.create', compact('suppliers', 'barang'));
    }

    // Store a new barang masuk record in the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_barang' => 'required|exists:barang,id_barang', // Must exist in barang table
            'id_supplier' => 'required|exists:suppliers,id_supplier', // Must exist in suppliers table
            'tgl_masuk' => 'required|date',
            'jml_barang' => 'required|integer|min:1',
        ]);

        barang_masuk::create($validated);

        return redirect()->route('barang_masuk.index')->with('success', 'Barang masuk berhasil ditambahkan.');
    }

    // Show the form to edit an existing barang masuk record
    public function edit($id_barang_masuk_barang_masuk)
    {
        $barangMasuk = barang_masuk::findOrFail($id_barang_masuk_barang_masuk);
        $suppliers = Suplier::all(); // Fetch all suppliers for dropdown
        $barang = Barang::all();     // Fetch all barang for dropdown
        return view('barang_masuk.edit', compact('barangMasuk', 'suppliers', 'barang'));
    }

    // Update an existing barang masuk record
    public function update(Request $request, $id_barang_masuk_barang_masuk)
    {
        $validated = $request->validate([
            'id_barang' => 'required|exists:barang,id_barang',
            'id_supplier' => 'required|exists:suppliers,id_supplier',
            'tgl_masuk' => 'required|date',
            'jml_barang' => 'required|integer|min:1',
        ]);

        $barangMasuk = barang_masuk::findOrFail($id_barang_masuk_barang_masuk);
        $barangMasuk->update($validated);

        return redirect()->route('barang_masuk.index')->with('success', 'Barang masuk berhasil diperbarui.');
    }

    // Delete a barang masuk record
    public function destroy($id_barang_masuk)
    {
        $barangMasuk = barang_masuk::findOrFail($id_barang_masuk);
        $barangMasuk->delete();

        return redirect()->route('barang_masuk.index')->with('success', 'Barang masuk berhasil dihapus.');
    }
}
 