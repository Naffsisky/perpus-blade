@extends('layout.master')

@section('navbar')
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand mx-4" href="#">
                    <img src="https://w7.pngwing.com/pngs/606/201/png-transparent-mississauga-library-system-school-library-public-library-online-public-access-catalog-library-miscellaneous-trademark-logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"> Perpustakaan Digital
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/data/anggota/">Data Anggota</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/data/buku/">Data Buku</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
        <div class="container my-3">
            <h2 style="text-align: center" class="my-4">Selamat Datang di Perpustakaan</h2>
        </div>
    </br>
    </div>
@endsection

@section('content')
    <div class="container">
        <h4>Data Buku</h4>
        <p>Uji Coba Blade Template Engine</p>
    </div>
@endsection