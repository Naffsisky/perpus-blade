@extends('layout.master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota Perpustakaan</title>
</head>
<body>
    @section('navbar')
        <li class="nav-item">
            <a class="nav-link" href="/">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/data/anggota/">Data Anggota</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/data/buku/">Data Buku</a>
        </li>
    @endsection
    @section('search')
        <form class="d-flex" role="search" action="" method=""> @csrf
            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="cari">
            <button class="btn btn-outline-success" type="text" >Search</button>
        </form>
    @endsection
    @section('content')
    <div class="container">
        <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Anggota</a>
        <div class="table-responsive">
            <table class="table table-striped text-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
                @php
                    $currentPage = $jumlah_user->currentPage();
                    $halaman = $jumlah_user->perPage();
                    $no = ($currentPage - 1) * $halaman + 1;
                @endphp
                @foreach ($jumlah_user as $user)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->level }}</td>
                    <td>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST"> @csrf
                            <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        </div>
    </div>
    @endsection
</body>
</html>