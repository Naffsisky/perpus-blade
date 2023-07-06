<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <style>
        html, body {
        margin:0;
        padding:0;
        height:100%;
        }

        .container {
        position:relative;
        min-height: 100%;
        }
        .footer{
            bottom: 0;
            width: 100%;
            position: fixed;
            height:50px;
            line-height:50px;
            background:#3c3a3a;
            color:#fff;
            padding-left: 10px;
        }
        .custom-card-img {
        width: auto;
        height: 400px;
        object-fit: cover;
        }
    </style>
    <!-- include digunakan untuk menyertakan sebuah file kedalam script -->
    @include('layout.header')
    @include('layout.navbar')
    <!-- yield digunakan untuk menandai pada bagian itu akan ditempati potongan kode yang disebut section-->
    @yield('content')
    <footer>
    </br>
        @include('layout.footer')
    </footer>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>