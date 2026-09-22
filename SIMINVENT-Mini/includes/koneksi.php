<?php
// PENTING: isi kredensial di bawah ini hanya CONTOH/placeholder.
// Ganti dengan kredensial database kamu sendiri sebelum dipakai,
// dan JANGAN commit/upload file ini ke repository publik kalau
// sudah diisi kredensial asli.
$host = "localhost";
$port = "5432";
$db   = "siminvent_mini";
$user = "postgres";
$pass = "ganti_dengan_password_kamu";

try {
    $pdo = new PDO(
        "pgsql:host=$host;port=$port;dbname=$db;sslmode=require",
        $user,
        $pass
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $e) {
    die(
        "Koneksi database gagal: "
        . $e->getMessage()
    );
}
