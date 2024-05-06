<div>
<!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <a href="{{ route('hospitals.index') }}" wire:navigate class="btn btn-primary mb-3"><i class="mdi mdi-arrow-left"></i>
            Back</a>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Tambah Rumah Sakit') }}</h2>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->
    <div class="card-styles">
        <div class="card-style-3 mb-30">
            <div class="card-content">
                <form wire:submit="create">
                    <h4 class="fw-bold text-center mb-5">{{ __('Data Rumah Sakit') }}</h4>
                    <div class="row">
                        {{-- Data Rumah Sakit --}}
                        <div class="col-lg-6">
                            {{-- Nama --}}
                            <div class="form-group mb-3">
                                <label for="nama" class="form-label text-black fw-bold text-capitalize">{{ __('nama') }}</label>
                                <input type="text" wire:model='nama' class="form-control @error('nama') is-invalid @enderror" name="nama">
                                @error('nama')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- No Induk --}}
                            <div class="form-group mb-3">
                                <label for="no_induk" class="form-label text-black fw-bold text-capitalize">{{ __('no induk') }}</label>
                                <input type="text" wire:model='no_induk' class="form-control @error('no_induk') is-invalid @enderror" name="no_induk">
                                @error('no_induk')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- Jenis Rumah Sakit --}}
                            <div class="form-group mb-3">
                                <label for="jenis" class="form-label text-black fw-bold text-capitalize">{{ __('jenis rumah sakit') }}</label>
                                <select name="jenis" id="jenis" class="form-control" wire:model='jenis'>
                                    <option value="">Pilih salah satu</option>
                                    <option value="Rumah Sakit Umum">{{ __('Rumah Sakit Umum') }}</option>
                                    <option value="Rumah Sakit Khusus">{{ __('Rumah Sakit Khusus') }}</option>
                                </select>
                                @error('jenis')
                                    <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- Kapasitas Rumah Sakit --}}
                            <div class="form-group mb-3">
                                <label for="kapasitas" class="form-label text-black fw-bold text-capitalize">{{ __('kapasitas rumah sakit') }}</label>
                                <input type="text" wire:model='kapasitas' class="form-control @error('kapasitas') is-invalid @enderror" name="kapasitas">
                                @error('kapasitas')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- Kelas Rumah Sakit --}}
                            <div class="form-group mb-3">
                                <label for="kelas" class="form-label text-black fw-bold text-capitalize">{{ __('kelas rumah sakit') }}</label>
                                <input type="text" wire:model='kelas' class="form-control @error('kelas') is-invalid @enderror" name="kelas">
                                @error('kelas')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- Unit Instalasi --}}
                            <div class="form-group mb-3">
                                <label for="unit_instalasi" class="form-label text-black fw-bold text-capitalize">{{ __('unit instalasi rumah sakit') }}</label>
                                <input type="text" wire:model='unit_instalasi' class="form-control @error('unit_instalasi') is-invalid @enderror" name="unit_instalasi">
                                @error('unit_instalasi')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- No Telp Rumah Sakit --}}
                            <div class="form-group mb-3">
                                <label for="no_telp" class="form-label text-black fw-bold text-capitalize">{{ __('no telepon rumah sakit') }}</label>
                                <input type="text" wire:model='no_telp' class="form-control @error('no_telp') is-invalid @enderror" name="no_telp">
                                @error('no_telp')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- Email Rumah Sakit --}}
                            <div class="form-group mb-3">
                                <label for="email" class="form-label text-black fw-bold text-capitalize">{{ __('email rumah sakit') }}</label>
                                <input type="text" wire:model='email' class="form-control @error('email') is-invalid @enderror" name="email">
                                @error('email')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- Nomor Izin Berusaha (NIB) Rumah Sakit --}}
                            <div class="form-group mb-3">
                                <label for="nib" class="form-label text-black fw-bold text-capitalize">{{ __('nomor izin berusaha') }}</label>
                                <input type="text" wire:model='nib' class="form-control @error('nib') is-invalid @enderror" name="nib">
                                @error('nib')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- Nomor Izin Operasional (NIOP) Rumah Sakit --}}
                            <div class="form-group mb-3">
                                <label for="niop" class="form-label text-black fw-bold text-capitalize">{{ __('nomor izin operasional') }}</label>
                                <input type="text" wire:model='niop' class="form-control @error('niop') is-invalid @enderror" name="niop">
                                @error('niop')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- Masa Berlaku --}}
                            <div class="form-group mb-3">
                                <label for="masa_berlaku" class="form-label text-black fw-bold text-capitalize">{{ __('berlaku sampai') }}</label>
                                <input type="text" wire:model='masa_berlaku' class="form-control @error('masa_berlaku') is-invalid @enderror" name="masa_berlaku">
                                @error('masa_berlaku')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- Status --}}
                            <div class="form-group mb-3">
                                <label for="acc_status" class="form-label text-black fw-bold text-capitalize">{{ __('status') }}</label>
                                <input type="text" wire:model='acc_status' class="form-control @error('acc_status') is-invalid @enderror" name="acc_status">
                                @error('acc_status')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            {{-- Alamat Lengkap --}}
                            <div class="form-group mb-3">
                                <label for="alamat" class="form-label text-black fw-bold text-capitalize">{{ __('alamat') }}</label>
                                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" cols="30" rows="5" wire:model='alamat'></textarea>
                                @error('alamat')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- Provinsi --}}
                            <div class="form-group mb-3">
                                <label for="prov_id" class="form-label text-black fw-bold text-capitalize">{{ __('provinsi') }}</label>
                                <select name="prov_id" id="prov_id" class="form-control @error('prov_id') is-invalid @enderror">
                                    <option value="">Pilih salah satu</option>
                                </select>
                                @error('prov_id')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- Kabupaten --}}
                            <div class="form-group mb-3">
                                <label for="kab_id" class="form-label text-black fw-bold text-capitalize">{{ __('kabupaten') }}</label>
                                <select name="kab_id" id="kab_id" class="form-control @error('kab_id') is-invalid @enderror">
                                    <option value="">Pilih salah satu</option>
                                </select>
                                @error('kab_id')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- Kecamatan --}}
                            <div class="form-group mb-3">
                                <label for="kec_id" class="form-label text-black fw-bold text-capitalize">{{ __('kecamatan') }}</label>
                                <select name="kec_id" id="kec_id" class="form-control @error('kec_id') is-invalid @enderror">
                                    <option value="">Pilih salah satu</option>
                                </select>
                                @error('kec_id')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- Kelurahan --}}
                            <div class="form-group mb-3">
                                <label for="kel_id" class="form-label text-black fw-bold text-capitalize">{{ __('kabupaten') }}</label>
                                <select name="kel_id" id="kel_id" class="form-control @error('kel_id') is-invalid @enderror">
                                    <option value="">Pilih salah satu</option>
                                </select>
                                @error('kel_id')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- Kode Pos --}}
                            <div class="form-group mb-3">
                                <label for="kode_pos" class="form-label text-black fw-bold text-capitalize">{{ __('kode pos rumah sakit') }}</label>
                                <input type="text" wire:model='kode_pos' class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos">
                                @error('kode_pos')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- Nama Direktur --}}
                            <div class="form-group mb-3">
                                <label for="nama_direktur" class="form-label text-black fw-bold text-capitalize">{{ __('nama direktur') }}</label>
                                <input type="text" wire:model='nama_direktur' class="form-control @error('nama_direktur') is-invalid @enderror" name="nama_direktur">
                                @error('nama_direktur')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- Email Direktur --}}
                            <div class="form-group mb-3">
                                <label for="email_direktur" class="form-label text-black fw-bold text-capitalize">{{ __('email direktur') }}</label>
                                <input type="text" wire:model='email_direktur' class="form-control @error('email_direktur') is-invalid @enderror" name="email_direktur">
                                @error('email_direktur')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- Nomor Telepon Direktur --}}
                            <div class="form-group mb-3">
                                <label for="notelp_direktur" class="form-label text-black fw-bold text-capitalize">{{ __('nomor telp direktur') }}</label>
                                <input type="text" wire:model='notelp_direktur' class="form-control @error('notelp_direktur') is-invalid @enderror" name="notelp_direktur">
                                @error('notelp_direktur')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- Divisi Direktur --}}
                            <div class="form-group mb-3">
                                <label for="divisi_direktur" class="form-label text-black fw-bold text-capitalize">{{ __('divisi direktur') }}</label>
                                <input type="text" wire:model='divisi_direktur' class="form-control @error('divisi_direktur') is-invalid @enderror" name="divisi_direktur">
                                @error('divisi_direktur')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- Foto Rumah Sakit --}}
                            <div class="form-group mb-3">
                                <label for="img" class="form-label text-black fw-bold text-capitalize">{{ __('foto rumah sakit') }}</label>
                                <input type="file" wire:model='img' class="form-control @error('img') is-invalid @enderror" name="img">
                                @error('img')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
