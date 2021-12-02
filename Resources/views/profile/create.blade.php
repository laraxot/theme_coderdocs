{{--
<!DOCTYPE html>  
<html lang="en">
	@include('pub_theme::layouts.partials.htmlheader')
	<body>
		--}}
		@php
		//dddx(get_defined_vars());
		@endphp
		@extends('pub_theme::layouts.app',['footer'=>'off', 'headernav'=>'off','body_style'=>'padding-top:0px'])
		@section('content')
		<div class="container-fluid px-3">
			<div class="row min-vh-100">
				<div class="col-md-8 col-lg-6 col-xl-5 d-flex align-items-center">
					<div class="w-100 py-5 px-md-5 px-xl-6 position-relative">
						<div class="mb-4">
							<img src="{{ Theme::asset('pub_theme::img/logo-square.svg') }}" alt="..." style="max-width: 4rem;" class="img-fluid mb-4">
							<h2>@lang('food::auth.sign_up')</h2>
							{{--  Non so se in questo punto vogliamo inserire qualche testo
							<p class="text-muted">
								His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table.
							</p>
							--}}
						</div>
						@include('theme::includes.flash')
						{!! Form::bsOpen($row, 'store') !!}
						{{-- <formclass="form-validate"> --}}
						{{-- 
						<div class="form-group">
							<label for="loginUsername" class="form-label"> Email Address</label>
							<input name="loginUsername" id="loginUsername" type="email" placeholder="name@address.com" autocomplete="off" required data-msg="Please enter your email" class="form-control">
						</div>
						--}}
						{{ Form::bsText('user[handle]') }}
						{{ Form::bsEmail('user[email]') }}
						{{--  
						<div class="form-group">
							<label for="loginPassword" class="form-label"> Password</label>
							<input name="loginPassword" id="loginPassword" placeholder="Password" type="password" required data-msg="Please enter your password" class="form-control">
						</div>
						--}}
						{{ Form::bsPasswordWithConfirm('user[passwd]',null,['without_div'=>true]) }}
						{{--
						<div class="form-group mb-4">
							<label for="loginPassword2" class="form-label"> Confirm your password</label>
							<input name="loginPassword2" id="loginPassword2" placeholder="Password" type="password" required data-msg="Please enter your password" class="form-control">
						</div>
						--}}
						{{-- Form::bsText('password2') --}}
						<button type="submit" class="btn btn-lg btn-block btn-primary">@lang('food::auth.sign_up')</button>
						<hr data-content="OR" class="my-3 hr-text letter-spacing-2">
						<button class="btn btn btn-outline-primary btn-block btn-social mb-3">
						<i class="fa-2x fa-facebook-f fab btn-social-icon"></i>
						@lang('food::auth.login.connect_with_facebook')
						{{-- 
						Connect
						<span class="d-none d-sm-inline">with Facebook</span>
						--}}
						</button>
						<button class="btn btn btn-outline-muted btn-block btn-social mb-3">
						<i class="fa-2x fa-google fab btn-social-icon"> </i>
						@lang('food::auth.connect_with_google')
						{{-- 
						Connect <span class="d-none d-sm-inline">with Google</span>
						--}}
						</button>
						<p class="text-sm text-muted">
							@lang('food::auth.already_account')
							<a href="{{ route('login',['lang'=>$lang,'container0'=>'profile']) }}">
							@lang('food::auth.sign_in')
							</a>
						</p>
						<p class="text-sm text-muted">
							@lang('food::auth.create.agree_to')
							{{-- 
							By signing up you agree to Directory's 
							<a href="#">Terms and Conditions</a> and 
							<a href="#">Privacy Policy</a>.
							--}}
						</p>
						{{ Form::close() }}
						<a href="{{ url($lang) }}" class="close-absolute mr-md-5 mr-xl-6 pt-5">
							<svg class="svg-icon w-3rem h-3rem">
								<use xlink:href="#close-1"> </use>
							</svg>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-lg-6 col-xl-7 d-none d-md-block">
					<!-- Image-->
					<div style="background-image: url({{ Theme::asset('pub_theme::img/photo/photo-1497436072909-60f360e1d4b1.jpg') }});" class="bg-cover h-100 mr-n3"></div>
				</div>
			</div>
		</div>
		@include('pub_theme::layouts.partials.scripts')
		@endsection