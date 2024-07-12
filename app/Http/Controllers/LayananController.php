<?php

namespace App\Http\Controllers;

use App\Models\Montir;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Layanan;


class LayananController extends Controller
{
    // Menampilkan daftar Layanan
    public function show()
    {
        $list_layanan = Layanan::all();
        return view('layanan.show', ['list_layanan' => $list_layanan]);
    }

    // Menampilkan form untuk menambah Layanan baru
    public function create()
    {
        $layanan = new Layanan();
        $montir = Montir::all();
        


        return view('layanan.form', [
            'layanan' => $layanan,
            'list_montir' => $montir,
        ]);
    }

    // Menyimpan Layanan baru atau mengupdate yang sudah ada
    public function store(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'jenis_layanan' => 'required',
            'total_biaya' => 'required',
            'rating' => 'required',
            'montir_id' => 'required',
        ]);
    
        // Set nilai default untuk jenis_layanan jika tidak disediakan oleh pengguna
        if (!isset($validatedData['jenis_layanan'])) {
            $validatedData['jenis_layanan'] = 'default_value'; // Ganti dengan nilai default yang sesuai
        }
    
        // Simpan data ke dalam tabel layanan
        Layanan::create($validatedData);
    
        // Redirect dengan pesan sukses
        return redirect(route('layanan.show'))->with('pesan', 'Data berhasil disimpan');
    }
    

    // Menampilkan form untuk mengedit Layanan
    // Menampilkan form untuk mengedit Layanan
    // Menampilkan form untuk mengedit Layanan
    public function edit($id)
    {
        $layanan = Layanan::find($id);
        return view('layanan.form', compact('layanan', 'list_layanan'));
    }

    // Mengupdate data Layanan yang sudah diubah
    public function update(Request $request, $id)
    {
        $layanan = Layanan::find($id);
        $layanan->update($request->all());
        return redirect(route('layanan.show'))->with('pesan', 'Data berhasil diupdate');
    }

    // Menampilkan detail Layanan
    public function view($id)
    {
        $layanan = Layanan::find($id);
        return view('layanan.view', ['layanan' => $layanan]);
    }

    // Menghapus Layanan
    public function destroy($id): RedirectResponse
    {
        Layanan::find($id)->delete();
        return redirect(route('layanan.show'))->with('pesan', 'Data berhasil dihapus');
    }
}