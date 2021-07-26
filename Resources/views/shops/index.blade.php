@extends('pub_theme::layouts.app',['sidebar'=>1])
@section('content')
	@php
		//dddx(get_defined_vars());
	@endphp
@foreach($rows  as $key=>$row)
		<article class="docs-article" id="section-1">
		    <header class="docs-header">
			    <h1 class="docs-heading">
			    	<a href="{{ Panel::get($row)->url() }}">{{ $row->title }}</a> <span class="docs-time">Last updated: {{ $row->updated_at }}</span>
			    </h1>
			    <section class="docs-intro">
				    <p>{{ $row->subtitle }}</p>
				</section><!--//docs-intro-->
			</header>

		</article>

	@endforeach
	{{--  
    @include($_layout->view_default.'.test.content')
    --}}
@endsection
