<?php
include 'koneksi.php';

// Menangkap data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

// Menyimpan data ke database
$sql = "INSERT INTO buku_tamu (NAMA, EMAIL, ISI) VALUES ('$nama', '$email', '$pesan')";

if (mysqli_query(mysql: $conn, query: $sql)) {
    echo "Data berhasil disimpan! <a href='index.php'>Kembali</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error(mysql: $conn);
}

mysqli_close(mysql: $conn);
?>
