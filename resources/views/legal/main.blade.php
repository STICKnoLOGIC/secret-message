@extends('main.app')

{{--dont show any ads in legalities--}}
@section('left-side')
    <div></div>
@endsection
@section('right-side')
    <div></div>
@endsection

@section('content')
    <div class="justify-items-start items-start w-full">
        @yield('legal-content')
    </div>
@endsection
