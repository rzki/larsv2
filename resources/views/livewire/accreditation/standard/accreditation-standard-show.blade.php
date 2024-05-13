<div>
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row mb-4">
            <div class="col">
                <a href="{{ route('accreditations.bab.show', [$accreditations->acc_id, $bab->babId]) }}" wire:navigate
                    class="btn btn-sm btn-primary"><i class="mdi mdi-arrow-left"></i> Back</a>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Detail Standar') }} <b>{{ $standards->nama }}</b></h2>
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
                            <th scope="col" style="width: 5em;">No</th>
                            <th scope="col">Nama Elemen</th>
                            <th scope="col" style="width: 12em;">SARS 22 Manual</th>
                            <th scope="col" style="width: 12em;">SARS 22 Floating</th>
                            <th scope="col" style="width: 12em;">SARS 22 Average</th>
                            <th scope="col">TDD</th>
                            <th scope="col" style="width: 10em;">Dinilai Oleh</th>
                            <th scope="col" style="width: 10em;"></th>
                        </thead>
                        <tbody>
                            @foreach ($elements as $element)
                                <tr>
                                    <td>{{ $loop->iteration }} </td>
                                    <td class="px-3">{{ $element->deskripsi }}</td>
                                    <td>@if ($element->sars_manual != null)
                                            {{ $element->sars_manual }}
                                        @else
                                            0.00
                                    @endif
                                </td>
                                    <td>
                                        @if ($element->sars_floating != null)
                                            {{ $element->sars_floating }}
                                        @else
                                            0.00
                                        @endif
                                    </td>
                                    <td>
                                        @if ($element->sars_rounded != null)
                                            {{ $element->sars_rounded }}
                                        @else
                                            0.00
                                        @endif
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="{{ route('accreditations.element.add-grade', [$accreditations->acc_id, $bab->babId, $standard->standardId, $element->elementId]) }}" class="btn btn-success"><i class="mdi mdi-plus"></i> Nilai</a>
                                        {{-- <a href="{{ route('accreditations.show', $acc->acc_id) }}" wire:navigate class="btn btn-info mr-2"><i class="mdi mdi-eye"></i> View</a> --}}
                                        {{-- <button class="btn btn-danger" wire:click.prevent="deleteConfirm('{{ $acc->acc_id }}')"><i class="mdi mdi-trash-can"></i> Delete</button> --}}
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
