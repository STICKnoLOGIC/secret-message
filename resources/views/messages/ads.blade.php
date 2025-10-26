@extends('main.app')

@php
    // This URL can be passed from the controller or Blade data
    $newTabUrl = \App\Models\AdsUrlClickable::inRandomOrder()->value('url');
    $banners = \App\Models\AdsUrlBanner::inRandomOrder()->take(2)->get();
    $user2=$banners->get(0);
    $user1=$banners->get(1);
@endphp

@push('ad-button','onclick="window.open("{{ $newTabUrl }}", "_blank");"')

@section('logo-text','Secret Message')

@section('left-side')
    <div id="container-bcb746976ca53f11f9d6d0db360d6a56"></div>
@endsection

@section('right-side')
    <script type="text/javascript">
        atOptions = {
            'key' : 'c2d94d26fd98640d8af46184deb6dba1',
            'format' : 'iframe',
            'height' : 250,
            'width' : 300,
            'params' : {}
        };
    </script>
    <script type="text/javascript" src="//godlessgirlsmoothly.com/c2d94d26fd98640d8af46184deb6dba1/invoke.js"></script>
@endsection


@section('body-script')
    <script async="async" data-cfasync="false" src="//pl27792213.effectivegatecpm.com/bcb746976ca53f11f9d6d0db360d6a56/invoke.js"></script>
    <script type='text/javascript' src='//godlessgirlsmoothly.com/51/54/74/5154740d66983e4a92e96f8f54283fc4.js'></script>
@endsection
