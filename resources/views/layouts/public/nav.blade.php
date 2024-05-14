<nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light p-3">
    <div class="container-fluid navigation">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('images/logo/logo_lars.png') }}" class="logo-lars" alt="">
            <span>LARS</span>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link mx-2" href="#!"><i class="fas fa-plus-circle pe-2"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="#!"><i class="fas fa-bell pe-2"></i>Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="#!"><i class="fas fa-heart pe-2"></i>Akreditasi</a>
                </li>
            </ul>
        </div>
        <div class="buttons">
            <a href="{{ route('signin') }}" class="btn login">Login</a>
        </div>
    </div>
</nav>
