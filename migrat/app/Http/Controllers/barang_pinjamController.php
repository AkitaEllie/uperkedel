<?php

namespace App\Http\Controllers;

use App\Models\barang_pinjam;
use App\Models\Barang;
use Illuminate\Http\Request;

class barang_pinjamController extends Controller
{
    // Display all barang Pinjam records
    public function index()
    {
        $barangPinjam = barang_pinjam::with(['barang'])->get();
        return view('barang_pinjam.index', compact('barangPinjam'));
    }

    // Show the form to create a new barang Pinjam record
    public function create()
    {
        $barang = Barang::all();
        return view('barang_pinjam.create', compact('barang'));
    }

    // Store a new barang Pinjam record in the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'peminjam' => 'required|string|max:255', // Must exist in barang table
            'tgl_pinjam' => 'required|date',
            'id_barang' => 'required|exists:barang,id_barang',
            'jml_barang' => 'required|integer|min:1',
            'tgl_kembali' => 'required|date',
            'kondisi' => 'required|string|max:255',
        ]);

        barang_pinjam::create($validated);

        return redirect()->route('barang_pinjam.index')->with('success', 'Barang Pinjam berhasil ditambahkan.');
    }

    // Show the form to edit an existing barang Pinjam record
    public function edit($id_barang_pinjam_barang_pinjam)
    {
        $barangPinjam = barang_pinjam::findOrFail($id_barang_pinjam_barang_pinjam);
        $barang = Barang::all();     // Fetch all barang for dropdown
        return view('barang_pinjam.edit', compact('barangPinjam','barang'));
    }

    // Update an existing barang Pinjam record
    public function update(Request $request, $id_barang_pinjam_barang_pinjam)
    {
        $validated = $request->validate([
            'tgl_pinjam' => 'required|date',
            'id_barang' => 'required|exists:barang,id_barang',
            'jml_barang' => 'required|integer|min:1',
            'tgl_kembali' => 'required|date',
            'kondisi' => 'required|string|max:255',
        ]);

        $barangPinjam = barang_pinjam::findOrFail($id_barang_pinjam_barang_pinjam);
        $barangPinjam->update($validated);

        return redirect()->route('barang_pinjam.index')->with('success', 'Barang Pinjam berhasil diperbarui.');
    }

    // Delete a barang Pinjam record
    public function destroy($id_pinjam)
    {
        $barangPinjam = barang_pinjam::findOrFail($id_pinjam);
        $barangPinjam->delete();

        return redirect()->route('barang_pinjam.index')->with('success', 'Barang Pinjam berhasil dihapus.');
    }
}
 