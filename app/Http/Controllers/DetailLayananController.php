<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailLayanan;

class DetailLayananController extends Controller
{
    // Menampilkan semua data layanan
    public function show()
    {
        $list_detail_layanan = DetailLayanan::all();
        return view('detail_layanan.show', ['list_detail_layanan' => $list_detail_layanan]);
    }

    // Menampilkan form untuk membuat data layanan baru
    public function create()
    {
        return view('detail_layanan.form');
    }

    // Menyimpan data layanan baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pekerjaan' => 'required',
            'biaya' => 'required|numeric',
        ]);

        DetailLayanan::create($validatedData);

        return redirect()->route('detail_layanan.show')->with('pesan', 'Data Layanan berhasil ditambahkan');
    }

    // Menampilkan detail layanan berdasarkan ID
    public function view($id)
    {
        $detail_layanan = DetailLayanan::find($id);
        return view('detail_layanan.view', ['detail_layanan' => $detail_layanan]);
    }

    // Menghapus data layanan berdasarkan ID
    public function destroy($id)
    {
        DetailLayanan::find($id)->delete();
        return redirect()->route('detail_layanan.show')->with('pesan', 'Data Layanan berhasil dihapus');
    }
}