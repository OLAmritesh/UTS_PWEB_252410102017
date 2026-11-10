<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private function dataDestinasi()
    {
        return [
            ['nama' => 'Gunung Bromo', 'kota' => 'Probolinggo', 'kategori' => 'Gunung', 'label' => 'Private Trip', 'rating' => 4.9, 'harga' => 450000,
             'deskripsi' => 'Lautan pasir dan kawah aktif dengan sensasi berkendara jip klasik.', 'gambar' => 'images/bromo.jpg'],
            ['nama' => 'Kawah Ijen', 'kota' => 'Banyuwangi', 'kategori' => 'Gunung', 'label' => 'Open Trip', 'rating' => 4.8, 'harga' => 320000,
             'deskripsi' => 'Fenomena api biru dan danau kawah berwarna toska.', 'gambar' => 'images/ijen.jpg'],
            ['nama' => 'Tumpak Sewu', 'kota' => 'Lumajang', 'kategori' => 'Air Terjun', 'label' => 'Premium Trip', 'rating' => 4.9, 'harga' => 550000,
             'deskripsi' => 'Air terjun setengah lingkaran di kaki Gunung Semeru.', 'gambar' => 'images/tumpaksewu.jpg'],
            ['nama' => 'Pantai Pulau Merah', 'kota' => 'Banyuwangi', 'kategori' => 'Pantai', 'label' => 'Family Trip', 'rating' => 4.7, 'harga' => 150000,
             'deskripsi' => 'Pantai dengan bukit merah unik dan matahari tenggelam keemasan.', 'gambar' => 'images/pulaumerah.jpg'],
        ];
    }

    private function dataKuliner()
    {
        return [
            ['nama' => 'Rawon Setan Embong Malang', 'lokasi' => 'Surabaya Pusat', 'rating' => 4.8, 'harga' => 'Rp 45.000 / porsi', 'gambar' => 'images/rawonSetanMalang.jpg'],
            ['nama' => 'Sego Tempong Mbok Wah', 'lokasi' => 'Banyuwangi', 'rating' => 4.9, 'harga' => 'Rp 25.000 - Rp 40.000', 'gambar' => 'images/segoTempongMbokWah.jpg'],
            ['nama' => 'Bakso Presiden Pinggir Rel', 'lokasi' => 'Kota Malang', 'rating' => 4.7, 'harga' => 'Rp 20.000 - Rp 35.000', 'gambar' => 'images/baksoPresiden.jpg'],
        ];
    }

    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate(['username' => 'required|min:3'], 
        ['username.required' => 'Username wajib diisi.',
        'username.min'      => 'Username minimal 3 karakter.'],);
        return redirect()->route('dashboard', ['username' => $request->username]);
    }

    public function dashboard(Request $request)
    {
        $cari   = $request->query('cari');
        $daftar = $this->dataDestinasi();

        if ($cari) {
            $daftar = array_filter($daftar, function ($d) use ($cari) {
                return stripos($d['nama'] . ' ' . $d['kota'], $cari) !== false;
            });
        }

        return view('dashboard', [
            'username'  => $request->query('username', 'Tamu'),
            'cari'      => $cari,
            'destinasi' => $daftar,
            'kuliner'   => $this->dataKuliner()
        ]);
    }

    public function pengelolaan(Request $request)
    {
        return view('pengelolaan', [
            'username'  => $request->query('username', 'Tamu'),
            'destinasi' => $this->dataDestinasi(),
        ]);
    }

    public function profile(Request $request)
    {
        return view('profile', [
            'username' => $request->query('username', 'Tamu'),
            'cover'    => 'images/bromo.jpg',
            'info'     => [
                'Peran'       => 'Wisatawan',
                'Wilayah'     => 'Jawa Timur',
                'Status akun' => 'Aktif',
            ],
            'impian' =>[
                ['nama' => 'Gunung Bromo', 'kota' => 'Probolinggo', 'gambar' =>'images/bromo.jpg'],
                ['nama' => 'Kawah Ijen', 'kota' => 'Banyuwangi', 'gambar' =>'images/ijen.jpg'],
                ['nama' => 'Tumpak Sewu', 'kota' => 'Lumajang', 'gambar' =>'images/tumpakSewu.jpg']
            ],
        ]);
    }
}