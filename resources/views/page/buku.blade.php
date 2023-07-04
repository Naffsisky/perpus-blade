@extends('layout.master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku Perpustakaan</title>
</head>
<body>
    @section('navbar')
        <li class="nav-item">
            <a class="nav-link" href="/">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/data/anggota/">Data Anggota</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/data/buku/">Data Buku</a>
        </li>
    @endsection
    @section('content')
    <div class="container">
        <h2 class="text-center mb-4">Data Buku</h2>
        <a href="{{ route('buku.create') }}" class="btn btn-primary mb-3">Tambah Buku</a>
        <table class="table table-striped text-center">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Kategori</th>
                <th>Jumlah Buku</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data_buku as $buku)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ $buku->penerbit }}</td>
                <td>{{ $buku->tahun_terbit }}</td>
                <td>{{ $buku->kategori }}</td>
                <td>{{ $buku->jumlah_buku }}</td>
                <td>{{ $buku->harga }}</td>
                <td>
                    <form action="{{ route('buku.destroy', $buku->id) }}" method="POST"> @csrf
                        <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</a>

                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    @endsection
</body>
</html>