@extends('pub_theme::layouts.plane')
@section('body')
	@include('pub_theme::layouts.partials.headernav')
	@php
		if(!isset($in_home)) $in_home=0;
		$class=$in_home?'page-content':'docs-content';
	@endphp
	@includeWhen($in_home,$view.'.inner_page')
	<div class="page-wrapper">
	    @includeWhen(!$in_home,'pub_theme::layouts.partials.sidebar')
	    <div class="{{$class}}">
	    	<div class="container">
				@yield('content')
			</div>
		</div>
	</div>
	@includeWhen($in_home,$view.'.cta')
	@if(isset($footer) && $footer=='off')
	@else
	@include('pub_theme::layouts.partials.footer') 
	@endif
@endsection
