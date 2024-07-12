<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Montir;

class MontirController extends Controller
{
    public function show()
    {
        $list_montir = Montir::all();
        return view('montir.show', ['list_montir' => $list_montir]);
    }

    public function create()
    {
        return view('montir.form');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nomor' => 'required',
            'nama' => 'required',
            'gender' => 'required',
            'tgl_lahir' => 'required',
            'tmp_lahir' => 'required',
            'keahlian' => 'required',
        ]);

        Montir::create($validatedData);

        return redirect()->route('montir.show')->with('pesan', 'Data Montir berhasil ditambahkan');
    }
    
    public function edit($id)
    {
        $montir = Montir::find($id);
        return view('montir.form', compact('montir', 'list_montir'));
    }

    // Mengupdate data Layanan yang sudah diubah
    public function update(Request $request, $id)
    {
        $montir = Montir::find($id);
        $montir->update($request->all());
        return redirect(route('montir.show'))->with('pesan', 'Data berhasil diupdate');
    }

    // Menampilkan detail Layanan
    public function view($id)
    {
        $montir = Montir::find($id);
        return view('montir.view', ['montir' => $montir]);
    }

    // Menghapus Layanan
    public function destroy($id): RedirectResponse
    {
        Montir::find($id)->delete();
        return redirect(route('montir.show'))->with('pesan', 'Data berhasil dihapus');
    }
}