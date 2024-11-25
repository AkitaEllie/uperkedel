<?php


namespace App\Http\Controllers;


use App\Models\barang;
use Illuminate\Http\Request;


class BarangController extends Controller {
   //Menampilkan semua data suplier
   public function index()
   {
       $barang = barang::all();
       return view('barang.index', compact('barang'));
   }


   //Menampilkan form untuk membuat suplier baru
   public function create()
   {
       return view('barang.create');
   }


   // Menyimpan data Supplier ke database
   public function store(Request $request)
   {
       $validated = $request->validate([
           'id_barang' => 'required|integer',
           'nama_barang' => 'required|string|max:255',
           'spesifikasi' => 'required|string|max:255',
           'lokasi' => 'required|string|max:255',
           'kondisi' => 'required|string|max:255',
           'sumber_dana' => 'required|string|max:255',
       ]);


       barang::create($validated);


       return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan.');
   }


   // Menghapus data Supplier dari database
   public function destroy(barang $barang)
   {
       $barang->delete();


       return redirect()->route('barang.index')->with('success', 'Data Barang berhasil dihapus.');
   }


   // Show the edit form for a specific supplier
   public function edit($id_barang)
   {
       $barang = barang::find($id_barang);


       // Check if the supplier exists
       if (!$barang) {
           return redirect()->route('barang.index')->with('error', 'barang not found.');
       }
       return view('barang.edit', compact('barang'));
   }


   public function update(barang $barang, Request $request)
   {
       // Validasi data request jika diperlukan
       $validatedData = $request->validate([
           'id_barang' => 'required|integer',
           'nama_barang' => 'required|string|max:255',
           'spesifikasi' => 'required|string|max:255',
           'lokasi' => 'required|string|max:255',
           'kondisi' => 'required|string|max:255',
           'sumber_dana' => 'required|string|max:255',
       ]);


       // Update data suplier
       $barang->update($validatedData);


       return redirect()->route('barang.index')->with('success', 'Barang data successfully updated.');
   }
}