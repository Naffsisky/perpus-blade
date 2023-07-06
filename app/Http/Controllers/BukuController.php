<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function buku(){
        $batas = 10;
        $jumlah_buku = Buku::count();
        // $data_buku = Buku::where('judul', 'like', "%" . $cari . "%")->orderByRaw('CAST(jumlah_buku AS UNSIGNED)')->paginate($batas);
        $data_buku = Buku::orderBy('judul')->paginate($batas); // Mengambil semua isi tabel gunakan Desc untuk mengurutkan dari terbesar ke terkecil
        return view('page.buku', compact('data_buku', 'jumlah_buku'));
    }
    public function create(){
        return view('page.create');
    }
    public function store(request $request){
        $this->validate($request,[
            'judul' => 'required',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|date',
            'kategori' => 'required|string',
            'jumlah_buku' => 'required|numeric',
            'harga' => 'required|numeric'
        ]);
        $buku = new Buku;
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->kategori = $request->kategori;
        $buku->jumlah_buku = $request->jumlah_buku;
        $buku->harga = $request->harga;
        $buku->save();
        return redirect('/data/buku')->with('tambah', 'Data Buku Berhasil Ditambahkan');
    }
    public function destroy($id){
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/data/buku')->with('hapus', 'Data Buku Berhasil Dihapus');
    }
    public function edit($id){
        $buku = Buku::find($id);
        return view('page.edit', compact('buku'));
    }
    public function update(Request $request, $id){
        $buku = Buku::find($id);
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->kategori = $request->kategori;
        $buku->jumlah_buku = $request->jumlah_buku;
        $buku->harga = $request->harga;
        $buku->save();
        return redirect('/data/buku')->with('edit', 'Data Buku Berhasil Diubah');
    }
    public function search(Request $request){
        $batas = 10;
        $cari = $request->cari;
        $jumlah_buku = Buku::count();
        $data_buku = Buku::where('judul', 'like', "%" . $cari . "%")
                        ->orWhere('penulis', 'like', "%" . $cari . "%")
                        ->orWhere('kategori', 'like', "%" . $cari . "%")
                        ->orWhere('penerbit', 'like', "%" . $cari . "%")
                        ->orderBy('judul', 'asc')->paginate($batas);
        return view('page.search', compact('data_buku', 'cari'));
    }
}