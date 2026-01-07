@extends('main.app')

@push('ad-button','onclick="window.open("{{ $newTabUrl }}", "_blank");"')


@section('right-side')
{!! App\Helpers\AdsHelper::NATIVE_BANNER !!}    
@endsection

@section('left-side')
<div class="hidden md:block">
        {!! App\Helpers\AdsHelper::BANNER_300x250 !!}
    </div>
    <div class="md:hidden">
        {!! App\Helpers\AdsHelper::BANNER_468x60 !!}
    </div>
@endsection
    
    
@section('body-script')
    {!! App\Helpers\AdsHelper::SOCIAL_BANNER !!}
    @endsection
    
    @section('head-script')
    <style>
        iframe{
            width: 100%;
            overflow: auto;
        }
        iframe body{
            width: 100% !important;
        }
    </style>
@endsection
