<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\KategoriMontir; // Import the Kab class

class KategoriMontirController extends Controller
{
    //
    public function show(){
        $list_kategori_montir = KategoriMontir::all();
        return view('kategori_montir.show', ['list_kategori_montir'=>$list_kategori_montir]);
    }
    
    public function create()
    {
        $list_kategori_montir = KategoriMontir::all();
        $kategori_montir = new KategoriMontir();
        return view('kategori_montir.form', ['kategori_montir'=>$kategori_montir, 'list_kategori_montir'=>$list_kategori_montir]);
    }
    
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data inputan
        $request->validate([
            'id' => 'required',
            'nama' => 'required',
        ]);

        if($request->id){  
            KategoriMontir::find($request->id)->update($request->all());
            // Redirect to the index page with a success message
            return redirect(route('kategori_montir.show'))->with('pesan', 'Data berhasil diupdate');
        }
        else{
            // Create a new Kab instance with the validated data
            KategoriMontir::create($request->all());
            // Redirect to the index page with a success message
            return redirect(route('kab.show'))->with('pesan', 'Data berhasil disimpan');
        }  
    }

    public function edit($id)
    {
        $kategori_montir = KategoriMontir::find($id);
        $list_kategori_montir = KategoriMontir::all();
        return view('kategori_montir.form', ['kategori_montir'=>$kategori_montir, 'list_kategori_montir'=>$list_kategori_montir]);
    }
    
    public function view($id)
{
    $kategori_montir = KategoriMontir::find($id);
    return view('kategori_montir.view', ['kategori_montir'=>$kategori_montir]);
}

public function destroy($id): RedirectResponse
{
    KategoriMontir::find($id)->delete();
    return redirect(route('kategori_montir.show'))->with('pesan', 'Data berhasil dihapus');
}

}