<div class="bg=white rounded-2x1 overflow-hidden border border-garis shadow hover:shadow-lg transition group flex flex-col">
    <div class="relative aspect-[4/3] overflow-hidden">
        <img src="{{asset($d['gambar'])}}" alt="{{$d['nama']}}" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
        <span class="absolute top-3 right-3 bg-white/90 px-2.5 py-1 rounded-full text-xs font-bold flex items-center gap-1">
            <span class="ikon text-orange" style="font-size:16px">star</span> {{$d['rating']}}
        </span>
        <span class="absolute bottom-3 left-3 bg-hijau text-white text-xs px-2.5 py-0.5 rounded">{{$d['label']}}</span>
    </div>

    <div class="p-5 flex-1 flex flex-col justify-between">
        <div>
            <p class="text-xs text-redup">{{$d['kota']}}</p>
            <h3 class="font-judul text-x1 font-semibold group-hover:text-hijau">{{$d['nama']}}</h3>
            <p class="text-sm text-redup mt-1">{{$d['deskripsi']}}</p>
        </div>

        <div class="mt-4 pt-4 border-t border-garis">
            <span class="block text-xs text-redup">Mulai dari</span>
            <span class="font-bold text-hijau">Rp {{number_format($d['harga'], 0,',', '.')}}</span>
        </div>
    </div>
</div>
