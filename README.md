# Biodata Perserta JCC

<p>Nama : Eko Muchamad Haryono</p>
<p>Kelas : Laravel</p>
<p>Email : <a>ekomh13@gmail.com</a></p>

# Link Deploy

Deploy Heroku : https://app-kasir-laravel-8-jcc-ryo.herokuapp.com/ (Deploy Link Sudah Bisa)

Notes :

-   Bug PDF Selesei Penyebab nya Route PDF Tertimpa Excel Aplikasi 100% Jalan Deploy dan Lokal.

## Aplikasi Kasir Sederhana V1.0, Kelas JCC Partnership - Project Challenge (Laravel Project) Jabar Coding Camp (JCC)

Jabar Coding Camp (JCC), Aplikasi Kasir V1.0 (Laravel Project), Kelas JCC Partnership - Project Challenge (Tantangan).<br>
Anda diminta untuk membuat aplikasi kasir sederhana yang mencakup fitur:

1. Mencatat transaksi pembelian barang
2. Menampilkan daftar transaksi pembelian barang
3. Authentikasi login pengguna
4. Pengaturan data pengguna
5. Pengaturan data master produk

## Cara Instalasi ke Server Lokal :

-   Follow Github Saya
-   Star Repo Github Saya
-   Fork Repo Github Saya
-   clone project repo saya dengan cara menuliskan pada terminal/cmd/git bash : git clone https://github.com/ekomh170/app_laravel_8_kasir_jcc.git
-   lalu masuk ke direktori repo yg sudah di clone dengan ketik lg pada terminal/cmd/git bash <b>cd app_laravel_8_kasir_jcc</b>
-   lalu ketik composser install dan php artisan key generate (jangan lupa salin dan setting file env)
-   migrate database pada terminal/cmd/git bash
-   jalankan php artisan db:seed pada terminal/cmd/git bash

Notes : Jika Sudah Menjalankan db:seed (Seeder Laravel) yang berfungsi untuk membuatkan data secara otomatis pada database untuk password akun nya adalah :

<b>Akun Admin :</b>

<ul>
<li>email : ekomh13@gmail.com</li>
<li>password : Amano2829</li>
</ul>

<b>Akun Kasir :</b>

<ul>
<li>email : dara@gmail.com</li>
<li>password : Amano2829</li>
</ul>

<ul>
<li>email : amalia@gmail.com</li>
<li>password : Amano2829</li>
</ul>

## Fitur Role Atau Pembatasan Menu Untuk Setiap Users

-   Admin
-   Kasir

## Fitur Aplikasi

-   Login<br>
-   Register<br>
-   Logout<br>
-   Halaman Utama<br><br>

    A. Profile<br>

-   Ubah Data (Data Profile)<br>
-   Detail Data (Data Profile)<br><br>

    B. Data Pengguna<br>

-   Tambah Data (Data Pengguna)<br>
-   Ubah Data (Data Pengguna)<br>
-   Hapus Data (Data Pengguna)<br>
-   Detail Data (Data Pengguna)<br>
-   Cari Data (Data Pengguna)<br>
-   Print Data (Data Pengguna)<br>
-   PDF Data (Data Pengguna)<br>
-   Print Data Detail (Data Pengguna)<br>
-   PDF Data Detail (Data Pengguna)<br>
-   Excel Export Data (Data Pengguna)<br><br>

    C. Master Barang<br>

-   Tambah Data (Master Barang)<br>
-   Ubah Data (Master Barang)<br>
-   Hapus Data (Master Barang)<br>
-   Detail Data (Master Barang)<br>
-   Cari Data (Master Barang)<br>
-   Print Data (Master Barang)<br>
-   PDF Data (Master Barang)<br>
-   Print Data Detail (Master Barang)<br>
-   PDF Data Detail (Master Barang)<br>
-   Excel Export Data (Master Barang)<br><br>

    C. Transaksi Pembelian<br>

-   Tambah Data (Transaksi Pembelian)<br>
-   Ubah Data (Transaksi Pembelian)<br>
-   Hapus Data (Transaksi Pembelian)<br>
-   Detail Data (Transaksi Pembelian)<br>
-   Cari Data (Transaksi Pembelian)<br>
-   Print Data (Transaksi Pembelian)<br>
-   PDF Data (Transaksi Pembelian)<br>
-   Print Data Detail (Transaksi Pembelian)<br>
-   PDF Data Detail (Transaksi Pembelian)<br>
-   Excel Export Data (Transaksi Pembelian)<br><br>

    C. Transaksi Pembelian Barang<br>

-   Tambah Data (Transaksi Pembelian Barang)<br>
-   Ubah Data (Transaksi Pembelian Barang)<br>
-   Hapus Data (Transaksi Pembelian Barang)<br>
-   Detail Data (Transaksi Pembelian Barang)<br>
-   Cari Data (Transaksi Pembelian Barang)<br>
-   Print Data (Transaksi Pembelian Barang)<br>
-   PDF Data (Transaksi Pembelian Barang)<br>
-   Print Data Detail (Transaksi Pembelian Barang)<br>
-   PDF Data Detail (Transaksi Pembelian Barang)<br>
-   Excel Export Data (Transaksi Pembelian Barang)<br><br>

## Aplikasi Screenshot

<img src="public/assets_readme/img/Halaman_Utama.PNG" alt="Halaman Utama">
<img src="public/assets_readme/img/Halaman_Utama_Setelah_Login.PNG" alt="Halaman Setalah Login">
<img src="public/assets_readme/img/Menu_Admin.PNG" alt="Menu Admin">
<img src="public/assets_readme/img/Menu_Kasir.PNG" alt="Menu Kasir">
<img src="public/assets_readme/img/Daftar_Transaksi.PNG" alt="Daftar Transaksi">
<img src="public/assets_readme/img/Harga_Total.PNG" alt="Harga Total">

## Alat Yang Digunakan Untuk Membuat Web :

A. Hardware :
Laptop Aspire E1-472G. Speaksifikasi :

-   Ram : 4GB DD3 L Memory
-   Prosesor : Intel Core i5-4200U 1.6 GHz with Turbo Boost up to 2.5 GHz
-   Tipe System : 64 bit
-   VGA : NVIDIA GEFORCE GT 720M with 2GB Dedicated VRAM
-   SSD : 128 GB

B. Software :

-   WAMP
-   Visual Studio Code
-   Sublime Merge
-   Git
-   PHP 7.4.9

C. Komponen

-   Laravel 8
-   Bootstrap 4 & 5
-   Template Tambahan :
    -   Sb Admin 2 (Bootstrap 4) (Untuk Template Admin Full)
    -   Zinc (Bootstrap 5) (Khusus Halaman Utama)
-   Library :
    -   Carbon Laravel Time
    -   Dompdf
    -   Laravel Excel
    -   Sweet Alert
    -   Datatables
    -   TinyMCE

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
