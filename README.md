# Sistem Manajemen Klinik Hewan

Sistem manajemen klinik hewan berbasis web yang dibangun menggunakan Laravel dan Filament Admin Panel. Aplikasi ini membantu klinik hewan dalam mengelola data pasien, pemilik hewan, dan perawatan dengan lebih efisien.

## Fitur Utama

### 1. Manajemen Pemilik Hewan (Owners)
- Data lengkap pemilik hewan
  - Nama
  - Email
  - Nomor Telepon
  - Alamat
- Pencarian dan pengurutan data
- Manajemen hewan peliharaan untuk setiap pemilik

### 2. Manajemen Pasien Hewan (Patients)
- Informasi detail hewan
  - Nama
  - Spesies
  - Ras
  - Umur
  - Catatan tambahan
- Pencatatan riwayat perawatan
- Keterkaitan dengan data pemilik

### 3. Manajemen Perawatan (Treatments)
- Pencatatan perawatan untuk setiap hewan
- Informasi detail perawatan
  - Nama perawatan
  - Deskripsi
  - Harga
  - Tanggal perawatan
  - Catatan tambahan

## Persyaratan Sistem

- PHP >= 8.1
- Composer
- MySQL >= 8.0
- Node.js & NPM
- Git

## Instalasi

1. Clone repository
```bash
git clone [url-repository]
cd [nama-folder]
```

2. Install dependencies
```bash
composer install
npm install
```

3. Setup environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Konfigurasi database di file `.env`
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=username
DB_PASSWORD=password
```

5. Jalankan migrasi database
```bash
php artisan migrate
```

6. Install Filament
```bash
php artisan filament:install
```

7. Buat user admin
```bash
php artisan make:filament-user
```

8. Compile assets
```bash
npm run build
```

9. Jalankan server
```bash
php artisan serve
```

## Penggunaan

1. Akses aplikasi melalui browser: `http://localhost:8000`
2. Login menggunakan kredensial admin yang telah dibuat
3. Mulai mengelola data klinik melalui panel admin

## Struktur Proyek

```
├── app/
│   ├── Filament/
│   │   └── Resources/
│   │       ├── OwnerResource/
│   │       ├── PatientResource/
│   │       └── TreatmentResource/
│   └── Models/
│       ├── Owner.php
│       ├── Patient.php
│       └── Treatment.php
├── database/
│   └── migrations/
├── resources/
│   └── views/
└── routes/
```

## Teknologi yang Digunakan

- [Laravel](https://laravel.com) - Framework PHP
- [Filament](https://filamentphp.com) - Admin Panel
- [MySQL](https://www.mysql.com) - Database
- [Tailwind CSS](https://tailwindcss.com) - CSS Framework

## Kontribusi

1. Fork repository
2. Buat branch fitur (`git checkout -b fitur-baru`)
3. Commit perubahan (`git commit -m 'Menambahkan fitur baru'`)
4. Push ke branch (`git push origin fitur-baru`)
5. Buat Pull Request

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).

## Kontak

Untuk pertanyaan dan dukungan, silakan hubungi:
- Email: [fariziadam508@gmail.com]
- Website: [https://fariziadam.netlify.app]
