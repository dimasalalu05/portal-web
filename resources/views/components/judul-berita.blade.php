@props([
    'color' => 'text-[#202321]',
    'width' => 'text-2xl',
    'font' => 'font-bold',
])


<h1 {{ $attributes->merge(['class' => "$color $width $font"]) }}>{{ $slot }}</h1>
