<div>
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row mb-4">
            <div class="col">
                <a href="{{ route('accreditations.index') }}" wire:navigate class="btn btn-sm btn-primary"><i
                        class="mdi mdi-arrow-left"></i> Back</a>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Detail Akreditasi') }} {{ $accreditations->hospitals->nama }}</h2>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->
</div>
