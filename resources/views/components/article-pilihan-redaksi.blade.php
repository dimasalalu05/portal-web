<article>
    <x-underline margin='mt-[0%]' padding='pt-5' />

    <div class="flex justify-between">
        <h6 class="text-[#202321] text-[27px] font-bold">Pilihan Redaksi</h6>
        <span class="text-[#C52E2B] text-xs">Kurasi hari ini &raquo;</span>
    </div>

    <div>
        <img src="{{ asset('storage/img/wallpaper.png') }}" alt="">
    </div>

    <div>
        <x-nav-link class="text-[#C52E2B]  text-sm" href='#' :active="request()->routeIs('Ekonomi')"><b>Ekonomi</b></x-nav-link>

        <x-judul-berita>Dari atap pabrik, energi bersih mulai mengambil peran</x-judul-berita>

    </div>

    <div>
        <span>16 Okt 2026</span>
        <span>5 menit lalu</span>
        <a href="" class="text-[#6B706D] text-xs"> baca selengkapnya &raquo;</a>
    </div>
</article>
