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
        @if(Session::has('tambah'))
            <div class="alert alert-success">
                {{ Session::get('tambah') }}
            </div>
        @endif
        @if(Session::has('edit'))
            <div class="alert alert-info">
                {{ Session::get('edit') }}
            </div>
        @endif
        @if(Session::has('hapus'))
            <div class="alert alert-danger">
                {{ Session::get('hapus') }}
            </div>
        @endif
        <a href="{{ route('buku.create') }}" class="btn btn-primary mb-3">Tambah Buku</a>
        <div class="table-responsive">
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
            @php
                $currentPage = $data_buku->currentPage();
                $halaman = $data_buku->perPage();
                $no = ($currentPage - 1) * $halaman + 1;
            @endphp
            @foreach ($data_buku as $buku)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ $buku->penerbit }}</td>
                <td>{{ $buku->tahun_terbit }}</td>
                <td>{{ $buku->kategori }}</td>
                <td>{{ $buku->jumlah_buku }}</td>
                <td>{{ number_format($buku->harga, 0, ',', '.') }}</td>
                <td>
                    <form action="{{ route('buku.destroy', $buku->id) }}" method="POST"> @csrf
                        <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                        <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-warning">Edit</a>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        </div>
        <div class="mt-4">{{ $data_buku->render("pagination::bootstrap-5") }}</div>
    </div>
    @endsection
</body>
</html>