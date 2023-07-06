@extends('layout.master')

@section('navbar')
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/">Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/data/anggota/">Data Anggota</a>
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
        <h2 style="text-align: center" class="mb-4">Apa Itu Perpustakaan?</h2>
        <p style="text-indent: 7%; text-align: justify">Perpustakaan adalah suatu institusi atau tempat yang menyediakan koleksi buku, majalah, jurnal, dan bahan bacaan lainnya yang dapat dipinjam atau dikonsultasikan oleh masyarakat umum. Perpustakaan berfungsi sebagai pusat informasi dan sumber pengetahuan yang penting dalam mendukung pembelajaran, penelitian, dan pengembangan individu. Di perpustakaan, pengguna dapat mengakses berbagai jenis literatur dan sumber daya informasi untuk memenuhi kebutuhan belajar, membaca, dan riset mereka. Perpustakaan menyediakan beragam kategori buku, seperti sastra, ilmu pengetahuan, sejarah, seni, teknologi, dan lain sebagainya, sehingga memungkinkan pengguna untuk memperluas pengetahuan dan mengeksplorasi minat mereka.</p>
        <p style="text-indent: 7%;">Selain itu, perpustakaan juga berperan dalam mengembangkan keterampilan literasi dan membantu masyarakat meningkatkan kemampuan membaca, menulis, dan berpikir kritis. Perpustakaan modern juga mengadopsi teknologi digital, menyediakan akses ke e-book, database elektronik, jurnal online, dan sumber daya digital lainnya, sehingga memfasilitasi akses mudah ke informasi dalam format digital. Perpustakaan biasanya memiliki sistem peminjaman dan pengembalian buku, serta layanan referensi dan penelitian, seperti bantuan dalam mencari informasi, mengakses database, dan membantu dalam kegiatan riset. Selain itu, perpustakaan sering kali menyelenggarakan acara, seperti diskusi buku, ceramah, lokakarya, dan pameran, untuk mempromosikan budaya literasi dan mendukung pembelajaran komunitas.</p>
        <p>Dalam masyarakat, perpustakaan memiliki peran penting dalam menghubungkan individu dengan pengetahuan, memfasilitasi pembelajaran sepanjang hayat, dan memajukan kehidupan intelektual dan sosial.</p>
        </br>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                <img src="{{ asset('image/lib-image-1.jpg') }}" class="card-img-top custom-card-img" alt="Image-1">
                <div class="card-body">
                    <h5 class="card-title text-center">Daftar Buku</h5>
                    <p class="card-text">Tersedia Berbagai Macam Buku, Untuk lebih lengkapnya silahkan klik <a href="/data/buku/">disini</a>.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="{{ asset('image/lib-image-2.jpg') }}" class="card-img-top custom-card-img" alt="Image-2">
                <div class="card-body">
                    <h5 class="card-title text-center">Kategori</h5>
                    <p class="card-text">Tersedia Berbagai Macam Buku, Untuk lebih lengkapnya silahkan klik <a href="/data/buku/">disini</a>.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="{{ asset('image/lib-image-3.jpg') }}" class="card-img-top custom-card-img" alt="Image-3">
                <div class="card-body">
                    <h5 class="card-title text-center">Bangunan</h5>
                    <p class="card-text">Tersedia Berbagai Macam Buku, Untuk lebih lengkapnya silahkan klik <a href="/data/buku/">disini</a>.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection