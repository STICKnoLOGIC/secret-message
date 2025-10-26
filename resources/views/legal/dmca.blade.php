@extends('legal.main')

@section('title')
    DMCA Policy — {{ config('app.name', 'Laravel') }}
@endsection

@section('legal-content')
        <h1 class="text-3xl font-bold mb-4 text-orange-500 dark:text-orange-400">DMCA / Copyright Policy</h1>

        <p class="mb-4 text-neutral-900 dark:text-neutral-300">
            <strong>{{ config('app.name', 'Laravel') }}</strong> (<a href="{{ route('demo.main') }}" class="text-orange-500 dark:text-orange-400 hover:underline">{{ route('demo.main') }}</a>)
            respects intellectual property rights. If you believe a message on our site contains infringing material, you may send us a DMCA notice.
        </p>

        <h2 class="text-xl font-semibold text-orange-500 dark:text-orange-400 mt-6 mb-2">Important Notes</h2>
        <ul class="list-disc text-neutral-900 dark:text-neutral-300 ml-6 space-y-1 mb-4">
            <li>We <strong>do not host</strong> files — only text messages, which may include links.</li>
            <li>Messages expire after <strong>1 day</strong> and are fully deleted after <strong>3 days</strong>.</li>
            <li>Creators are anonymous. We cannot contact them directly.</li>
            <li>If you need to identify a creator, you must get a valid <strong>Philippine court order</strong>. We can only provide IP logs to authorities.</li>
        </ul>

        <h2 class="text-xl font-semibold text-orange-500 dark:text-orange-400 mt-6 mb-2">DMCA Contact</h2>
        <p class="mb-4">Send notices to:</p>
        <div class="bg-gray-50 dark:bg-neutral-800 text-neutral-900 dark:text-neutral-300 border rounded-md p-4 mb-4">
            <p><strong>Email:</strong> dmca@sticknologic.is-a.dev</p>
        </div>

        <h2 class="text-xl font-semibold text-orange-500 dark:text-orange-400 mt-6 mb-2">How to File</h2>
        <p class="text-neutral-900 dark:text-neutral-300 mb-2">Your notice should include:</p>
        <ol class="list-decimal text-neutral-900 dark:text-neutral-300 ml-6 space-y-1 mb-4">
            <li>Subject (example: <code>DMCA report or Report Abuse</code>)</li>
            <li>Message URL (example: <code>https://secret.sticknologic.is-a.dev/m/{token}</code>)</li>
            <li>Description of the copyrighted work</li>
            <li>Your contact information</li>
            <li>Statement that you believe the use is not authorized</li>
            <li>Your signature (typed is fine)</li>
        </ol>

        <h2 class="text-xl font-semibold text-orange-500 dark:text-orange-400 mt-8 mb-2">How we respond</h2>
        <ul class="list-disc text-neutral-900 dark:text-neutral-300 ml-6 space-y-1">
            <li>We promptly disable access to allegedly infringing material hosted on our systems.</li>
            <li>We preserve relevant logs and records.</li>
            <li>Block the IP address of the alleged user.</li>
        </ul>

        <h2 class="text-xl font-semibold text-orange-500 dark:text-orange-400 mt-6 mb-2">Jurisdiction</h2>
        <p class="text-neutral-900 dark:text-neutral-300 mb-4">
            We operate under the laws of the Republic of the Philippines. Any legal action must be filed in the Philippines.
        </p>

        <footer class="mt-10 border-t pt-4 text-xs text-gray-500 dark:text-gray-300">
            <p><strong>Disclaimer:</strong> This page is for general information only and does not replace professional legal advice.
               If you need legal help, please consult a lawyer.</p>
            <p class="mt-2 text-amber-600">© {{ config('app.author', 'Laravel') }}</p>
        </footer>
@endsection
