# SIMA - Praktikum 4: Aplikasi Web Dinamis Menggunakan PHP

Sistem Informasi Data Mahasiswa (SIMA) berbasis PHP. Data disimpan sementara di `$_SESSION` (tanpa database).

## Struktur Folder

```
04/
├── img/
│   ├── avatar-default.svg
│   └── logo-sima.svg
├── includes/
│   ├── footer.php
│   ├── functions.php
│   └── header.php
├── index.php
├── proses_hapus.php
├── proses_tambah.php
├── README.md
└── style.css
```

## Cara Menjalankan

Butuh PHP 8.0 atau lebih baru (karena memakai `str_contains()`).

```bash
cd 04
php -S localhost:8000
```

Buka `http://localhost:8000` di browser.

## Fitur

- Tampil data mahasiswa dari array di `$_SESSION` (`foreach` dan `<?= ?>`)
- Tambah data lewat HTTP POST dengan validasi server-side
- Hapus data berdasarkan NPM
- Pencarian lewat HTTP GET (`?search=`)
- Flash message dengan pola redirect (`header('Location: ...')`)
- Proteksi XSS dengan `htmlspecialchars()`
- Modularitas berkas dengan `require_once`

## Catatan

- Data kembali ke 3 data awal saat sesi browser berakhir.
- Praktikum 5 akan memindahkan penyimpanan ke MySQL.
