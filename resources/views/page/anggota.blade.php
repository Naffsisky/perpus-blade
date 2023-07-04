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
    @section('content')
    <div class="container">
        <p>Data Anggota Test</p>
    </div>
    @endsection
</body>
</html>