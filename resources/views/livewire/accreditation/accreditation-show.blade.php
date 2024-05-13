<div>
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row mb-4">
            <div class="col">
                <a href="{{ route('accreditations.index') }}" wire:navigate class="btn btn-sm btn-primary"><i class="mdi mdi-arrow-left"></i> Back</a>
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

    {{-- Dropdown --}}
    <div class="row mb-2">
        <div class="card-styles">
            <div class="card-style-3 d-grid mb-30">
                <button class="btn d-flex justify-content-between fs-5 text-start fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#daftarSurveyorDropdown" aria-expanded="false" aria-controls="daftarSurveyorDropdown" aria-expanded="false">Daftar Surveyor <i class="mdi mdi-chevron-down text-end"></i></button>
                <div class="collapse" id="daftarSurveyorDropdown">
                    <div class="card card-body border-0 mt-3">
                        <div class="table-wrapper">
                            <table class="table striped-table text-black table-responsive">
                                <thead>
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col" class="text-center">Nama Surveyor</th>
                                    <th scope="col" class="text-center">Jabatan</th>
                                    <th scope="col"></th>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Table --}}
    <div class="row">
        <div class="card-styles">
            <div class="card-style-3">
                <div class="table-wrapper">
                    <table class="table striped-table text-black table-responsive text-center">
                        <thead>
                            <th scope="col">No</th>
                            <th scope="col">Nama Bab</th>
                            <th scope="col" style="width: 15em;">SARS 22 Manual</th>
                            <th scope="col" style="width: 15em;">SARS 22 Floating</th>
                            <th scope="col" style="width: 15em;">SARS 22 Average</th>
                            <th scope="col">TDD</th>
                            <th scope="col"></th>
                        </thead>
                        <tbody>
                            @foreach ($bab as $b)
                                <tr>
                                    <td>{{ $loop->iteration }} </td>
                                    <td>{{ $b->nama }} ({{ $b->kode }})</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="{{ route('accreditations.bab.show', [$accreditations->acc_id, $b->babId]) }}" wire:navigate class="btn btn-info mr-2"><i class="mdi mdi-eye"></i> View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
