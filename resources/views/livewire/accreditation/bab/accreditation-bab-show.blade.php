<div>
<!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row mb-4">
            <div class="col">
                <a href="{{ route('accreditations.show', $accreditations->acc_id) }}" wire:navigate class="btn btn-sm btn-primary"><i
                        class="mdi mdi-arrow-left"></i> Back</a>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Detail Bab') }} <b>{{ $bab->nama }}</b></h2>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

{{-- Table --}}
    <div class="row">
        <div class="card-styles">
            <div class="card-style-3">
                <div class="table-wrapper">
                    <table class="table striped-table text-black table-responsive text-center">
                        <thead>
                            <th scope="col">No</th>
                            <th scope="col">Nama Standar</th>
                            <th scope="col" style="width: 15em;">SARS 22 Manual</th>
                            <th scope="col" style="width: 15em;">SARS 22 Floating</th>
                            <th scope="col" style="width: 15em;">SARS 22 Rounded</th>
                            <th scope="col">TDD</th>
                            <th scope="col"></th>
                        </thead>
                        <tbody>
                            @foreach ($standards as $standard)
                            <tr>
                                <td>{{ $loop->iteration }} </td>
                                <td>{{ $standard->nama }}</td>
                                <td>{{ $standard->elements->sum('sars_manual') / $standard->elements->count() * 10 }}%</td>
                                <td>{{ $standard->elements->sum('sars_floating')/ $standard->elements->count() * 10 }}%</td>
                                <td>{{ $standard->elements->sum('sars_rounded')/ $standard->elements->count() * 10 }}%</td>
                                <td></td>
                                <td>
                                    <a href="{{ route('accreditations.standard.show', [$accreditations->acc_id, $bab->babId, $standard->standardId]) }}" wire:navigate class="btn btn-info mr-2"><i class="mdi mdi-eye"></i> View</a>
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
