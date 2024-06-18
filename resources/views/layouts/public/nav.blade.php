    <nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light p-3">
        <div class="container-fluid navigation">
            <a href="{{ route('homepage') }}" class="navbar-logo">
                <img src="{{ asset('images/logo/logo_lars_long.png') }}" class="navbar-logo-img" width="75%" alt="" srcset="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#lars-navbar"
                aria-controls="lars-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="lars-navbar">
                <ul class="navbar-nav d-flex justify-content-center align-items-center">
                    <li class="nav-item">
                        <a class="nav-link m-auto mx-2 fw-bold text-uppercase  {{ request()->routeIs('homepage') ? 'active text-danger' : 'text-black' }}"
                            href="{{ route('homepage') }}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold text-uppercase" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ __('Tentang Kami') }}
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item fw-bold text-uppercase" href="#">{{ __('Visi & Misi') }}</a></li>
                            <li><a class="dropdown-item fw-bold text-uppercase" href="#">{{ __('Struktur Organisasi') }}</a></li>
                            <li><a class="dropdown-item fw-bold text-uppercase" href="#">{{ __('Surveior Penilai') }}</a></li>
                            <li><a class="dropdown-item fw-bold text-uppercase" href="#">{{ __('Surveior Pembimbing') }}</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold text-uppercase" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ __('Tentang Akreditasi') }}
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item fw-bold text-uppercase" href="#">{{ __('Kode Etik Surveior') }}</a></li>
                            <li><a class="dropdown-item fw-bold text-uppercase" href="#">{{ __('RS yang sudah Akreditasi') }}</a>
                            </li>
                            <li><a class="dropdown-item fw-bold text-uppercase" href="#">{{ __('Daftar Akreditasi') }}</a></li>
                            <li><a class="dropdown-item fw-bold text-uppercase" href="#">{{ __('Daftar Monev Perencanaan Perbaikan Strategis (PPS)') }}</a></li>
                            <li><a class="dropdown-item fw-bold text-uppercase" href="#">{{ __('Daftar Simulasi Akreditasi') }}</a></li>
                            <li><a class="dropdown-item fw-bold text-uppercase" href="#">Daftar Bimbingan</a></li>
                            <li><a class="dropdown-item fw-bold text-uppercase" href="#">{{ __('Cek Status Permohonan') }}</a>
                            </li>
                            <li><a class="dropdown-item fw-bold text-uppercase" href="#">{{ __('Tarif Bimbingan') }}</a></li>
                            <li><a class="dropdown-item fw-bold text-uppercase" href="#">{{ __('Simulasi Survei Akreditasi') }}</a></li>
                            <li><a class="dropdown-item fw-bold text-uppercase" href="#">{{ __('Survei Akreditasi') }}</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 fw-bold text-uppercase" href="#!">
                            {{ __('Publikasi') }}
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold text-uppercase" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ __('Berita & Galeri') }}
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item fw-bold text-uppercase" href="#">{{ __('Berita') }}</a></li>
                            <li><a class="dropdown-item fw-bold text-uppercase" href="#">{{ __('Galeri') }}</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 fw-bold text-uppercase" href="#!">
                            {{ __('Karir') }}
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold text-uppercase" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ __('Kontak & FAQ') }}
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item fw-bold text-uppercase" href="#">{{ __('Kontak') }}</a></li>
                            <li><a class="dropdown-item fw-bold text-uppercase" href="#">{{ __('FAQ') }}</a></li>
                            <li><a class="dropdown-item fw-bold text-uppercase" href="#">{{ __('Kritik & Saran') }}</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <div class="d-grid d-lg-none">
                            <button class="btn btn-primary text-uppercase" type="button">Login</button>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav d-sm-flex d-lg-none justify-content-center align-items-center">
                    <li class="nav-item">
                        <a class="nav-link m-auto mx-2" href="#!">
                            <i class="fas fa-plus-circle pe-2"></i>
                            <p class="">Home</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#!">
                            <i class="fas fa-bell pe-2"></i>
                            <p class="fs-2 ">Tentang Kami</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#!">
                            <i class="fas fa-heart pe-2"></i>
                            <p class="fs-2 ">Akreditasi</p>
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
                <a href="https://www.instagram.com/lars.or.id" target="_blank">
                <i class="fab fa-instagram text-black"></i></a>
            </div>
        </div>
    </nav>
