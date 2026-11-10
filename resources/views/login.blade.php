@extends('layouts.app')
@section('tittle', 'Masuk')
@section('content')
<div class="min-h-screen bg-hijau flex items-center justify-center p-4 md:p-8">
    <div class="w-full max-w-5xl bg-white rounded-[2rem] p-3 md:p-4 grid md:grid-cols-2 gap-4 shadow-2xl">
        <div class="flex flex-col justify-center px-6 py-10 md:px-12">
            <img src="{{asset('images/logo dolano.id.png')}}" alt="Dolano.id" class="md:hidden h-10 w-auto mb-8 self-start">
            <h1 class="font-judul text-4xl font-bold">Selamat Datang</h1>
            <p class="text-sm text-redup mt-3 mb-8">Masukkan username untuk mulai menjelajah wisata Jawa Timur.</p>

            <form action="{{route('login.process')}}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <div class="relative">
                        <input type="text" name="username" value="{{old('username')}}" placeholder="Username" class="w-full border border-garis rounded-full px-6 py-3.5 pr-12 outline-none">
                        <span class="ikon absolute right-5 top-1/2 -translate-y-1/2 text-redup">person</span>
                    </div>

                    @error('username')
                        <p class="text-red-600 text-sm mt-2 ml-4">{{$message}}</p>
                    @enderror
                </div>

                <button type="submit" class="w-full bg-orangeMuda text-white py-3 rounded-full font-semibold hover:opacity-90 transition">Masuk</button>
            </form>
        </div>

        <div class="relative hidden md:block rounded-3xl overflow-hidden min-h-[520px]">
            <img src="{{asset('images/ijen.jpg')}}" alt="Kawah Ijen" class="absolute inset-0 w-full h-full object-hover">
            <div class="absolute inset-0 bg-gradient-to-b from-hijau/50 via-transparent to-transparent"></div>

            <div class="absolute top-5 left-5 bg-putih/90 backdrop-blur rounded-2xl px-4 py-2 shadow">
                <img src="{{asset('images/logo dolano.id.png')}}" alt="Dolano.id" class="h-9 w-auto">
            </div>
        </div>
    </div>
</div>
@endsection
