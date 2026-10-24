@props([
    'margin' => 'mx-[6%]',
    'color' => 'border-[#202321]',
    'weight' => 'border-b-4',
    'padding' => 'pt-0',
    'margin_top' => '-mt-0',
])

<div {{ $attributes->merge(['class' => "$margin $color $weight $padding $margin_top"]) }}></div>
