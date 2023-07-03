<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
</head>
<body>
    <!-- include digunakan untuk menyertakan sebuah file kedalam script -->
    @include('layout.header')
    <!-- yield digunakan untuk menandai pada bagian itu akan ditempati potongan kode yang disebut section-->
    @yield('navbar')
    @yield('content')
    <footer class="fixed-bottom">
        @include('layout.footer')
    </footer>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>