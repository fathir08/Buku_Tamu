<?php
// Konfigurasi database
$host = "localhost";
$username = "root"; // Default user XAMPP
$password = ""; // Default password kosong
$database = "tugas_pemweb";

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
