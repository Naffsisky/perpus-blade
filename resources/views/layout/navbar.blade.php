<div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand mx-4" href="#">
                <img src="{{ asset('image/logo.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"> Perpustakaan Digital
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    @yield('navbar')
                </ul>
                    @yield('search')
                    <a class="btn" href="/home">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
            </div>
        </div>
    </nav>
    </br>
</div>