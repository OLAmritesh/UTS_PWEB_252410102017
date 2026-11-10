# Dolano.id

<img width="750" height="300" alt="logo dolano id" src="https://github.com/user-attachments/assets/c0bf110b-46d8-4584-b5d1-1d0164d0fb1b" />


Website panduan wisata Jawa Timur untuk masyarakat umum, dibuat dengan Laravel menggunakan arsitektur MVC dan sistem templating Blade. Proyek ini dibuat untuk memenuhi tugas UTS Pemrograman Website.

- Nama: Febiola Safira
- NIM : 252410102017
- Kelas: A

## Tentang Website

Dolano.id membantu wisatawan menemukan destinasi, dan kuliner di Jawa Timur. Pengguna masuk dengan username (login simulasi, tanpa database), lalu username tersebut diteruskan ke halaman lain lewat *request parameter*.

## Fitur

- Login: input username, dengan validasi (wajib diisi, minimal 3 karakter).
- Dashboard: sapaan sesuai username, pencarian destinasi, daftar destinasi, dan kuliner ikonik.
- Profil: foto sampul destinasi, ikon pengguna, data peran, wilayah, status akun, serta daftar destinasi impian.
- Pengelolaan: tabel destinasi berisi kota, kategori, rating, dan harga paket,.
- Responsif: tampilan menyesuaikan layar HP, tablet, dan laptop.
<img width="367" height="491" alt="image" src="https://github.com/user-attachments/assets/282a8018-53e1-4c43-821d-92e5404c35ce" />
<img width="230" height="488" alt="Screenshot 2026-11-10 195226" src="https://github.com/user-attachments/assets/342e6505-f5d2-4542-a305-22b2bdd7136c" />
<img width="1846" height="962" alt="Screenshot 2026-11-10 195118" src="https://github.com/user-attachments/assets/d7e789cb-aae8-4719-8681-dadcd72b95fe" />

## Teknologi

- Laravel (PHP) dengan pola MVC
- Blade Templating: `@extends`, `@section`, `@yield`, `@include`, dan Blade Component (`<x-navbar>`, `<x-footer>`)
- Tailwind CSS (via CDN)
- Google Fonts (Poltawski Nowy dan Poppins) dan Material Symbols

## Catatan

Proyek ini tidak menggunakan database, CRUD, maupun starter kit (Breeze, Jetstream, dan sejenisnya). Seluruh data berasal dari array di Controller, dan desain antarmuka dibuat sendiri.

https://youtu.be/PrzW6cYC9zk
