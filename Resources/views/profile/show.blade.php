@extends('pub_theme::layouts.app')
@section('content')
@php
    //dddx(get_defined_vars());
    $user = $last_item->user;
    $profile = $user->profile;
    //dddx($profile);
@endphp
ciao {{ $profile->full_name }}
questa è la tua pagina Profilo

@endsection
