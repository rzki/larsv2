<div>
    {{-- Hero --}}
    <section id="hero">
        <div class="container-fluid hero-lars">
            <div class="row min-vh-50 py-5 px-5">
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <h2 class="fs-5 hero-text inter text-uppercase">{{ __('Selamat Datang di LARS') }}</h2>
                    <br>
                    <h1 class="hero-text inter text-uppercase">Lembaga Akreditasi Rumah Sakit</h1>
                </div>
            </div>
        </div>
    </section>
    {{-- Tentang Kami --}}
    <section id="about-us">
        <div class="container py-5">
            <div class="row gx-5 min-vh-50 p-5">
                <h2 class="fs-3 hero-text inter text-uppercase text-light-red text-center">{{ __('Tentang Kami') }}
                </h2>
                <div class="col-lg-6">
                    <p class="inter text-justify"><b>Lembaga Akreditasi Rumah Sakit (LARS)</b>
                        {{ __('adalah lembaga profesional, independen dan nirlaba yang berbasis sistem interkoneksi digital dan komunitas, yang mendapat mandat Kementerian Kesehatan Republik Indonesia sebagai Lembaga Independen Penyelenggara Akreditasi Rumah Sakit di Indonesia melalui Keputusan Menteri Kesehatan Republik Indonesia Nomor HK. 01.07/MENKES/6604/2021 tentang Lembaga Independen Penyelenggara Akreditasi Rumah Sakit. LARS dalam hubungan internasional diperkenalkan dengan nama: “Indonesian Hospital Accreditation Bodies” yang dapat disingkat menjadi "IHAB".') }}
                    </p>
                    <div class="d-grid">
                        <a href="#" class="btn btn-primary inter">{{ __('Selengkapnya') }} <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/3.jpeg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    {{-- Layanan --}}
    <section id="services" class=" py-5 bg-light-grey">
        <div class="container py-5 text-center">
            <h2 class="text-uppercase fs-5 inter text-light-red">{{ __('Layanan') }}</h2>
            <h1 class="text-uppercase fs-2 fw-bold inter text-blackish">{{ __('Produk & Layanan') }}</h1>
            <div class="container pt-4">
                <div class="row">
                    <div class="col-lg-4">
                        {{-- Akreditasi Card --}}
                        <div class="card border-1 rounded-3">
                            <img src="{{ asset('images/1.jpeg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title inter fw-bold text-blackish text-uppercase py-3">{{ __('Akreditasi') }}
                                </h5>
                                <p class="card-text inter text-blackish text-justify px-2">
                                    {{ __('LARS membantu fasilitas kesehatan untuk menerapkan standar mutu pelayanan dan fasilitas Rumah Sakit melalui proses Akreditasi bertaraf Nasional & Internasional.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        {{-- Bimbingan Card --}}
                        <div class="card rounded-3">
                            <img src="{{ asset('images/2.jpeg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title inter fw-bold text-blackish text-uppercase py-3">{{ __('Bimbingan') }}
                                </h5>
                                <p class="card-text inter text-blackish text-justify px-2">
                                    {{ __('Selain akreditasi, kami juga memberikan layanan berupa bimbingan untuk Rumah Sakit agar dapat menjalani proses akreditasi dengan lebih mudah dan optimal.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        {{-- Survei Card --}}
                        <div class="card rounded-3">
                            <img src="{{ asset('images/hero-lars.jpeg') }}" class="survey-card-image" alt="...">
                            <div class="card-body">
                                <h5 class="card-title inter fw-bold text-blackish text-uppercase py-3">
                                    {{ __('Survei & Simulasi') }}</h5>
                                <p class="card-text inter text-blackish text-justify px-2">
                                    {{ __('Merupakan layanan utama kami dengan didukung oleh surveior kami yang sudah terverifikasi, berpengalaman, dan profesional di bidangnya.') }}
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Permohonan Akreditasi Rumah Sakit --}}
    <section id="register">
        <div class="container-fluid">
            <div class="row min-vh-25 p-5">
                <h2 class="inter text-uppercase fw-bold text-center py-4 text-light-grey">{{ __('Permohonan Akreditasi Rumah Sakit') }}
                </h2>
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <a href="#" class="text-decoration-none permohonan-card">
                            <a href="{{ route('daftar-akreditasi') }}" class="text-decoration-none text-blackish">
                                <div class="card mb-4 mb-sm-4 mb-lg-0">
                                    <div class="card-body daftar-akreditasi">
                                        {{-- <i class="icon fas fa-file py-5"></i> --}}
                                        <h3 class="inter card-title">{{ __('Daftar Akreditasi') }}</h3>
                                    </div>
                                </div>
                            </a>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="#" class="text-decoration-none">
                            <div class="card">
                                <div class="card-body cek-permohonan">
                                    {{-- <i class="icon fas fa-magnifying-glass py-5"></i> --}}
                                    <h3 class="inter card-title">{{ __('Cek Permohonan Akreditasi') }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            {{-- Statistik Akreditasi --}}
            <div class="row min-vh-25 p-5 bg-gray">
                <div class="row justify-content-center align-items-center">
                    <div class="col">
                        <h2 class="inter text-light-grey text-center fw-bold text-uppercase pb-5">
                            {{ __('Statistik Akreditasi LARS') }}
                        </h2>
                    </div>
                </div>
                {{-- Statistik --}}
                <div class="row justify-content-center align-items-center mb-5">
                    <div class="col-lg-3">
                        <div class="card mb-4 mb-sm-4 mb-lg-0">
                            <div class="inter card-header p-3 text-center text-blackish">
                                <h5 class="inter fw-bold">{{ __('Total Pengajuan Akreditasi') }}</h5>
                            </div>
                            <div class="card-body text-center text-blackish">
                                @if ($total_akreditasi > 0)
                                    <h3 class="inter text-blackish fw-bold">{{ $total_akreditasi }}
                                        {{ __('Rumah Sakit') }}
                                    </h3>
                                @else
                                    <h3 class="inter text-blackish fw-bold">{{ __('0 Rumah Sakit') }}</h3>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card mb-4 mb-sm-4 mb-lg-0">
                            <div class="card-header p-3 text-center text-blackish">
                                <h5 class="inter fw-bold">{{ __('Total Akreditasi') }}</h5>
                            </div>
                            <div class="card-body text-center text-blackish">
                                @if ($total_akreditasi > 0)
                                    <h3 class="inter text-blackish fw-bold">{{ $total_akreditasi }} {{ __('Rumah Sakit') }}</h3>
                                @else
                                    <h3 class="inter text-blackish fw-bold">{{ __('0 Rumah Sakit') }}</h3>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
