<ul>
    <li class="nav-item @if(request()->routeIs('home')) active @endif">
        <a href="{{ route('home') }}" wire:navigate>
              <span class="icon">
                <i class="mdi mdi-view-dashboard"></i>
              </span>
            <span class="text">{{ __('Beranda') }}</span>
        </a>
    </li>
    <li class="nav-item @if(request()->routeIs('hospitals.index')) active @endif">
        <a href="{{ route('hospitals.index') }}" wire:navigate>
            <span class="icon">
                <i class="mdi mdi-hospital-box"></i>
            </span>
            <span class="text">{{ __('Rumah Sakit') }}</span>
        </a>
    </li>
    <li class="nav-item nav-item-has-children @if(request()->routeIs('users.index') or request()->routeIs('surveyors.index')) active @endif">
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
    <li class="nav-item @if(request()->routeIs('roles.index')) active @endif">
        <a href="{{ route('roles.index') }}" wire:navigate>
            <span class="icon">
                <i class="mdi mdi-account-cog"></i>
            </span>
            <span class="text">{{ __('Roles') }}</span>
        </a>
    </li>

</ul>
