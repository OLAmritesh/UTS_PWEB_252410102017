@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<img src="{{ asset($cover) }}" alt="Foto destinasi" class="w-full h-40 object-cover object-center">

<div class="max-w-2xl mx-auto px-5 pb-10">
    <div class="relative -mt-16 mx-4 bg-white rounded-3xl shadow-lg border border-garis">
        <div class="text-center px-6 pb-6">
            <div class="w-24 h-24 -mt-12 mx-auto rounded-full bg-hijauMuda text-putih ring-2 ring-hijau shadow flex items-center justify-center">
                <span class="ikon" style="font-size:56px">person</span>
            </div>
            <h1 class="font-judul text-3xl font-bold mt-3">{{ $username }}</h1>
            <div class="w-12 h-1 bg-hijau rounded mx-auto mt-2"></div>
        </div>

        <dl class="bg-hijau-muda/40 border-t border-garis px-6 py-4 space-y-2 text-sm">
            @foreach ($info as $label => $nilai)
                <div class="flex justify-between">
                    <dt class="text-redup">{{ $label }}</dt>
                    <dd class="font-medium">{{ $nilai }}</dd>
                </div>
            @endforeach
        </dl>
    </div>

    <h2 class="font-judul text-2xl font-bold mt-8 mb-4">Destinasi Impian</h2>
    <div class="grid gap-4 sm:grid-cols-3">
        @foreach ($impian as $d)
            <div class="relative h-40 rounded-2xl overflow-hidden shadow">
                <img src="{{asset($d['gambar'])}}" alt="{{$d['nama']}}" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-hijau/90 via-hijau/20 to-transparant"></div>
                <div class="absolute bottom-3 left-3 text-white">
                    <p class="font-semibold leading-tight">{{$d['nama']}}</p>
                    <p class="text-xs text-white/80">{{$d['kota']}}</p>
                </div>
            </div> 
        @endforeach
    </div>
</div>
@endsection