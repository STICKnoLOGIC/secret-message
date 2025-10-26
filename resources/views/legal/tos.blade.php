@extends('legal.main')

@section('title')
    Terms of Services — {{ config('app.name', 'Laravel') }}
@endsection

@section('legal-content')
    <article class="max-w-4xl mx-auto prose prose-lg dark:prose-invert">

        <header class="mb-6">
            <h1 class="text-3xl sm:text-4xl font-extrabold leading-tight text-orange-500 dark:text-orange-400">{{ config('app.name', 'Laravel') }} — Terms of Service</h1>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Effective date: <strong>October 26, 2025</strong></p>
        </header>

        <section class="rounded-lg border border-amber-200 bg-amber-50 dark:bg-amber-900/20 dark:border-amber-700 p-4 mb-6">
            <h2 class="text-xl font-semibold text-amber-600">At a glance</h2>
            <ul class="mt-2 list-disc pl-5 space-y-1 text-sm text-gray-800 dark:text-gray-200">
                <li><strong>Service</strong>: {{ config('app.name', 'Laravel') }} is an anonymous web app for creating time- and view-limited messages.</li>
                <li><strong>Anonymous</strong>: No accounts required — messages are created anonymously.</li>
                <li><strong>Data stored</strong>: We temporarily store message content and IP addresses; messages are deleted after expiry or view limits.</li>
                <li><strong>Monetization</strong>: Ads only (third-party ads & analytics may collect data).</li>
                <li><strong>Responsibility</strong>: Users are solely responsible for what they post — {{ config('app.name', 'Laravel') }} is not liable for user-generated content.</li>
                <li><strong>DMCA</strong>: For DMCA requests please see <a href="{{ route('legal.dmca') }}" class="text-amber-600 hover:underline">our DMCA page</a>.</li>
            </ul>
        </section>

        <section>
            <h2 class="text-2xl font-bold mb-2 text-orange-500 dark:text-orange-400">Full Terms of Service</h2>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">1. Acceptance of Terms</h3>
            <p class="mt-2">By using <strong>{{ config('app.name', 'Laravel') }}</strong> (the "Service"), you agree to these Terms of Service ("Terms"). If you do not agree, do not use the Service.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">2. Who may use the Service</h3>
            <p class="mt-2">The Service is intended for users aged <strong>18+</strong>. By using the Service you represent that you are at least 18 years old.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">3. Anonymous usage & data</h3>
            <p class="mt-2">{{ config('app.name', 'Laravel') }} allows anonymous creation of messages. We collect and temporarily store the message content and the creator's IP address in order to operate the Service (creation, enforcement of limits, analytics, and abuse prevention).</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">4. Message lifecycle</h3>
            <p class="mt-2">Messages are deleted automatically after they reach their configured time limit or view/visit limit. Once deleted, messages are permanently removed from public access. We do not guarantee that deleted data is unrecoverable from backups, but we do not retain messages after deletion for general access.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">5. No content restrictions and DMCA</h3>
            <p class="mt-2">You may post any content via the Service; however, <strong>{{ config('app.name', 'Laravel') }} is not the publisher</strong> of user content and is not responsible for it. If you believe content violates intellectual property rights, please follow our DMCA takedown procedure at <a href="{{ route('legal.dmca') }}" class="text-amber-600 hover:underline">DMCA</a>. We reserve the right to remove content following applicable law and our policies.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">6. Third-party services and ads</h3>
            <p class="mt-2">The Service uses third-party advertising, analytics, and other libraries that may collect data according to their terms. We are not responsible for third-party practices. You should review the privacy policies and terms of any third-party services shown on or used by the Service.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">7. Removal and moderation</h3>
            <p class="mt-2">We expressly reserve the right to remove, modify, or refuse access to any content, at any time and without prior notice, for any reason or no reason. We may also suspend or terminate access to the Service at our discretion.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">8. Service availability</h3>
            <p class="mt-2">{{ config('app.name', 'Laravel') }} does not guarantee that the Service will be uninterrupted, error-free, or available at all times. We may modify, suspend, or discontinue the Service (or any part) without notice. We are not liable for unavailability, outages, or loss of data resulting from Service interruptions.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">9. User responsibilities and legal risk</h3>
            <p class="mt-2">You are solely responsible for the content you create, post, or transmit through the Service. You agree to defend, indemnify, and hold harmless {{ config('app.name', 'Laravel') }}, its officers, agents, and affiliates from any claims, liabilities, damages, or expenses arising from your use of the Service or your content. If legal action is taken relating to content you posted, you assume full responsibility for any consequences.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">10. Privacy and data storage</h3>
            <p class="mt-2">We store minimal data required to operate the Service. Personal data stored may include message content and IP addresses. Message data is removed after limits expire. For more information about data processing, see our Privacy Policy.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">11. Changes to these Terms</h3>
            <p class="mt-2">We may change these Terms at any time. Updated Terms are effective immediately when posted. Continued use of the Service after changes constitutes acceptance of the new Terms. It is your responsibility to review the Terms regularly.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">12. Disclaimer of warranties</h3>
            <p class="mt-2">THE SERVICE IS PROVIDED "AS IS" AND "AS AVAILABLE" WITHOUT WARRANTIES OF ANY KIND. TO THE FULLEST EXTENT PERMITTED BY LAW, {{ config('app.name', 'Laravel') }} DISCLAIMS ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">13. Limitation of liability</h3>
            <p class="mt-2">TO THE MAXIMUM EXTENT PERMITTED BY LAW, IN NO EVENT SHALL {{ config('app.name', 'Laravel') }}, ITS OWNERS, OFFICERS, OR AGENTS BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES ARISING FROM YOUR USE OF THE SERVICE. THIS INCLUDES LOSSES DUE TO LEGAL CLAIMS ARISING FROM USER CONTENT — THE USER IS RESPONSIBLE FOR THEIR OWN CONTENT.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">14. Termination</h3>
            <p class="mt-2">We may suspend, restrict, or terminate your access to the Service at any time, without prior notice, for any reason (including suspected abuse). Termination does not limit any other remedies we may have under law or equity.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">15. Governing law and disputes</h3>
            <p class="mt-2">These Terms are governed by the laws of the <strong>Republic of the Philippines</strong>. Any dispute arising under these Terms shall be subject to the exclusive jurisdiction of the courts located in the Philippines.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">16. Severability and no waiver</h3>
            <p class="mt-2">If any provision of these Terms is found invalid or unenforceable, the remaining provisions will remain in full force. Our failure to enforce any right or provision under these Terms does not constitute a waiver of such right.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">17. Contact</h3>
            <p class="mt-2">For legal or DMCA requests, please visit <a href="{{ route('legal.dmca') }}" class="text-amber-600 hover:underline">DMCA</a>. For general questions, please use the contact methods on our site.</p>

            <footer class="mt-8 text-sm text-gray-600 dark:text-gray-400">
                <p>© {{ date('Y') }} {{ config('app.name', 'Laravel') }} -- . All rights reserved.</p>
            </footer>
        </section>
    </article>
@endsection
