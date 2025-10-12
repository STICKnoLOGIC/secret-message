@extends('messages.ads')

@section('content')
<div class="container bg-white dark:bg-gray-800 mt-4 p-6 rounded-xl shadow-md space-y-6 w-full max-w-xl">
    <p class="text-amber-600 dark:text-amber-500 text-xl font-extrabold">The Secret:</p>
    <div class="card px-4">
    <p class="text-m break-words">{!! \App\Helpers\TextHelper::linkify($message->message, $message->token, 'https://sponsored.example.com') !!}</p>

    <div class="mt-3 text-sm text-gray-600">
      Expires at: {{ \Carbon\Carbon::createFromTimestamp($message->expires_at)->toDayDateTimeString() }}<br>
      Remaining views: {{ short_number($message->limit) }}
    </div>
  </div>
</div>
@endsection

