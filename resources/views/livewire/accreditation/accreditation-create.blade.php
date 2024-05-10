<div>
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <a href="{{ route('hospitals.index') }}" wire:navigate class="btn btn-primary mb-3"><i
                class="mdi mdi-arrow-left"></i>
            Back</a>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Tambah Akreditasi') }}</h2>
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
                    <h4 class="fw-bold text-center mb-5">{{ __('Data Akreditasi') }}</h4>
                    <div class="row">
                        {{-- Data Rumah Sakit --}}
                        <div class="col">
                            {{-- Rumah Sakit --}}
                            <div class="form-group mb-3">
                                <label for="hospital_id" class="form-label text-black fw-bold text-capitalize">{{ __('Nama Rumah Sakit')
                                    }}</label>
                                    <select name="hospital_id" id="hospital_id" wire:model.live='hospital_id' class="form-control @error('hospital_id') is-invalid @enderror">
                                        <option value="">Pilih salah satu</option>
                                        @foreach ($hospital as $h)
                                            <option value="{{ $h->id }}">{{ $h->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('hospital_id')
                                    <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                    @enderror
                            </div>
                            {{-- Deskripsi --}}
                            <div class="form-group mb-3">
                                <label for="deskripsi" class="form-label text-black fw-bold text-capitalize">{{ __('deskripsi') }}</label>
                                <input type="text" name="deskripsi" id="deskripsi" class="form-control" wire:model='deskripsi'>
                                    @error('deskripsi')
                                    <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                    @enderror
                            </div>
                            {{-- No Akreditasi --}}
                            <div class="form-group mb-3">
                                <label for="no_akreditasi" class="form-label text-black fw-bold text-capitalize">{{ __('no akreditasi') }}</label>
                                <input type="text" name="no_akreditasi" id="no_akreditasi" class="form-control" wire:model='no_akreditasi'>
                                @error('no_akreditasi')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- Lokasi --}}
                            <div class="form-group mb-3">
                                <label for="lokasi" class="form-label text-black fw-bold text-capitalize">{{ __('lokasi') }}</label>
                                <input type="text" name="lokasi" id="lokasi" class="form-control" wire:model.live='lokasi' value="{{ $lokasi }}">
                                @error('lokasi')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    {{-- Jadwal (Mulai) --}}
                                    <div class="form-group mb-3">
                                        <label for="tgl_mulai" class="form-label text-black fw-bold text-capitalize">{{ __('mulai') }}</label>
                                        <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control" wire:model='mulai'>
                                        @error('mulai')
                                        <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    {{-- Jadwal (Selesai) --}}
                                    <div class="form-group mb-3">
                                        <label for="selesai" class="form-label text-black fw-bold text-capitalize">{{ __('selesai') }}</label>
                                        <input type="date" name="selesai" id="selesai" class="form-control" wire:model='selesai'>
                                        @error('selesai')
                                        <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- Status --}}
                            <div class="form-group mb-3">
                                <label for="status" class="form-label text-black fw-bold text-capitalize">{{ __('status') }}</label>
                                <select name="status" id="status"
                                    class="form-control @error('status') is-invalid @enderror" wire:model='status'>
                                    <option value="">Pilih salah satu</option>
                                    <option value="Tidak Terakreditasi">Tidak Terakreditasi</option>
                                    <option value="Terakreditasi">Terakreditasi</option>
                                </select>
                                @error('status')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                            {{-- Hasil --}}
                            <div class="form-group mb-3">
                                <label for="hasil" class="form-label text-black fw-bold text-capitalize">{{ __('hasil') }}</label>
                                <select name="hasil" id="hasil"
                                    class="form-control @error('hasil') is-invalid @enderror" wire:model='hasil'>
                                    <option value="">Pilih salah satu</option>
                                    <option value="Paripurna">Paripurna</option>
                                    <option value="Utama">Utama</option>
                                    <option value="Madya">Madya</option>
                                    <option value="Tidak Terakreditasi">Tidak Terakreditasi</option>
                                </select>
                                @error('hasil')
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
