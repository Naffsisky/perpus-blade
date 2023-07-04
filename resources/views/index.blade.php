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

@section('content')
    <div class="container" style="text-align: justify">
    <h2 style="text-align: center" class="mb-4">Apa Itu Perpustakaan?</h2>
        <p style="text-indent: 7%;">Perpustakaan adalah suatu institusi atau tempat yang menyediakan koleksi buku, majalah, jurnal, dan bahan bacaan lainnya yang dapat dipinjam atau dikonsultasikan oleh masyarakat umum. Perpustakaan berfungsi sebagai pusat informasi dan sumber pengetahuan yang penting dalam mendukung pembelajaran, penelitian, dan pengembangan individu. Di perpustakaan, pengguna dapat mengakses berbagai jenis literatur dan sumber daya informasi untuk memenuhi kebutuhan belajar, membaca, dan riset mereka. Perpustakaan menyediakan beragam kategori buku, seperti sastra, ilmu pengetahuan, sejarah, seni, teknologi, dan lain sebagainya, sehingga memungkinkan pengguna untuk memperluas pengetahuan dan mengeksplorasi minat mereka.</p>
        <p style="text-indent: 7%;">Selain itu, perpustakaan juga berperan dalam mengembangkan keterampilan literasi dan membantu masyarakat meningkatkan kemampuan membaca, menulis, dan berpikir kritis. Perpustakaan modern juga mengadopsi teknologi digital, menyediakan akses ke e-book, database elektronik, jurnal online, dan sumber daya digital lainnya, sehingga memfasilitasi akses mudah ke informasi dalam format digital. Perpustakaan biasanya memiliki sistem peminjaman dan pengembalian buku, serta layanan referensi dan penelitian, seperti bantuan dalam mencari informasi, mengakses database, dan membantu dalam kegiatan riset. Selain itu, perpustakaan sering kali menyelenggarakan acara, seperti diskusi buku, ceramah, lokakarya, dan pameran, untuk mempromosikan budaya literasi dan mendukung pembelajaran komunitas.</p>
        <p>Dalam masyarakat, perpustakaan memiliki peran penting dalam menghubungkan individu dengan pengetahuan, memfasilitasi pembelajaran sepanjang hayat, dan memajukan kehidupan intelektual dan sosial.</p>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a short card.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection