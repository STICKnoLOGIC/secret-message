@extends('main.app')
@php
    $message =  session('message');
@endphp

@section('content')
<div class="container bg-white dark:bg-gray-800 mt-4 p-6 rounded-xl shadow-md space-y-6 w-full max-w-xl">
    <p class="text-amber-600 dark:text-amber-500 text-xl font-extrabold">The Secret:</p>
    <div class="card px-4">
        <p class="text-m break-words">{!! \App\Helpers\TextHelper::linkify($message->message, 'https://sponsored.example.com') !!}</p>
        <div class="mt-3 text-sm text-gray-600">
            Expires at: {{ \Carbon\Carbon::createFromTimestamp($message->expires_at)->toDayDateTimeString() }}<br>
            Remaining views: {{ short_number($message->limit) }}
        </div>
    </div>
    <div class="flex items-center gap-2">
        <input
            id="copyTarget"
            type="text"
            value="https://thisIsAnExampleURL.com/the-random-token"
            readonly
            class="border border-gray-300 rounded-lg px-3 py-2 w-full bg-gray-50 text-gray-800"
        />

        <button
            id="copyBtn"
            class="px-3 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600 transition"
        >
            Copy
        </button>
    </div>
    <div class="flex items-center gap-2">
        <p>Share:</p>
    </div>
    <a href="{{ route('demo.main') }}"
           class="inline-block w-full bg-orange-500 text-center hover:bg-orange-600 text-white font-bold py-3 px-4 rounded-lg shadow-md transition">
        CREATE ANOTHER SECRET
    </a>
</div>
@endsection

@section('body-script')
    <script>
        document.getElementById('copyBtn').addEventListener('click', async () => {
            const input = document.getElementById('copyTarget');
            try {
                await navigator.clipboard.writeText(input.value);
                alert('Copied to clipboard!');
            } catch (err) {
                console.error('Failed to copy: ', err);
                alert('Failed to copy text.');
            }
        });
    </script>
@endsection
