<div>
    {{-- Permohonan Akreditasi Rumah Sakit --}}
    <div class="row min-vh-50 py-5 px-5">
        <h2 class="text-uppercase fw-bold text-center pt-4 pb-5">Permohonan Akreditasi Rumah Sakit</h2>
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <a href="#" class="text-decoration-none permohonan-card">
                    <a href="{{ route('daftar-akreditasi') }}" class="text-decoration-none text-black">
                        <div class="card mb-4 mb-sm-4 mb-lg-0">
                            <div class="card-body daftar-akreditasi">
                                <i class="icon mdi mdi-file-document"></i>
                                <h3 class="card-title">Daftar Akreditasi</h3>
                            </div>
                        </div>
                    </a>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#" class="text-decoration-none">
                    <div class="card">
                        <div class="card-body cek-permohonan">
                            <i class="icon mdi mdi-magnify"></i>
                            <h3 class="card-title">Cek Permohonan</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- Statistik Akreditasi --}}
    <div class="row min-vh-50 py-5 px-5 bg-gray">
        <div class="row justify-content-center align-items-center">
            <div class="col">
                <h2 class="text-black text-center fw-bold text-uppercase pb-5">Statistik Akreditasi LARS
                </h2>
            </div>
        </div>
        {{-- Statistik --}}
        <div class="row justify-content-center align-items-center mb-5">
            <div class="col-lg-3">
                <div class="card mb-4 mb-sm-4 mb-lg-0">
                    <div class="card-header p-3 text-center text-black">
                        <h5>Total Pengajuan Akreditasi</h5>
                    </div>
                    <div class="card-body text-center text-black">
                        @if ($total_akreditasi > 0)
                            <h3 class="akreditasi-text fw-bold">{{ $total_akreditasi }} Rumah Sakit</h3>
                        @else
                            <h3 class="akreditasi-text fw-bold">0 Rumah Sakit</h3>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-4 mb-sm-4 mb-lg-0">
                    <div class="card-header p-3 text-center text-black">
                        <h5>Total Akreditasi</h5>
                    </div>
                    <div class="card-body text-center text-black">
                        @if ($total_akreditasi > 0)
                            <h3 class="akreditasi-text fw-bold">{{ $total_akreditasi }} Rumah Sakit</h3>
                        @else
                            <h3 class="akreditasi-text fw-bold">0 Rumah Sakit</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col text-center">
                <a href="https://www.kemkes.go.id/" target="__blank">
                    <img src="{{ asset('images/logo/logo-kemenkes_landscape.webp') }}" class="logo-kemkes"
                        alt="">
                </a>
            </div>
        </div>
    </div>
</div>
