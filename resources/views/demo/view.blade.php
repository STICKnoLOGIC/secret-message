@extends('main.app')
@php
    $message =  session('message');
    $url = 'https://thisIsAnExampleURL.com/the-random-token';
@endphp

@section('head-script')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
@endsection

@section('content')
    <div class="container bg-white dark:bg-gray-800 mt-4 p-6 rounded-xl shadow-md space-y-6 w-full max-w-xl">
        <p class="border rounded-b-sm p-1 my-1 border-amber-500 dark:border-amber-600 text-black dark:text-white"> 
            ‼This is a "Temporary Page", once refreshed, its gone. Better to copy the link before its too late‼
        </p>
        <p class="text-gray-500 dark:text-gray-400"> This is for A Demo purposes, the message will not be stored in our database.</p>
        <p class="text-amber-600 dark:text-amber-500 text-xl font-extrabold">The Secret:</p>
        <div class="card px-4">
            <p class="text-m break-words">{!! \App\Helpers\TextHelper::linkify($message->message) !!}</p>
            <div class="mt-3 text-sm text-gray-600">
                Expires at: {{ \Carbon\Carbon::createFromTimestamp($message->expires_at)->toDayDateTimeString() }}<br>
                Remaining views: {{ short_number($message->limit) }}
            </div>
        </div>
        <div class="flex items-center gap-2">
            <input
                id="copyTarget"
                type="text"
                value="{{ $url }}"
                readonly
                class="border border-gray-300 rounded-lg px-3 py-2 w-full bg-gray-50 text-gray-800"
            />

            <button
                id="copyBtn"
                class="px-3 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600 transition"
            >
                <i class="fa-solid fa-link text-white"></i>
            </button>
        </div>
        <div class="flex flex-row flex-wrap gap-1">
            <p>Share:</p>
            <div class="flex flex-row flex-wrap gap-2">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}" target="_blank" rel="noopener noreferrer"><span class="fa-brands fa-square-facebook text-4xl text-amber-600 dark:text-amber-500"></span></a>
                <a href="https://twitter.com/intent/tweet?text=🤫🤫Sssh.! This is our little secret...&url={{ $url }}" target="_blank" rel="noopener noreferrer"><span class="fa-brands fa-square-x-twitter text-4xl text-amber-600 dark:text-amber-500"></span></a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $url }}" target="_blank" rel="noopener noreferrer"><span class="fa-brands fa-square-linkedin text-4xl text-amber-600 dark:text-amber-500"></span></a>
                <a href="https://api.whatsapp.com/send?text=🤫🤫Sssh.! This is our little secret...{{ $url }}" target="_blank" rel="noopener noreferrer"><span class="fa-brands fa-square-whatsapp text-4xl text-amber-600 dark:text-amber-500"></span></a>
                <a href="https://t.me/share/url?url={{ $url }}&text=🤫🤫Sssh.! This is our little secret..." target="_blank" rel="noopener noreferrer"><span class="fa-brands fa-telegram text-4xl text-amber-600 dark:text-amber-500"></span></a>
                <a href="https://www.threads.net/intent/post?text=🤫🤫Sssh.! This is our little secret...{{ $url }}" target="_blank" rel="noopener noreferrer"><span class="fa-brands fa-square-threads text-4xl text-amber-600 dark:text-amber-500"></span></a>
                <a href="https://www.reddit.com/submit?url={{ $url }}&title=🤫🤫Sssh.! This is our little secret..." target="_blank" rel="noopener noreferrer"><span class="fa-brands fa-square-reddit text-4xl text-amber-600 dark:text-amber-500"></span></a>
            </div>
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
