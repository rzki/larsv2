<div>
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Users') }}</h2>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a href="{{ route('users.create') }}" wire:navigate class="btn btn-success"> <i class="lni lni-circle-plus"></i> Create New User</a>
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
                        <thead>
                            <tr>
                                <th>
                                    <h6>Name</h6>
                                </th>
                                <th>
                                    <h6>Email</h6>
                                </th>
                                <th>
                                    <h6>Action</h6>
                                </th>
                            </tr>
                            <!-- end table row-->
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>
                                    <p class=" text-black">{{ $user->name }}</p>
                                </td>
                                <td>
                                    <p class=" text-black">{{ $user->email }}</p>
                                </td>
                                <td>
                                    <a href="{{ route('users.edit', $user->userId) }}" class="btn btn-primary mr-2"><i class="mdi mdi-square-edit-outline"></i> Edit</a>
                                    <button class="btn btn-danger" wire:click="delete('{{ $user->userId }}')" wire:confirm='Are you sure want to delete this user?'><i class="mdi mdi-trash-can"></i> Delete</button>
                                </td>
                            </tr>
                            @endforeach
                            <!-- end table row -->
                        </tbody>
                    </table>
                    <!-- end table -->

                    {{-- {{ $users->links() }} --}}
                </div>

            </div>
        </div>
    </div>
</div>
