<div>
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Akreditasi') }}</h2>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a href="{{ route('accreditations.create') }}" wire:navigate class="btn btn-success"> <i
                        class="lni lni-circle-plus"></i> {{ __('Tambah Akreditasi') }}</a>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    <div class="card-styles">
        <div class="card-style-3 mb-30">
            {{-- Search --}}
            <div class="row">
                <div class="col-lg-6">
                    <input wire:model.live.debounce.250ms='search' type="text" name="search" id="search"
                        class="form-control mb-3 w-25" placeholder="Search...">
                </div>
                <div class="col-lg-6">
                </div>
            </div>
            <div class="card-content">
                <div class="table-wrapper table-responsive">
                    <table class="table table-responsive striped-table text-black">
                        <thead>
                            <tr>
                                <th scope="col" wire:click="sort('created_at')">
                                    <button
                                        class="d-flex align-items-center justify-content-center w-100 fw-bold btn text-center"
                                        style="">
                                        {{__('Tanggal')}}
                                        @if ($sortBy !== 'created_at')
                                        <span class="mdi mdi-unfold-more-horizontal"></span>
                                        @elseif ($sortDir === 'ASC')
                                        <span class="mdi mdi-chevron-up"></span>
                                        @else
                                        <span class="mdi mdi-chevron-down"></span>
                                        @endif
                                    </button>
                                </th>
                                <th scope="col" wire:click="sort('nama')">
                                    <button
                                        class="d-flex align-items-center justify-content-center w-100 fw-bold btn text-center"
                                        style="">
                                        {{__('Nama RS')}}
                                        @if ($sortBy !== 'nama')
                                        <span class="mdi mdi-unfold-more-horizontal"></span>
                                        @elseif ($sortDir === 'ASC')
                                        <span class="mdi mdi-chevron-up"></span>
                                        @else
                                        <span class="mdi mdi-chevron-down"></span>
                                        @endif
                                    </button>
                                </th>
                                {{-- <th scope="col" wire:click="sort('no_induk')">
                                    <button
                                        class="d-flex align-items-center justify-content-center w-100 fw-bold btn           text-center"
                                        style="">
                                        {{__('No Induk')}}
                                        @if ($sortBy !== 'no_induk')
                                        <span class="mdi mdi-unfold-more-horizontal"></span>
                                        @elseif ($sortDir === 'ASC')
                                        <span class="mdi mdi-chevron-up"></span>
                                        @else
                                        <span class="mdi mdi-chevron-down"></span>
                                        @endif
                                    </button>
                                </th> --}}
                                <th scope="col"class=" text-center">{{__('Deskripsi')}}</th>
                                <th scope="col" class=" text-center">{{__('No. Akreditasi')}}</th>
                                <th scope="col" class=" text-center">{{__('Lokasi')}}</th>
                                <th scope="col" class=" text-center">{{__('Jadwal Akreditasi')}}</th>
                                <th scope="col" class=" text-center">{{__('Status')}}</th>
                                <th scope="col" class=" text-center">{{__('Hasil')}}</th>
                                <th scope="col" class=" text-center">{{__('')}}</th>
                            </tr>
                            <!-- end table row-->
                        </thead>
                        <tbody>
                            @if ($accreditations->isEmpty())
                            <tr>
                                <td colspan="7" class="text-center">
                                    {{ __('Data tidak ditemukan') }}
                                </td>
                            </tr>
                            @else
                                @foreach ($accreditations as $acc)
                                    <tr class="text-center">
                                        <td>{{ date('d-m-Y', strtotime($acc->created_at)) }}</td>
                                        <td>{{ $acc->hospitals->nama }}</td>
                                        <td>{{ $acc->deskripsi }}</td>
                                        <td>{{ $acc->no_akreditasi }}</td>
                                        <td>{{ $acc->lokasi }}</td>
                                        <td>{{ date('d-m-Y', strtotime($acc->tgl_mulai)) }} - {{ date('d-m-Y', strtotime($acc->tgl_selesai)) }}</td>
                                        @if($acc->status == 'Tidak Terakreditasi')
                                        <td>
                                            <p class="badge rounded-pill bg-danger text-white">{{ $acc->status }}</p>
                                        </td>
                                        @elseif($acc->status == 'Terakreditasi')
                                        <td>
                                            <p class="badge rounded-pill bg-success text-white">{{ $acc->status }}</p>
                                        </td>
                                        @endif
                                        <td>
                                            <a href="{{ route('accreditations.show', $acc->acc_id) }}" wire:navigate class="btn btn-info mr-2"><i class="mdi mdi-eye"></i> View</a>
                                            <button class="btn btn-danger" wire:click.prevent="deleteConfirm('{{ $acc->acc_id }}')"><i class="mdi mdi-trash-can"></i> Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            <!-- end table row -->
                        </tbody>
                    </table>
                    <!-- end table -->
                    <div class="paginate">
                        <div class="d-flex align-items-center data-row">
                            <label class="text-black font-bold form-label me-3 mb-0">Per Page</label>
                            <select wire:model.live='perPage' class="form-control text-black per-page"
                                style="width: 5%">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        {{-- @if (!$hospitals->isEmpty())
                        {{ $hospitals->links() }}
                        @endif --}}
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

@script
<script>
    window.addEventListener('delete-confirmation', event => {
            Swal.fire({
                title: "Apakah anda yakin?",
                text: "Data akreditasi ini akan terhapus!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes"
            }).then((result) => {
                if (result.isConfirmed) {
                    $wire.dispatch('deleteConfirmed');
                }
            });
        })
</script>
@endscript

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
