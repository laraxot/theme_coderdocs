@php
    //dddx(get_defined_vars());
@endphp
@extends('pub_theme::layouts.app')
@section('content')
<div>
    {{ $row->title }}
</div>
<div>
 
    {{ $row->subtitle }}<b>
</div>


@endsection