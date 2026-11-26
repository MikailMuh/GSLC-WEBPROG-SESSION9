<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    //
    public function create(){
        return view('kategori.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        $kategori = new Kategori;
        $kategori->nama = $request->nama;
        $kategori->deskripsi = $request->deskripsi;
        $kategori->save();

        return redirect('/kategori/create')->with('pesan', 'Kategori berhasil ditambahkan!');
    }
}
