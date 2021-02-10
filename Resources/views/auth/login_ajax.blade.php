<div class="social-btn text-center">
    @php
    $providers=['facebook','twitter','google'];
    @endphp
    @foreach($providers as $provider)
    @php
        $provider_url=route('login.provider',['provider'=>$provider]);
    @endphp
    <a href="{{ $provider_url }}" class="btn btn-primary btn-lg" title="{{ $provider }}" onclick="location.href='{{ $provider_url}}'">
    <i class="fab fa-{{ $provider }}"></i>
    </a>
    @endforeach
</div>
<hr/>
<form class="form-horizontal" role="form" method="POST" action="{{ route('login',['lang'=>$lang]) }}">
    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">Password</label>


            <input id="password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

    </div>

    <div class="form-group">

            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
            </div>

    </div>
    <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                Login
            </button>

            <a class="btn btn-link" href="{{ route('password.request',['lang'=>$lang]) }}">
                Forgot Your Password?
            </a>
    </div>
</form>
