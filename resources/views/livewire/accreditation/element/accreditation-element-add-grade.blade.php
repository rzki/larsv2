<div>
<!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <a href="{{ route('accreditations.standard.show', [$accreditations->acc_id, $bab->babId, $standard->standardId, $elements->elementId]) }}" wire:navigate class="btn btn-primary mb-3"><i class="mdi mdi-arrow-left"></i>
            Back</a>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Add Grade') }}</h2>
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
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label for="manual" class="form-label text-black fw-bold">SARS 22 Manual</label>
                                <input type="text" wire:model='manual' class="form-control @error('manual') is-invalid @enderror" name="manual" value="{{ $manual }}">
                                @error('manual')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label for="floating" class="form-label text-black fw-bold">SARS 22 Floating</label>
                                <input type="text" wire:model='floating' class="form-control @error('floating') is-invalid @enderror" name="floating" value="{{ $floating }}">
                                @error('floating')
                                <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label for="rounded" class="form-label text-black fw-bold">SARS 22 Rounded</label>
                                <input type="text" wire:model='rounded' class="form-control @error('rounded') is-invalid @enderror" name="rounded" value="{{ $rounded }}">
                                @error('rounded')
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
