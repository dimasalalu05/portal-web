<article class="space-y-4 mt-3">
    <div class="flex justify-between">
        <span class="text-[#C52E2B] text-xs font-bold ">SOROTAN HARI INI</span>
        <x-date />
    </div>

    {{-- IMAGE --}}
    <div>
        <img src="{{ asset('storage/img/wallpaper.png') }}" alt="">
    </div>

    {{-- TITLE --}}
    <div>
        {{-- <p class="text-[#202321] text-5xl">Menata ulang perjalanan kota, mendekatkan warga ke transportasi publik</p> --}}
        <x-news-headline width="text-5xl" />
    </div>

    {{-- SUB TITLE --}}
    <div>
        <p class="text-[#6B706D] text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores rem ea eius
            deleniti magnam porro dicta neque veritatis illo accusantium?</p>
    </div>

    {{-- KETERANGAN --}}
    <div>
        <span class="text-[#6B706D] text-xs">Wahyu Seto</span>
        <span class="text-[#6B706D] text-2xl">.</span>
        <span class="text-[#6B706D] text-xs">Nasional</span>
        <span class="text-[#6B706D] text-2xl">.</span>
    </div>

</article>
<x-underline margin='mt-[0%]' padding='pt-9' />
