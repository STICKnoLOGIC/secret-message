@extends('messages.ads')

@section('content')
<div class="container bg-white dark:bg-gray-800 mt-4 p-6 rounded-xl shadow-md space-y-6 w-full max-w-xl">
    <h2>Secret Mesasge:</h2>
  <div class="card p-4 ">
    <p class="text-lg break-words">{!! \App\Helpers\TextHelper::linkify($message->message, $message->token, 'https://sponsored.example.com') !!}</p>

    <div class="mt-3 text-sm text-gray-600">
      Expires at: {{ \Carbon\Carbon::createFromTimestamp($message->expires_at)->toDayDateTimeString() }}<br>
      Remaining views: {{ $message->limit }}
    </div>
  </div>
</div>
@endsection
