<div>
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Rumah Sakit') }}</h2>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a href="{{ route('hospitals.create') }}" wire:navigate class="btn btn-success"> <i
                        class="lni lni-circle-plus"></i> {{ __('Tambah Rumah Sakit') }}</a>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    <div class="card-styles">
        <div class="card-style-3 mb-30">
            <div class="row mb-3">
                <div class="col">
                    <div class="d-flex mb-3">
                        <button class="btn btn-outline-dark" type="button" data-bs-toggle="collapse"
                            data-bs-target="#filterDropdown" aria-expanded="false" aria-controls="filterDropdown">
                            Filter
                        </button>
                    </div>
                    <div class="collapse" id="filterDropdown">
                        <div class="card card-body border-0">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="text-center status-filter me-3">
                                        <label for="filterStatus"
                                            class="form-label text-black fw-500">{{ __('Status') }}</label>
                                        <select wire:model.live='filterStatus' name="filterStatus" id="filterStatus"
                                            class="form-control w-100">
                                            <option value="">Semua</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Approved">Approved</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="text-center kelas-filter">
                                        <label for="filterKelas"
                                            class="form-label text-black fw-500">{{ __('Kelas') }}</label>
                                        <select wire:model.live='filterKelas' name="filterKelas" id="filterKelas"
                                            class="form-control w-100">
                                            <option value="">Semua</option>
                                            <option value="Kelas A">Kelas A</option>
                                            <option value="Kelas B">Kelas B</option>
                                            <option value="Kelas C">Kelas C</option>
                                            <option value="Kelas D">Kelas D</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">

                                </div>
                                <div class="col-lg-3">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Sort & Search --}}
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
                                        {{ __('Tanggal') }}
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
                                        {{ __('Nama') }}
                                        @if ($sortBy !== 'nama')
                                            <span class="mdi mdi-unfold-more-horizontal"></span>
                                        @elseif ($sortDir === 'ASC')
                                            <span class="mdi mdi-chevron-up"></span>
                                        @else
                                            <span class="mdi mdi-chevron-down"></span>
                                        @endif
                                    </button>
                                </th>
                                <th scope="col" wire:click="sort('no_induk')">
                                    <button
                                        class="d-flex align-items-center justify-content-center w-100 fw-bold btn text-center"
                                        style="">
                                        {{ __('No Induk') }}
                                        @if ($sortBy !== 'no_induk')
                                            <span class="mdi mdi-unfold-more-horizontal"></span>
                                        @elseif ($sortDir === 'ASC')
                                            <span class="mdi mdi-chevron-up"></span>
                                        @else
                                            <span class="mdi mdi-chevron-down"></span>
                                        @endif
                                    </button>
                                </th>
                                <th scope="col" class=" text-center">{{ __('Lokasi') }}</th>
                                <th scope="col" class=" text-center">{{ __('Kelas') }}</th>
                                <th scope="col" class=" text-center">{{ __('Status') }}</th>
                                <th scope="col" class=" text-center">{{ __('Action') }}</th>
                            </tr>
                            <!-- end table row-->
                        </thead>
                        <tbody>
                            @if ($hospitals->isEmpty())
                                <tr>
                                    <td colspan="7" class="text-center">
                                        {{ __('Data tidak ditemukan') }}
                                    </td>
                                </tr>
                            @else
                                @foreach ($hospitals as $hospital)
                                    <tr class="text-center">
                                        <td>{{ date('d-m-Y', strtotime($hospital->created_at)) }}</td>
                                        <td>{{ $hospital->nama }}</td>
                                        <td>{{ $hospital->no_induk }}</td>
                                        <td>{{ optional($hospital->kabupaten)->name ?? null }}</td>
                                        <td>{{ $hospital->kelas }}</td>
                                        @if ($hospital->acc_status == null)
                                            <td>
                                                {{ __('') }}
                                            </td>
                                        @elseif ($hospital->acc_status == 'Pending')
                                            <td>
                                                <p class="badge rounded-pill bg-danger text-white">
                                                    {{ $hospital->acc_status }}</p>
                                            </td>
                                        @elseif($hospital->acc_status == 'Approved')
                                            <td>
                                                <p class="badge rounded-pill bg-success text-white">
                                                    {{ $hospital->acc_status }}</p>
                                            </td>
                                        @endif
                                        <td>
                                            <a href="{{ route('hospitals.show', $hospital->hospitalId) }}"
                                                wire:navigate class="btn btn-info mr-2"><i class="mdi mdi-eye"></i>
                                                View</a>
                                            <a href="{{ route('hospitals.edit', $hospital->hospitalId) }}"
                                                wire:navigate class="btn btn-primary mr-2"><i
                                                    class="mdi mdi-square-edit-outline"></i> Edit</a>
                                            <button class="btn btn-danger"
                                                wire:click.prevent="deleteConfirm('{{ $hospital->hospitalId }}')"><i
                                                    class="mdi mdi-trash-can"></i> Delete</button>
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
                        @if (!$hospitals->isEmpty())
                            {{ $hospitals->links() }}
                        @endif
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
                text: "Data rumah sakit ini akan terhapus!",
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
            const alerts = @json(session()->get('alert'));
            const title = alerts.title;
            const icon = alerts.type;
            const toast = alerts.toast;
            const position = alerts.position;
            const timer = alerts.timer;
            const progbar = alerts.progbar;
            const confirm = alerts.showConfirmButton;

            Swal.fire({
                title: title,
                icon: icon,
                toast: toast,
                position: position,
                timer: timer,
                timerProgressBar: progbar,
                showConfirmButton: confirm
            });
        </script>
    @endscript
@endif
