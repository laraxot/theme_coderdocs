@php
<<<<<<< HEAD
//dddx(get_defined_vars());
=======
    //dddx(get_defined_vars());
>>>>>>> 6bac816 (up)
@endphp
@if (\Auth::check())
    @php
        //ddd(\Auth::user());
    @endphp
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" title="Welcome {{ $profile->handle() }}" href="#"
<<<<<<< HEAD
            data-effect="mfp-move-from-top" data-toggle="dropd->url('show')#" role="button" aria-haspopup="true"
=======
            data-effect="mfp-move-from-top" data-toggle="dropd->url(['act'=>'show'])#" role="button" aria-haspopup="true"
>>>>>>> 6bac816 (up)
            aria-expanded="false">
            <i class="fa fa-user"></i>@lang('lu::headernav.welcome') {{ $profile->handle() }}!
        </a>
        <ul class="dropdown-menu">
            <li>
<<<<<<< HEAD
                <a href="{{ $profile->url() }}" class="dropdown-item" title="profile">Profile</a>
=======
                <a href="{{ $profile->url() }}" class="dropdown-item"
                    title="profile">Profile</a>
>>>>>>> 6bac816 (up)
            </li>
            @if ($profile->permType() >= 4)
                <li>
                    <a href="{{ url('/admin') }}" class="dropdown-item" title="admin">Admin</a>
                </li>
            @endif
            <x-theme::lis.logout class="dropdown-item"> Logout </x-theme::lis.logout>
<<<<<<< HEAD
            {{-- <li><a href="{{ url('/logout') }}"  title="logout" onclick="event.preventDefault();
=======
            {{--  
            <li><a href="{{ url('/logout') }}"  title="logout" onclick="event.preventDefault();
>>>>>>> 6bac816 (up)
                     document.getElementById('logout-form').submit();">
                    Logout
                </a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                style="display: none;">
                {{ csrf_field() }}
<<<<<<< HEAD
            </form> --}}
=======
            </form>
            --}}
>>>>>>> 6bac816 (up)
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
