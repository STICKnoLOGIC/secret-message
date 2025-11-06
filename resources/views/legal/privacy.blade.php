@extends('legal.main')

@section('title')
    DMCA Policy — {{ config('app.name', 'Laravel') }}
@endsection

@section('legal-content')
    <article class="max-w-4xl mx-auto prose prose-lg dark:prose-invert">

        <header class="mb-6">
            <h1 class="text-3xl sm:text-4xl font-extrabold leading-tight text-orange-500 dark:text-orange-400">Secret Message — Privacy Policy</h1>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Effective date: <strong>October 26, 2025</strong></p>
        </header>

        <section class="rounded-lg border border-amber-200 bg-amber-50 dark:bg-amber-900/20 dark:border-amber-700 p-4 mb-6">
            <h2 class="text-xl font-semibold text-amber-600">At a glance</h2>
            <ul class="mt-2 list-disc pl-5 space-y-1 text-sm text-gray-800 dark:text-gray-200">
                <li><strong>Service:</strong> Secret Message is an anonymous web app for creating short-lived messages.</li>
                <li><strong>What we collect:</strong> message content, creator IP address, third-party tracking (ads/analytics), and theme preference stored in local storage.</li>
                <li><strong>Retention:</strong> Messages are deleted after expiry or view limits. Some data may be kept temporarily for backups or maintenance.</li>
                <li><strong>No selling:</strong> We do not sell user data. We may disclose data to authorities if legally required (see DMCA link).</li>
                <li><strong>Security & responsibility:</strong> We take reasonable measures to protect data, but users should not post personal or sensitive information.</li>
                <li><strong>Contact/Legal:</strong> For DMCA or legal requests, see <a href="{{ route('legal.dmca') }}" class="text-amber-600 hover:underline">our DMCA Notice</a>.</li>
            </ul>
        </section>

        <section>
            <h2 class="text-2xl font-bold mb-2 text-orange-500 dark:text-orange-400">Full Privacy Policy</h2>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">1. Scope</h3>
            <p class="mt-2">This Privacy Policy explains how <strong>Secret Message</strong> collects, uses, discloses, and stores information when you use the Service. By using the Service you agree to the collection and use described in this policy.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">2. Information we collect</h3>
            <p class="mt-2">We collect the following categories of information:</p>
            <ul class="list-disc pl-6 mt-2">
                <li><strong>Message content:</strong> The text or content of messages that users create. Messages are stored to enforce time and view limits and are deleted after expiry.</li>
                <li><strong>IP addresses:</strong> We log the IP address of creators and visitors for abuse prevention, rate-limiting, analytics, and legal compliance.</li>
                <li><strong>Third-party tracking:</strong> We use third-party advertising and analytics services which may collect cookies and tracking data according to their own policies.</li>
                <li><strong>Local storage:</strong> We may store non-sensitive preferences (such as theme choice) in the user's browser localStorage to improve user experience.</li>
            </ul>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">3. How we use the information</h3>
            <p class="mt-2">We use collected data to:</p>
            <ul class="list-disc pl-6 mt-2">
                <li>Operate the Service and maintain message lifecycle (creation, expiry, and view limits).</li>
                <li>Detect and prevent abuse, spam, or other malicious activity.</li>
                <li>Support advertising and analytics provided by third-party services.</li>
                <li>Comply with legal obligations and respond to lawful requests from authorities (including DMCA takedown notices).</li>
            </ul>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">4. Retention and backups</h3>
            <p class="mt-2">Messages are deleted automatically after they reach their configured time or view limits. Some records (including backups, logs, or retained copies) may be kept temporarily for maintenance, debugging, or legal compliance. We retain data only as long as necessary for these purposes.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">5. Sharing and disclosure</h3>
            <p class="mt-2">We do not sell personal data. We may share or disclose information to:</p>
            <ul class="list-disc pl-6 mt-2">
                <li>Third-party ad networks and analytics providers (per their terms and privacy policies).</li>
                <li>Law enforcement or government authorities when required by law or valid legal process (including DMCA requests).</li>
            </ul>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">6. Cookies and third-party tracking</h3>
            <p class="mt-2">The Service uses third-party cookies and tracking mechanisms through ads and analytics providers. These third parties collect and use data according to their own policies; we do not control those practices. You should consult third-party privacy policies for details and opt-out options.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">7. Local storage</h3>
            <p class="mt-2">We may use localStorage to save non-sensitive preferences (for example, theme choice). This data remains on the user's browser and is controlled by the user. Clearing browser storage will remove these preferences.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">8. User deletion requests</h3>
            <p class="mt-2">Because the Service is anonymous and message volume may be large, we are generally unable to locate and remove individual messages on demand. If you believe content violates your rights, please submit a request via our DMCA page: <a href="{{ route('legal.dmca') }}" class="text-amber-600 hover:underline">DMCA Notice</a>. We will respond according to applicable law and our policies.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">9. Minors</h3>
            <p class="mt-2">The Service is intended for users 18 years and older. We do not knowingly collect personal information from minors. Given the anonymous nature of the Service, we cannot guarantee that underage users will not access the Service. Parents and guardians should supervise minors' internet use.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">10. Data security & user's responsibility</h3>
            <p class="mt-2">We implement reasonable technical and organizational measures to protect information. However, no system is completely secure. Because messages may be publicly accessible before deletion, <strong>do not post personal, confidential, or sensitive information</strong> (such as full legal names, financial details, government IDs, passwords, health information, etc.). You accept the risks of sharing content through the Service.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">11. Changes to this Policy</h3>
            <p class="mt-2">We may modify this Privacy Policy at any time. Changes take effect when posted on this page. Continuing to use the Service after updates means you accept the modified policy. You should review the Privacy Policy periodically.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">12. International data transfers</h3>
            <p class="mt-2">The Service is operated from the Philippines, and data may be stored or processed in other jurisdictions (for example, hosting in Germany). By using the Service, you consent to the transfer of data across borders as necessary to operate the Service.</p>

            <h3 class="mt-6 text-lg font-semibold text-orange-500 dark:text-orange-400">13. Contact & legal requests</h3>
            <p class="mt-2">For DMCA requests, legal notices, or questions about privacy practices, please use our DMCA/contact page: <a href="{{ route('legal.dmca') }}" class="text-amber-600 hover:underline">DMCA Notice</a>.</p>
    </article>
@endsection
