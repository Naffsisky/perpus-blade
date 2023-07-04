@extends('layout.master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    @section('navbar')
        <li class="nav-item">
            <a class="nav-link" href="/">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/data/buku/">Data Buku</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/data/buku/create">Tambah Buku</a>
        </li>
    @endsection
    @section('content')
    <div class="container">
        <form method="POST" action="{{ route('buku.store') }}">
            @csrf
            <div class="mb-3">
                <label for="InputJudul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" aria-describedby="Judul">
            </div>
            <div class="mb-3">
                <label for="InputPenulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis" aria-describedby="Penulis">
            </div>
            <div class="mb-3">
                <label for="InputPenerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" aria-describedby="Penerbit">
            </div>
            <div class="mb-3">
                <label for="InputTahunTerbit" class="form-label">Tahun Terbit</label>
                <input type="date" class="form-control" id="tahun_terbit" name="tahun_terbit" aria-describedby="tahunTerbit">
            </div>
            <div class="mb-3">
                <label for="InputKategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" aria-describedby="Kategori">
            </div>
            <div class="mb-3">
                <label for="InputJumlahBuku" class="form-label">Jumlah Buku</label>
                <input type="number" class="form-control" id="jumlah_buku" name="jumlah_buku" aria-describedby="JumlahBuku">
            </div>
            <div class="mb-3">
                <label for="InputHarga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" aria-describedby="Harga">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
    @endsection
</body>
</html>