@extends('main.app')

@php
    // This URL can be passed from the controller or Blade data
    $newTabUrl = \App\Models\AdsUrlClickable::inRandomOrder()->value('url');
@endphp

@push('ad-button','onclick="window.open("{{ $newTabUrl }}", "_blank");"')

@section('logo-text','Secret Message')

@section('left-side')
    //todo
@endsection

@section('right-side')
    //todo
@endsection
