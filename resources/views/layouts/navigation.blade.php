<ul>
    <li class="nav-item @if(request()->routeIs('home')) active @endif">
        <a href="{{ route('home') }}" wire:navigate>
              <span class="icon">
                <i class="mdi mdi-view-dashboard"></i>
              </span>
            <span class="text">{{ __('Dashboard') }}</span>
        </a>
    </li>

    <li class="nav-item nav-item-has-children @if(request()->routeIs('users.index')) active @endif">
        <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#users"
            aria-controls="users" aria-expanded="true" aria-label="Toggle navigation">
            <span class="icon">
                <i class="mdi mdi-account-group"></i>
            </span>
            <span class="text">Users</span>
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
    <li class="nav-item nav-item-has-children">
        <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#hospitals"
           aria-controls="hospitals" aria-expanded="true" aria-label="Toggle navigation">
            <span class="icon">
                <i class="mdi mdi-hospital-box"></i>
            </span>
            <span class="text">Hospitals</span>
        </a>
        <ul id="hospitals" class="dropdown-nav collapse" style="">
            <li>
                <a href="#">Child menu</a>
            </li>
        </ul>
    </li>
</ul>
