@props(['active' => false])

@php
    $classes = $active
        ? 'inline-flex items-center px-1 pt-1 text-2xl text-red-500 transition duration-150 ease-in-out'
        : 'inline-flex items-center px-1 pt-1 text-[#6B706D] text-xs hover:text-red-400 transition duration-150 ease-in-outr';
@endphp

<a {{ $attributes->merge(['class' => $classes, 'aria-current' => $active ? 'page' : null]) }}> {{ $slot }}</a>
