@props([
    'judul' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facere quibusdam magni, quae maxime sit',
    'color' => 'text-[#202321]',
    'width' => 'text-2xl',
    'font' => 'font-bold',
])


<h1 {{ $attributes->merge(['class' => " $judul $color $width $font"]) }}>{{ $judul }}</h1>
