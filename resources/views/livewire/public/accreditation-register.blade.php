<div>
    <div class="min-vh-50">
        <div class="row py-5 px-5">
            <h2 class="text-uppercase fw-bold text-center pt-4 pb-5 pb-sm-5 pb-lg-0 mb-lg-5">Registrasi Akreditasi Rumah Sakit</h2>
            <div class="row justify-content-center">
                <div class="col-lg-4 border border-2 rounded-2 p-3">
                    <form wire:submit='register' enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="nirs" class="form-label fw-bold required">{{ __('Nomor Induk Rumah Sakit (Sesuai SIRS Online)') }}</label>
                            <input type="text" name="nirs" id="nirs" class="form-control" required wire:model='nirs'>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama" class="form-label fw-bold required">{{ __('Nama Rumah Sakit') }}</label>
                            <input type="text" name="nama" id="nama" class="form-control" required wire:model='nama'>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_direktur" class="form-label fw-bold required">{{ __('Nama Direktur') }}</label>
                            <input type="text" name="nama_direktur" id="nama_direktur" class="form-control" required wire:model='nama_direktur'>
                        </div>
                        <div class="form-group mb-3">
                            <label for="alamat" class="form-label fw-bold required">{{ __('Alamat') }}</label>
                            <textarea name="alamat" id="alamat" class="form-control" required wire:model='alamat'></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="no_hp" class="form-label fw-bold required">{{ __('No Handphone') }}</label>
                            <input type="text" name="no_hp" id="no_hp" class="form-control" required wire:model='no_hp'>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label fw-bold required">{{ __('Email') }}</label>
                            <input type="text" name="email" id="email" class="form-control" required wire:model='email'>
                        </div>
                        <div class="form-group mb-3">
                            <label for="surat_permohonan" class="form-label fw-bold required">{{ __('Surat Permohonan') }}</label>
                            <input type="file" name="surat_permohonan" id="surat_permohonan" class="form-control" wire:model='surat_permohonan'>
                        </div>
                        <div class="d-flex mb-3">
                            <input type="checkbox" name="s_k" id="s_k" class="me-3" required>
                            <span class="required">Dengan ini anda menyetujui bahwa data yang anda masukkan diatas akan disimpan ke dalam sistem kami dan hanya akan dipergunakan unutk keperluan menyangkut akreditasi.</span>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">{{ __('Submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if (session()->has('alert'))
@script
<script>
    const alerts    = @json(session()->get('alert'));
    const title     = alerts.title;
    const icon      = alerts.type;
    const toast     = alerts.toast;
    const position  = alerts.position;
    const timer     = alerts.timer;
    const progbar   = alerts.progbar;
    const confirm   = alerts.showConfirmButton;

    Swal.fire({
        title: title,
        icon: icon,
        toast: toast,
        position: position,
        timer: timer,
        timerProgressBar:progbar,
        showConfirmButton: confirm
    });
</script>
@endscript
@endif
