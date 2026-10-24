@props([
    'tanggal' => '20 Okt 2026',
    'color' => 'text-[#6B706D]',
    'width' => 'text-xs',
])

<span {{ $attributes->merge(['class' => "$color $color $width"]) }}>{{ $tanggal }}</span>
