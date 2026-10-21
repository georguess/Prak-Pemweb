<?php
/**
 * Praktikum 4: Implementasi Aplikasi Web Dinamis Menggunakan PHP
 * File: proses_tambah.php
 * Skrip pemroses penambahan data mahasiswa dari formulir (HTTP POST).
 */

require_once __DIR__ . '/includes/functions.php';

// Hanya menerima metode POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    set_flash_message('danger', 'Akses tidak valid. Gunakan formulir untuk menambah data.');
    header('Location: index.php#form-tambah');
    exit;
}

// Ambil data dari formulir
$npm           = $_POST['npm'] ?? '';
$nama          = $_POST['nama'] ?? '';
$program_studi = $_POST['program_studi'] ?? '';
$angkatan      = $_POST['angkatan'] ?? '';
$email         = $_POST['email'] ?? '';

// Proses penambahan dengan validasi server-side
$hasil = tambah_mahasiswa($npm, $nama, $program_studi, $angkatan, $email);

if ($hasil['status']) {
    set_flash_message('success', $hasil['message']);
    header('Location: index.php#daftar-mahasiswa');
} else {
    set_flash_message('danger', $hasil['message']);
    header('Location: index.php#form-tambah');
}
exit;
