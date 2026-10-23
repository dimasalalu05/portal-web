<nav class="w-full">
    <div class="mx-[6%] flex items-center justify-between pt-2">
        <x-nav-link href="#" :active="request()->routeIs('beranda')">Beranda</x-nav-link>
        <x-nav-link href="#" :active="request()->routeIs('Nasional')">Nasional</x-nav-link>
        <x-nav-link href="#" :active="request()->routeIs('Ekonomi')">Ekonomi</x-nav-link>
        <x-nav-link href="#" :active="request()->routeIs('Teknologi')">Teknologi</x-nav-link>
        <x-nav-link href="#" :active="request()->routeIs('Olahraga')">Olahraga</x-nav-link>
        <x-nav-link href="#" :active="request()->routeIs('Gaya Hidup')">Gaya Hidup</x-nav-link>
        <x-nav-link href="#" :active="request()->routeIs('Internasional')">Internasional</x-nav-link>
        <x-nav-link href="#" :active="request()->routeIs('Opini')">opini</x-nav-link>
        <x-nav-link href="#" :active="request()->routeIs('Video')">Video</x-nav-link>
        <x-nav-link href="#" :active="request()->routeIs('Liputan Khusus')">Liputan Khusus</x-nav-link>
    </div>

    {{-- UNDERLINE --}}
    <div class="mx-[6%] border-b-2 border-gray-300 pt-3"></div>

    {{-- SUB NAVBAR --}}
    <x-sub-navbar />
</nav>
