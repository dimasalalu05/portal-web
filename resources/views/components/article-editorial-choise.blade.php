{{-- HALAMAN ARTICLE PILIHAN REDAKSI --}}
<article>
    {{-- OVERLINE --}}
    <x-underline margin='mt-[0%]' padding='pt-5' />

    <div class="flex justify-between">
        {{-- JUDUL HALAMAN --}}
        <h1 class="text-[#202321] text-[27px] font-bold">Pilihan Redaksi</h1>

        {{-- RUTE SEMUA PILIHAN REDAKSI --}}
        <x-nav-link class="border-none" href='#' :active="request()->routeIs('pilihan redaksi')">
            Kurasi hari ini &raquo;
        </x-nav-link>
    </div>

    <div>
        {{-- IMAGE PERTAMA PILIHAN REDAKSI --}}
        <a href="#">
            <img src="{{ asset('storage/img/wallpaper.png') }}" alt="">
        </a>
    </div>

    <div>
        {{-- RUTE KATEGORI --}}
        <x-nav-link class="text-[#C52E2B]  text-sm" href='#' :active="request()->routeIs('Ekonomi')">
            <b>Ekonomi</b>
        </x-nav-link>

        {{-- JUDUL BERITA --}}
        <a href="#">
            <x-news-headline />
        </a>
    </div>

    <div>
        {{-- TANGGAL BERITA --}}
        <x-date />
    </div>
</article>
