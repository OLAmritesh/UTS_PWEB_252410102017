@props(['username'])

@php
    $beranda=route('dashboard', ['username' => $username]);
@endphp

<header class="bg-putih shadow sticky top-0 z-50">
    <div class="max-w-7x1 mx-auto px-5 py-3 flex items-center justify-between gap-4">
        <a href="{{$beranda}}">
            <img src="{{asset('images/logo dolano.id.png')}}" alt="Dolano.id" class="h-10 w-auto">
        </a>

        <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
            <a href="{{$beranda}}" class="hover:text-hijau">Beranda</a>
            <a href="{{$beranda}}#destinasi" class="hover:text-hijau">Destinasi</a>
            <a href="{{$beranda}}#kuliner" class="hover:text-hijau">Kuliner</a>
            <a href="{{route('pengelolaan', ['username' => $username])}}" class="hover:text-hijau">Pengelolaan</a>
        </nav>

        <div class="flex items-center gap-3">
            <a href="{{route('profile', ['username' => $username])}}" title="Profil" class="w-9 h-9 rounded-full bg-putih text-hijau flex items-center justify-center hover:ring-2 hover:ring-hijau">
                <span class="ikon">person</span>
            </a>
            <a href="{{route('login')}}" class="bg-hijau text-putih text-sm px-4 py-2 rounded-full hover:bg-hijauMuda">Keluar</a>
        </div>
    </div>

    <nav class="md:hidden flex gap-6 overflow-x-auto border-t px-5 py-2 text-sm whitespace-nowrap">
        <a href="{{$beranda}}">Beranda</a>
        <a href="{{$beranda}}#destinasi">destinasi</a>
        <a href="{{$beranda}}#kuliner">kuliner</a>
        <a href="{{route('pengelolaan', ['username' => $username])}}">Pengelolaan</a>
    </nav>
</header>
