<?php
/**
 * Praktikum 4: Implementasi Aplikasi Web Dinamis Menggunakan PHP
 * File: proses_hapus.php
 * Skrip pemroses penghapusan data mahasiswa berdasarkan npm.
 */

require_once __DIR__ . '/includes/functions.php';

$npm = $_GET['npm'] ?? '';

if ($npm !== '') {
    $hasil = hapus_mahasiswa($npm);
    set_flash_message($hasil['status'] ? 'success' : 'danger', $hasil['message']);
} else {
    set_flash_message('danger', 'npm mahasiswa yang akan dihapus tidak ditentukan!');
}

header('Location: index.php#daftar-mahasiswa');
exit;
