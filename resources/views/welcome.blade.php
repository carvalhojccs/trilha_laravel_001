<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TRILHA LARAVEL</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="max-w-[2000px] mx-auto
text-neutral-900
dark:text-neutral-200
bg-white
dark:bg-neutral-800">
    <nav class="px-4 mx-auto bg-amber-400">
        <a href="/"
            class="z-50 transition-opacity rounded-sm focus:outline-none focus-visible:ring-4 ring-neutral-900 ring-offset-4 ring-offset-amber-400 lg:absolute lg:left-1/2 lg:-translate-x-1/2 lg:top-9 hover:opacity-75"
            aria-label="Go to homepage">
            <img src="{{ asset('assets/img/logo.svg') }}" width="200" class="w-48 md:w-64 lg:w-72"
                alt="Home Smart Logo">
        </a>
        <button id="menu"
            class="transition-colors rounded-sm lg:hidden focus:outline-none focus-visible:ring-4 ring-neutral-900 ring-offset-4 ring-offset-amber-400 text-neutral-900 hover:text-neutral-600"
            aria-expanded="false" aria-label="Open Menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <div role="menubar"
            class="absolute left-0 right-0 z-40 flex-col items-center hidden gap-4 p-6 text-lg text-center shadow-xl top-16 bg-amber-400 lg:flex lg:flex-row lg:static lg:shadow-none lg:justify-between lg:w-full">


            <a role="menuitem"
                class="px-6 py-2 text-white transition-shadow bg-teal-900 rounded-md shadow-xl hover:shadow-none focus:outline-none focus-visible:ring-4 ring-neutral-900 ring-offset-4 ring-offset-amber-400"
                href="{{ route('login') }}">
                Login
            </a>
            <a role="menuitem"
                class="px-6 py-2 text-white transition-shadow bg-teal-900 rounded-md shadow-xl hover:shadow-none focus:outline-none focus-visible:ring-4 ring-neutral-900 ring-offset-4 ring-offset-amber-400"
                href="{{ route('register') }}">
                Registrar
            </a>
        </div>
        </div>
    </nav>
    <header class="relative pt-16 md:pt-24 lg:pt-48">
        <div
            class="absolute inset-0 bottom-8 md:bottom-24 xl:bottom-32 -z-10 bg-gradient-to-b from-amber-400 to-amber-600">
        </div>
        <div class="container grid grid-rows-1 px-2 mx-auto place-items-end">
            <img src="./assets/couch.png" class="col-start-1 col-end-2 row-start-1 row-end-2 mx-auto " alt="Couch">
            <img src="{{ asset('assets/img/app.svg') }}"
                class="w-40 col-start-1 col-end-2 row-start-1 row-end-2 mx-auto sm:w-52 md:w-64 lg:w-72" alt="app">
        </div>
    </header>
</body>

</html>
