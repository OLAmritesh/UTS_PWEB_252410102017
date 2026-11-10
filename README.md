# Dolano.id
images/logo dolano.id.png

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

## Teknologi

- Laravel (PHP) dengan pola MVC
- Blade Templating: `@extends`, `@section`, `@yield`, `@include`, dan Blade Component (`<x-navbar>`, `<x-footer>`)
- Tailwind CSS (via CDN)
- Google Fonts (Poltawski Nowy dan Poppins) dan Material Symbols

## Catatan

Proyek ini tidak menggunakan database, CRUD, maupun starter kit (Breeze, Jetstream, dan sejenisnya). Seluruh data berasal dari array di Controller, dan desain antarmuka dibuat sendiri.