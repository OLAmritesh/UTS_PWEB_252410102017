@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')
    <section class="max-w-7xl mx-auto px-5 py-6">
        <div class="relative rounded-3xl overflow-hidden min-h-[380px] flex items-end p-8 md:p-14">
            <img src="{{asset('images/bromo.jpg')}}" alt="Gunung Bromo" class="absolute inset-0 w-full h-full object-cover obcet-bottom">
                <div class="absolute inset-0 bg-gradient from-putih/60"></div>

            <div class="absolute inset-0" style="background: linear-gradient(to top right,
                rgba(0, 81, 41, 0.99) 0%,
                rgba(0, 81, 41, 0.75) 15%,
                rgba(0, 81, 41, 0.25) 50%,
                rgba(0, 81, 41, 0) 100%);">
            </div>

            <div class="relative z-10 text-white">
                <p class="text-sm text-putih font-semibold mb-2">Halo, {{$username}}</p>
                <h1 class="font-judul text-3xl md:text-5xl font-bold drop-shadow-lg">Jelajahi Pesona Jawa Timur Bersama Dolano.id</h1>
                <p class="mt-4 text-white/90 drop-shadow">Temukan Gunung, Air Terjun, Hingga pantai dalam satu platform.</p>
            </div>
        </div>

        <form action="{{route('dashboard')}}" method="GET" class="-mt-8 mx-3 md:mx-10 bg-white rounded-2xl shadow-lg p-4 flex flex-col sm:flex-row gap-3 relative">
            <input type="hidden" name="username" value="{{$username}}">
            <input type="text" name="cari" value="{{$cari}}" placeholder="Cari Bromo, Banyuwangi..."
                    class="flex-1 bg-abu rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-hijau">
            <button type="submit" class="bg-hijau text-putih px-6 py-3 rounded-xl hover:bg-hijauMuda">Cari Destinasi</button>
        </form>
    </section>

    <section id="destinasi" class="max-w-7xl mx-auto px-5 mt-14">
        <h2 class="font-judul text-3xl font-bold">Destinasi</h2>
        <p class="text-redup mb-6">Tempat wisata paling diminati.</p>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @forelse ($destinasi as $d)
                @include('partials.kartu_destinasi', ['item' => $d])
            @empty
                <p class="col-span-full text-redup">Destinasi tidak ditemukan.</p>
            @endforelse
        </div>
    </section>

    <section id="kuliner" class="max-w-7xl mx-auto px-5 mt-14">
        <h2 class="font-judul text-3xl font-bold mb-6">Kuliner Ikonik</h2>
        <div class="grid gap-4 md:grid-cols-3">
            @foreach ($kuliner as $makan)
                <div class="bg-white rounded-2xl border border-garis shadow p-4 flex gap-4">
                    <img src="{{asset($makan['gambar'])}}" alt="{{$makan['nama']}}" class="w-24 h-24 rounded-xl object-cover">
                    <div>
                        <h3 class="font-semibold loading-tight">{{$makan['nama']}}</h3>
                        <p class="text-xs text-redup">{{$makan['lokasi']}} • ★ {{$makan['rating']}}</p>
                        <p class="mt-2 text-sm font-bold text-hijau">{{$makan['harga']}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
