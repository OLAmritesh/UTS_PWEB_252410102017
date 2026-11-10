@extends('layouts.app')

@section('title', 'pengelolaan')

@section('content')
<div class="max-w-7xl mx-auto px-5 py-10">
    <h1 class="font-judul text-3xl font-bold">Pengelolaan</h1>
    <p class="text-redup mb-6">Daftar destinasi wisata yang terdaftar di Dolano.id.</p>

    <div class="overflow-x-auto bg-white rounded-2xl shadow border border-garis">
        <table class="w-full text-sm text-left">
            <thead class="bg-hijau text-white">
                <tr>
                    <th class="px-4 py-3">No</th>
                    <th class="px-4 py-3">Destinasi</th>
                    <th class="px-4 py-3">Kota</th>
                    <th class="px-4 py-3">Kategori</th>
                    <th class="px-4 py-3">Rating</th>
                    <th class="px-4 py-3">Harga Paket</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($destinasi as $d)
                    <tr class="border-b border-garis">
                        <td class="px-4 py-3">{{ $loop->iteration }}</td>
                        <td class="px-4 py-3 font-medium">{{ $d['nama'] }}</td>
                        <td class="px-4 py-3">{{ $d['kota'] }}</td>
                        <td class="px-4 py-3">{{ $d['kategori'] }}</td>
                        <td class="px-4 py-3">★ {{ $d['rating'] }}</td>
                        <td class="px-4 py-3">Rp {{ number_format($d['harga'], 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection