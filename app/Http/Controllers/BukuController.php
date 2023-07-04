<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function buku()
    {
        $data_buku = Buku::all()->sortBy('jumlah_buku'); // Mengambil semua isi tabel gunakan Desc untuk mengurutkan dari terbesar ke terkecil
        return view('page.buku', compact('data_buku'));
    }
    public function create(){
        return view('page.create');
    }
    public function store(request $request){
        $buku = new Buku;
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->kategori = $request->kategori;
        $buku->jumlah_buku = $request->jumlah_buku;
        $buku->harga = $request->harga;
        $buku->save();
        return redirect('/data/buku');
    }
    public function destroy($id){
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/data/buku');
    }
}
