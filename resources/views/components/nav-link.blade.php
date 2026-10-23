@props(['active' => false])


@php
    $classes = $active
        ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-500 text-sm font-bold leading-5 text-[#C52E2B] focus:outline-hidden focus:border-red-700 transition duration-150 ease-in-out'
        : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-[#202321] hover:text-red-600 hover:border-red-300 focus:outline-hidden focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';

@endphp

<a {{ $attributes->merge(['class' => $classes, 'aria-current' => $active ? 'page' : null]) }}>{{ $slot }}</a>
