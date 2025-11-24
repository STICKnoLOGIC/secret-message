@extends('messages.ads')

@section('head-script')
    <script type='text/javascript' src='//godlessgirlsmoothly.com/ce/94/fb/ce94fbe3305c4444a5a3d9538f72ca4d.js'></script>
    @parent
@endsection
@section('content')
<div class="container bg-white dark:bg-gray-800 mt-4 p-6 rounded-xl shadow-md space-y-6 w-full max-w-xl">
    <p class="text-amber-600 dark:text-amber-500 text-xl font-extrabold">The Secret:</p>
    <div class="card px-4">
    <p class="text-m break-words">{!! \App\Helpers\TextHelper::linkify($message->message, 'https://godlessgirlsmoothly.com/cuj6e8318?key=385472db99ce0544ac7c31d67fc73d63') !!}</p>

    <div class="mt-3 text-sm text-gray-600">
      Expires at: {{ \Carbon\Carbon::createFromTimestamp($message->expires_at.config('app.timezone'))->toDayDateTimeString() }}<br>
      Remaining views: {{ short_number($message->limit) }}
    </div>
  </div>
</div>
@endsection


