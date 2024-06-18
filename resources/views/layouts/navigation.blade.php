<ul>
    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
        <a href="{{ route('home') }}" wire:navigate>
              <span class="icon">
                <i class="mdi mdi-view-dashboard"></i>
              </span>
            <span class="text">{{ __('Beranda') }}</span>
        </a>
    </li>
    <li class="nav-item {{ request()->routeIs('hospitals.index') ? 'active' : '' }}">
        <a href="{{ route('hospitals.index') }}" wire:navigate>
            <span class="icon">
                <i class="mdi mdi-hospital-box"></i>
            </span>
            <span class="text">{{ __('Rumah Sakit') }}</span>
        </a>
    </li>
    <li class="nav-item {{ request()->routeIs('accreditations.index') ? 'active' : '' }}">
        <a href="{{ route('accreditations.index') }}" wire:navigate>
            <span class="icon">
                <i class="mdi mdi-clipboard-edit"></i>
            </span>
            <span class="text">{{ __('Akreditasi') }}</span>
        </a>
    </li>
    <li class="nav-item nav-item-has-children {{ request()->routeIs('users.index') || request()->routeIs('surveyors.index') ? 'active' : '' }} or )">
        <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#users"
            aria-controls="users" aria-expanded="true" aria-label="Toggle navigation">
            <span class="icon">
                <i class="mdi mdi-account-group"></i>
            </span>
            <span class="text">{{ __('Pengguna') }}</span>
        </a>
        <ul id="users" class="dropdown-nav collapse" style="">
            <li>
                <a href="{{ route('users.index') }}" wire:navigate>All User</a>
            </li>
            <li>
                <a href="{{ route('surveyors.index') }}" wire:navigate>Surveyor</a>
            </li>
        </ul>
    </li>
    <li class="nav-item {{ request()->routeIs('roles.index') ? 'active' : '' }}">
        <a href="{{ route('roles.index') }}" wire:navigate>
            <span class="icon">
                <i class="mdi mdi-account-cog"></i>
            </span>
            <span class="text">{{ __('Roles') }}</span>
        </a>
    </li>

</ul>
