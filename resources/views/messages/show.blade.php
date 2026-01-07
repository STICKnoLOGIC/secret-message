@extends('messages.ads')

@section('head-script')
    {!! App\Helpers\AdsHelper::POPUNDER !!}
    @parent
@endsection
@section('content')
<div class="container bg-white dark:bg-gray-800 mt-4 p-6 rounded-xl shadow-md space-y-6 w-full max-w-xl">
    <p class="text-amber-600 dark:text-amber-500 text-xl font-extrabold mb-8 border-b border-amber-600">The Secret:</p>
    <div class="px-4 select-none">
    <p class="text-m break-words">{!! \App\Helpers\TextHelper::linkify($message->message, App\Helpers\AdsHelper::SMARTLINK) !!}</p>

    <div class="mt-8 text-sm text-gray-600 border-t border-amber-600">
      Expires at: {{ \Carbon\Carbon::createFromTimestamp($message->expires_at, config('app.timezone'))->toDayDateTimeString() }}<br>
      Remaining: {{ Number::abbreviate($message->limit) }} View/s
    </div>
  </div>
</div>
@endsection


