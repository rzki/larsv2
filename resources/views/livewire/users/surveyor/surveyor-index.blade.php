<div>
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Surveyors') }}</h2>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a href="{{ route('surveyors.create') }}" wire:navigate class="btn btn-success"> <i
                        class="lni lni-circle-plus"></i> Create New Surveyors</a>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    <div class="card-styles">
        <div class="card-style-3 mb-30">
            <div class="card-content">
                <div class="table-wrapper table-responsive">
                    <table class="table striped-table text-black">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">{{__('Nama')}}</th>
                                <th scope="col">{{__('No Induk')}}</th>
                                <th scope="col">{{__('Jabatan')}}</th>
                                <th scope="col">{{__('Dinas')}}</th>
                                <th scope="col">{{__('Status')}}</th>
                                <th scope="col">{{__('Action')}}</th>
                            </tr>
                            <!-- end table row-->
                        </thead>
                        <tbody>
                            @foreach($surveyors as $surveyor)
                            <tr class="text-center">
                                <td><p class="text-black">{{ $surveyor->name }}</p></td>
                                <td><p class="text-black">{{ $surveyor->no_induk }}</p></td>
                                <td><p class="text-black">{{ $surveyor->jabatan }}</p></td>
                                <td><p class="text-black">{{ $surveyor->dinas }}</p></td>
                                <td><p class="text-black">{{ $surveyor->status }}</p></td>
                                <td>
                                    <a href="{{ route('surveyors.edit', $surveyor->userId) }}" wire:navigate class="btn btn-primary mr-2"><i class="mdi mdi-square-edit-outline"></i> Edit</a>
                                    <button class="btn btn-danger" wire:click.prevent="deleteConfirm('{{ $surveyor->userId }}')"><i class="mdi mdi-trash-can"></i> Delete</button>
                                </td>
                            </tr>
                            @endforeach
                            <!-- end table row -->
                        </tbody>
                    </table>
                    <!-- end table -->
                    <div class="paginate">
                        {{-- {{ $surveyors->links() }} --}}
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
                title: "Are you sure?",
                text: "This surveyor will be deleted!",
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
