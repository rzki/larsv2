<header>
    <nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light p-3">
        <div class="container-fluid navigation">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('images/logo/logo_lars.png') }}" class="logo-lars" alt="">
                <span>LARS</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#lars-navbar" aria-controls="lars-navbar" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-lg-center" id="lars-navbar">
                <ul class="navbar-nav d-flex justify-content-center align-items-center">
                    <li class="nav-item">
                        <a class="nav-link m-auto mx-2" href="#!">
                            <i class="fas fa-plus-circle pe-2"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#!">
                            <i class="fas fa-bell pe-2"></i>
                            <p>Tentang Kami</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#!">
                            <i class="fas fa-heart pe-2"></i>
                            <p>Akreditasi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="d-grid d-lg-none">
                            <button class="btn btn-primary" type="button">Login</button>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav d-sm-flex d-lg-none justify-content-center align-items-center">
                    <li class="nav-item">
                        <a class="nav-link m-auto mx-2" href="#!">
                            <i class="fas fa-plus-circle pe-2"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#!">
                            <i class="fas fa-bell pe-2"></i>
                            <p class="fs-2">Tentang Kami</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#!">
                            <i class="fas fa-heart pe-2"></i>
                            <p class="fs-2">Akreditasi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <div class="d-grid d-lg-none">
                            <button class="btn btn-primary" type="button">Login</button>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="buttons d-none d-lg-block">
                <a href="{{ route('signin') }}" class="btn login">Login</a>
            </div>
        </div>
    </nav>
</header>
