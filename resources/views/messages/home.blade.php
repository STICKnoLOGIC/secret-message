@extends('messages.ads')

@section('content')
    <form id="createForm"
          method="POST"
          action="{{ route('messages.store') }}"
          class="bg-white dark:bg-gray-800 mt-4 p-6 rounded-xl shadow-md space-y-6 w-full max-w-xl">

        @csrf
        @method('POST')
        <label for="message" class="block font-semibold text-gray-700 dark:text-gray-200 mb-1">
            Message <span class="text-sm text-gray-500 dark:text-gray-400">(max 150 characters)</span>
        </label>
        <textarea id="message" name="message" maxlength="150" rows="3"
                  class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-orange-500 resize-none"
                  required
                  pattern=".*\S.*"
                  title="Please enter a valid message (text only)."></textarea>

        <label for="limit" class="block font-semibold text-gray-700 dark:text-gray-200 mb-1">
            Limit <span class="text-sm text-gray-500 dark:text-gray-400">(how many people can open this, default: 1)</span>
        </label>
        <input type="number" id="limit" name="limit" value="1" min="1"
               class="w-24 px-3 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-orange-500"
               required>

        <div class="text-sm text-gray-500 dark:text-gray-400 font-semibold">
            ⏳ 1 day expiration
        </div>

        <button type="submit" @stack('ad-button')
                class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-4 rounded-lg shadow-md transition">
            CREATE
        </button>
    </form>
@endsection
