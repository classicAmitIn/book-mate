<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Page Content -->
        <main>

            <section>
                <div class="flex flex-col justify-between w-full gap-4 px-8 py-6 text-xs font-medium text-gray-500 lg:flex-row md:px-12 lg:px-24">
                    <div class="flex flex-row justify-between gap-4">
                        @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                            <a
                            href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                            Dashboard
                        </a>
                        @else
                        <a
                        href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                        Log in
                    </a>

                    @if (Route::has('register'))
                    <a
                    href="{{ route('register') }}"
                    class="rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                    Register
                </a>
                @endif
                @endauth
            </nav>
            @endif
        </div>
        <p>
            <a class="underline hover:text-black/70" href="#_">ay.puzzler@gmail.com</a>
        </p>
    </div>
    <div class="px-8 py-24 mx-auto text-center md:px-12 lg:px-24 lg:pt-64 text-gray-500">
        <p class="max-w-xl mx-auto font-serif text-xl text-gray-500">
            <em>
                {{ config('app.name') }} is a powerful and intuitive personal library management system
                built with the Laravel framework. Track your book collection, manage loans,
                record your reading status, and jot down notes—all in one place.
                Integrated seamlessly with the Google Books API to discover new
                books with ease.
            </em>
        </p>
        <div class="grid grid-cols-1 gap-4 mx-auto mt-24 lg:gap-8 sm:grid-cols-2 lg:grid-cols-3 max-w-7xl">
            <a href="#_" class="overflow-hidden rounded-md bg-gray-100">
                <div class="p-4 lg:px-12 lg:py-24">
                    <img class="duration-500 rounded-lg shadow hover:shadow-3xl hover:-translate-y-4" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="#">
                    <p class="mt-8 text-sm text-gray-500">Lexington Themes</p>
                </div>
            </a>
            <a href="#_" class="overflow-hidden rounded-md bg-gray-100">
                <div class="p-4 lg:px-12 lg:py-24">
                    <img class="duration-500 rounded-lg shadow hover:shadow-3xl hover:-translate-y-4" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="#">
                    <p class="mt-8 text-sm text-gray-500">Creative Solutions</p>
                </div>
            </a>
            <a href="#_" class="overflow-hidden rounded-md bg-gray-100">
                <div class="p-4 lg:px-12 lg:py-24">
                    <img class="duration-500 rounded-lg shadow hover:shadow-3xl hover:-translate-y-4" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="#">
                    <p class="mt-8 text-sm text-gray-500">Digital Innovations</p>
                </div>
            </a>
        </div>
    </div>
</section>
<section>
    <div class="flex flex-col justify-center w-full gap-4 px-8 py-6 text-xs font-medium tracking-tight uppercase text-gray-400 lg:flex-row lg:gap-12 md:px-12 lg:px-24">
        <p class="max-w-2xl mx-auto text-sm text-gray-500">
            ©&nbsp;<a href="/" class="underline underline-offset-2">{{ config('app.name', 'Laravel') }}</a>
        </p>
    </div>
</section>

</main>
</div>
</body>
</html>
