<div>
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row mb-4">
            <div class="col">
                <a href="{{ route('hospitals.index') }}" wire:navigate class="btn btn-sm btn-primary"><i
                        class="mdi mdi-arrow-left"></i> Back</a>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Detail Rumah Sakit') }}</h2>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-start">
                <div class="title mb-30">
                    @if ($hospitals->acc_status == 'Approved')
                        <p class="fs-6 px-3 py-2 text-white bg-success-700 border rounded">Registrasi Rumah Sakit telah di <b>approved</b></p>
                    @elseif($hospitals->acc_status == 'Pending')
                        <p class="fs-6 px-3 py-2 text-white bg-danger-700 border rounded">Data rumah sakit belum lengkap</p>
                    @endif
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    <div class="card-styles">
        <div class="card-style-3 mb-30">
            <div x-data="{ currentTab: 1 }">
                <div class="row mb-3">
                    <div class="d-flex justify-content-center text-center">
                        <div class="col-lg-4 d-grid" :class="{ 'bg-primary rounded-2': currentTab === 1 }">
                            <button href="#" class="btn btn-block fw-600 text-center"
                                :class="{ 'text-white': currentTab === 1 }"
                                x-on:click.prevent="currentTab = 1">{{ __('Profil') }}</button>
                        </div>
                        <div class="col-lg-4 d-grid" :class="{ 'bg-primary rounded-2': currentTab === 2 }">
                            <button href="#" class="btn fw-600 text-center"
                                :class="{ 'text-white': currentTab === 2 }"
                                x-on:click.prevent="currentTab = 2">{{ __('Alamat') }}</button>
                        </div>
                        <div class="col-lg-4 d-grid" :class="{ 'bg-primary rounded-2': currentTab === 3 }">
                            <button href="#" class="btn fw-600 text-center"
                                :class="{ 'text-white': currentTab === 3 }"x-on:click.prevent="currentTab = 3">{{ __('Direktur') }}</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    {{-- Profil RS --}}
                    <div x-show="currentTab === 1" x-cloak>
                        <div class="row">
                            <div class="col-lg-6">
                                <table class="table table-sm table-responsive">
                                    <tr>
                                        <td><p>Nomor Induk Rumah Sakit</p></td>
                                        <td>
                                            <p>{{ $hospitals->no_induk }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p>Nama Rumah Sakit</p></td>
                                        <td><p>{{ $hospitals->nama }}</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Jenis Rumah Sakit</p></td>
                                        <td><p>{{ $hospitals->jenis }}</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Kapasitas Rumah Sakit</p></td>
                                        <td><p>{{ $hospitals->kapasitas }}</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Kelas Rumah Sakit</p></td>
                                        <td><p>{{ $hospitals->kelas }}</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Unit Instalasi</p></td>
                                        <td><p>{{ $hospitals->unit_instalasi }}</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>No Telepon Rumah Sakit</p></td>
                                        <td><p>{{ $hospitals->no_telp }}</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Email Rumah Sakit</p></td>
                                        <td><p>{{ $hospitals->email }}</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Nomor Izin Berusaha</p></td>
                                        <td><p>{{ $hospitals->nib }}</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Nomor Izin Operasional</p></td>
                                        <td><p>{{ $hospitals->niop }}</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Berlaku Sampai</p></td>
                                        <td><p>{{ date('d-m-Y', strtotime($hospitals->masa_berlaku)) }}</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Status Akreditasi</p></td>
                                        <td>

                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- Alamat RS --}}
                    <div x-show="currentTab === 2" x-cloak>
                        <div class="row">
                            <div class="col">
                                <table class="table table-sm table-responsive">
                                    <tr>
                                        <td><p>Alamat</p></td>
                                        <td><p>{{ $hospitals->alamat }}</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Provinsi</p></td>
                                        <td><p>{{ $hospitals->provinsi->name }}</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Kabupaten</p></td>
                                        <td><p>{{ $hospitals->kabupaten->name }}</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Kecamatan</p></td>
                                        <td><p>{{ $hospitals->kecamatan->name }}</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Kelurahan</p></td>
                                        <td><p>{{ $hospitals->kelurahan->name }}</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Kode Pos</p></td>
                                        <td><p>{{ $hospitals->kode_pos }}</p></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div x-show="currentTab === 3" x-cloak>
                        <div class="row">
                            <div class="col">
                                <table class="table table-sm table-responsive">
                                    <tr>
                                        <td><p>Nama Direktur</p></td>
                                        <td><p>{{ $hospitals->nama_direktur }}</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Email direktur</p></td>
                                        <td><p>{{ $hospitals->email_direktur }}</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Nomor Telepon Direktur</p></td>
                                        <td><p>{{ $hospitals->notelp_direktur }}</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Divisi Direktur</p></td>
                                        <td><p>{{ $hospitals->divisi_direktur }}</p></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
