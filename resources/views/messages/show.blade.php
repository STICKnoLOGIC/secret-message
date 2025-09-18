@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card p-4">
    <p class="text-lg break-words">{!! \App\Helpers\TextHelper::linkify($message->message, $message->token, 'https://sponsored.example.com') !!}</p>

    <div class="mt-3 text-sm text-gray-600">
      Expires at: {{ \Carbon\Carbon::createFromTimestamp($message->expires_at)->toDayDateTimeString() }}<br>
      Remaining views: {{ $message->limit }}
    </div>
  </div>
</div>
@endsection
