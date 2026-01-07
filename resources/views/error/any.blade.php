@extends('legal.main')

@section('content')
    <div class="w-full">
    <div class="relative flex items-center justify-center md:justify-end h-40 md:h-96 w-full overflow-hidden mb-6">
        
       <!-- Background text -->
        <span class="absolute inset-0 flex items-center justify-center text-[50vw] md:text-[20vw] font-black text-amber-600 dark:text-amber-500 select-none leading-none pointer-events-none">
        404
    </span>

        <!-- Foreground content -->
        <div class="z-1 text-center bg-gray-100 dark:bg-gray-900 p-0 w-full md:w-2/4 border-t border-b border-t-amber-600 dark:border-t-amber-500 border-b-amber-600 dark:border-b-amber-500">
            <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold">Page Not Found</h2>
        </div>
    </div>
    <p class="w-full border rounded-lg bg-amber-50 dark:bg-amber-900 border-amber-500 my-4 p-4 mt-[32px] text-center wrap-break-word"> "{{ $message }}"</p>
    </div>
@endsection

