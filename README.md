# Direktori Startup Lokal

Website Direktori Startup Lokal merupakan proyek Ujian Tengah Semester (UTS) mata kuliah Rekayasa Web. Website ini dibuat untuk menampilkan informasi mengenai startup yang beroperasi di Indonesia, meliputi nama perusahaan, bidang industri, pendiri, logo, website resmi, dan deskripsi singkat.

## Identitas Mahasiswa

- **Nama:** Rio Oktaviaberd
- **NIM:** 251011700836
- **Kode Kelas:** 03SIFE003
- **Mata Kuliah:** Rekayasa Web

## Teknologi yang Digunakan

- **Laravel 13** — framework pengembangan aplikasi web.
- **PHP 8.3** — bahasa pemrograman sisi server.
- **MySQL** — sistem manajemen basis data.
- **Bootstrap 5** — framework CSS untuk desain antarmuka.
- **Blade** — template engine Laravel.
- **Git dan GitHub** — pengelolaan versi dan penyimpanan kode sumber.

## Fitur Website

- Halaman Beranda sebagai halaman utama website.
- Halaman Daftar Startup yang menampilkan 10 data startup.
- Halaman Detail Startup untuk melihat informasi setiap startup.
- Informasi nama, industri, pendiri, logo, website resmi, dan deskripsi startup.
- Navigasi antarhalaman.
- Penyimpanan data menggunakan database dan pengisian data awal melalui Seeder.

## Daftar Startup

Website ini menampilkan informasi dari 10 startup berikut:

1. Gojek
2. Tokopedia
3. Traveloka
4. Bukalapak
5. Blibli
6. DANA
7. Ruangguru
8. Halodoc
9. Xendit
10. Bibit

## Persyaratan Sistem

- PHP 8.3 atau versi yang sesuai dengan kebutuhan Laravel.
- Composer.
- MySQL.
- Node.js dan NPM untuk kebutuhan aset pengembangan jika diperlukan.
- Laragon atau lingkungan server lokal sejenis.

## Cara Menjalankan Proyek

1. Clone repositori GitHub:

   ```bash
   git clone <URL_REPOSITORI>
   ```

2. Masuk ke direktori proyek:

   ```bash
   cd UTS-251011700836
   ```

3. Instal dependensi PHP:

   ```bash
   composer install
   ```

4. Salin konfigurasi lingkungan:

   ```bash
   copy .env.example .env
   ```

5. Buat application key:

   ```bash
   php artisan key:generate
   ```

6. Buat database MySQL dengan nama `db_uts_251011700836`, lalu sesuaikan konfigurasi database di file `.env`.

7. Jalankan migration:

   ```bash
   php artisan migrate
   ```

8. Isi data awal startup:

   ```bash
   php artisan db:seed --class=StartupSeeder
   ```

9. Jalankan server lokal:

   ```bash
   php artisan serve
   ```

10. Buka alamat berikut di browser:

    `http://127.0.0.1:8000`

**Catatan:** Langkah instalasi di atas ditujukan untuk lingkungan baru. Jika database sudah berisi data, periksa terlebih dahulu sebelum menjalankan migration atau Seeder agar tidak menimbulkan duplikasi data.

## Struktur Direktori Utama

- `app/Models/Startup.php` — model data startup.
- `app/Http/Controllers/StartupController.php` — pengelolaan tampilan data startup.
- `database/migrations/` — struktur tabel database.
- `database/seeders/StartupSeeder.php` — data awal startup.
- `resources/views/home.blade.php` — halaman beranda.
- `resources/views/startups/index.blade.php` — halaman daftar startup.
- `resources/views/startups/show.blade.php` — halaman detail startup.
- `resources/views/layouts/app.blade.php` — layout utama website.
- `public/assets/images/` — gambar logo startup.
- `public/Bootstrap/` — aset Bootstrap lokal.

## Repositori GitHub

[Direktori Startup Lokal — GitHub](https://github.com/riooktaviaberd/Rekayasa-web_Rio-OktVIberd_251011700836_03SIFE003)

---

Proyek ini dibuat untuk memenuhi tugas Ujian Tengah Semester mata kuliah Rekayasa Web.
