@php
    //dddx(get_defined_vars());
@endphp
@if (\Auth::check())
    @php
        //ddd(\Auth::user());
    @endphp
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" title="Welcome {{ $profile->handle() }}" href="#"
            data-effect="mfp-move-from-top" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
            aria-expanded="false">
            <i class="fa fa-user"></i>@lang('lu::headernav.welcome') {{ $profile->handle() }}!
        </a>
        <ul class="dropdown-menu">
            <li>
                <a href="{{ $profile->url() }}" class="dropdown-item"
                    title="profile">Profile</a>
            </li>
            @if ($profile->permType() >= 4)
                <li>
                    <a href="{{ url('/admin') }}" class="dropdown-item" title="admin">Admin</a>
                </li>
            @endif
            <x-theme::lis.logout class="dropdown-item"> Logout </x-theme::lis.logout>
            {{--  
            <li><a href="{{ url('/logout') }}"  title="logout" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                    Logout
                </a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                style="display: none;">
                {{ csrf_field() }}
            </form>
            --}}
        </ul>
    </li>
@else
    <li class="nav-item">
        {{-- <a href="{{ route('login') }}" class="ajax-popup-link nav-link" id="js-login" title="login">
                <i class="fas fa-sign-in-alt"></i>&nbsp;Sign in
            </a> --}}
        <a href="{{ route('login') }}" class="nav-link" data-toggle="modal" data-target="#vueModal"
            data-title="login" data-href="{{ route('login') }}">
            <i class="fas fa-sign-in-alt"></i>&nbsp;Sign in
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('register') }}" class="nav-link" title="register" data-toggle="modal"
            data-target="#vueModal" data-title="register" data-href="{{ route('register') }}">
            <i class="fa fa-edit"></i>&nbsp;Sign up
        </a>
    </li>
@endif
