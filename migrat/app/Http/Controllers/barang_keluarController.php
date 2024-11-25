<?php

namespace App\Http\Controllers;

use App\Models\barang_keluar;
use App\Models\Barang;
use Illuminate\Http\Request;

class barang_keluarController extends Controller
{
    // Display all barang keluar records
    public function index()
    {
        $barangKeluar = barang_keluar::with(['barang'])->get();
        return view('barang_keluar.index', compact('barangKeluar'));
    }

    // Show the form to create a new barang keluar record
    public function create()
    {
        $barang = Barang::all();
        return view('barang_keluar.create', compact('barang'));
    }

    // Store a new barang keluar record in the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_barang' => 'required|exists:barang,id_barang', // Must exist in barang table
            'tgl_keluar' => 'required|date',
            'jml_keluar' => 'required|integer|min:1',
            'penerima' => 'required|string|max:255',
        ]);

        barang_keluar::create($validated);

        return redirect()->route('barang_keluar.index')->with('success', 'Barang keluar berhasil ditambahkan.');
    }

    // Show the form to edit an existing barang keluar record
    public function edit($id_barang_keluar_barang_keluar)
    {
        $barangKeluar = barang_keluar::findOrFail($id_barang_keluar_barang_keluar);
        $barang = Barang::all();     // Fetch all barang for dropdown
        return view('barang_keluar.edit', compact('barangKeluar','barang'));
    }

    // Update an existing barang keluar record
    public function update(Request $request, $id_barang_keluar_barang_keluar)
    {
        $validated = $request->validate([
            'id_barang' => 'required|exists:barang,id_barang', // Must exist in barang table
            'tgl_keluar' => 'required|date',
            'jml_keluar' => 'required|integer|min:1',
            'penerima' => 'required|string|max:255',
        ]);

        $barangKeluar = barang_keluar::findOrFail($id_barang_keluar_barang_keluar);
        $barangKeluar->update($validated);

        return redirect()->route('barang_keluar.index')->with('success', 'Barang keluar berhasil diperbarui.');
    }

    // Delete a barang keluar record
    public function destroy($id_barang_keluar)
    {
        $barangKeluar = barang_keluar::findOrFail($id_barang_keluar);
        $barangKeluar->delete();

        return redirect()->route('barang_keluar.index')->with('success', 'Barang keluar berhasil dihapus.');
    }
}
 