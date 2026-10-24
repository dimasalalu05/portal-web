<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'laravel project' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="h-full min-h-full bg-[#FCFBF8] text-slate-900 antialiased font-sans flex flex-col">

    {{-- Header --}}
    <x-header />

    {{-- Navbar --}}
    <x-navbar />

    {{-- Main --}}
    <main class="grow w-full px-[6%] mx-auto ">
        @if (($slot ?? null) && !$slot->isEmpty())
            {{ $slot }}
        @else
            <x-article-editorial-choise></x-article-editorial-choise>
        @endif
    </main>

    {{-- Footer --}}
    <footer class="bg-white border-t border-slate-200 py-6 text-center text-sm text-slate-500">
        &copy; {{ date('Y') }} Laravel App.
    </footer>
</body>

</html>
