<div>
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <a href="{{ route('users.index') }}" wire:navigate class="btn btn-primary mb-3"><i
                class="mdi mdi-arrow-left"></i> Back</a>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Create New User') }}</h2>
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
                <form wire:submit="create">
                    <div class="form-group mb-3">
                        <label for="name" class="form-label text-black fw-bold">Name</label>
                        <input type="text" wire:model='name' class="form-control @error('name') is-invalid @enderror"
                            name="name">
                        @error('name')
                        <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label text-black fw-bold">Email</label>
                        <input type="text" wire:model='email' class="form-control @error('email') is-invalid @enderror"
                            name="email">
                        @error('email')
                        <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label text-black fw-bold">Password</label>
                        <input type="password" wire:model='password'
                            class="form-control @error('password') is-invalid @enderror" name="password">
                        @error('password')
                        <div class="alert alert-danger mt-2">{{ __($message) }}</div>
                        @enderror
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
