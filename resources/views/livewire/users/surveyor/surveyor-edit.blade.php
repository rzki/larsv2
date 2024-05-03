<div>
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <a href="{{ route('surveyors.index') }}" wire:navigate class="btn btn-primary mb-3"><i
                class="mdi mdi-arrow-left"></i> Back</a>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Edit Surveyor') }}</h2>
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
            <form wire:submit="update">
                <div class="form-group mb-3">
                    <label for="no_induk" class="form-label text-black fw-bold">No Induk</label>
                    <input type="text" wire:model='no_induk'
                        class="form-control @error('no_induk') is-invalid @enderror" name="no_induk"
                        value="{{ $no_induk }}">
                    @error('no_induk')
                    <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="name" class="form-label text-black fw-bold">Nama</label>
                    <input type="text" wire:model='name' class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ $name }}">
                    @error('name')
                    <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="nik" class="form-label text-black fw-bold">NIK</label>
                    <input type="text" wire:model='nik' class="form-control @error('nik') is-invalid @enderror"
                        name="nik" value="{{ $nik }}">
                    @error('nik')
                    <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="jabatan" class="form-label text-black fw-bold">Jabatan</label>
                    <input type="text" wire:model='jabatan' class="form-control @error('jabatan') is-invalid @enderror"
                        name="jabatan" value="{{ $jabatan }}">
                    @error('jabatan')
                    <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="dinas" class="form-label text-black fw-bold">Dinas</label>
                    <input type="text" wire:model='dinas' class="form-control @error('dinas') is-invalid @enderror"
                        name="dinas" value="{{ $dinas }}">
                    @error('dinas')
                    <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="alamat" class="form-label text-black fw-bold">Alamat</label>
                    <textarea wire:model='alamat' class="form-control @error('alamat') is-invalid @enderror"
                        name="alamat">{{ $alamat }}</textarea>
                    @error('alamat')
                    <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="prov" class="form-label text-black fw-bold">Provinsi</label>
                    <select wire:model='prov' class="form-control @error('prov') is-invalid @enderror" name="prov">
                        @error('prov')
                        <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                        @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="kab" class="form-label text-black fw-bold">Kabupaten</label>
                    <select wire:model='kab' class="form-control @error('kab') is-invalid @enderror" name="kab">
                        @error('kab')
                        <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                        @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="kec" class="form-label text-black fw-bold">Kecamatan</label>
                    <select wire:model='kec' class="form-control @error('kec') is-invalid @enderror" name="kec">
                        @error('kec')
                        <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                        @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="kel" class="form-label text-black fw-bold">Kelurahan/Desa</label>
                    <select wire:model='kel' class="form-control @error('kel') is-invalid @enderror" name="kel">
                        @error('kel')
                        <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                        @enderror
                </div>
                <button type="submit" class="btn btn-success btn-block">Submit</button>
                <div class="form-group mb-3">
                    <label for="status" class="form-label text-black fw-bold">Status</label>
                    <select wire:model='status' class="form-control @error('status') is-invalid @enderror"
                    name="status">
                    @error('status')
                    <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                    @enderror
                </div>
                <div class="form-group d-grid">
                </div>
            </form>
        </div>
    </div>
</div>
</div>
