<?php

$servername = "localhost";
$database = "uinsi_2441919036";
$username = "root";
$password = "";

// Buat Koneksi Database

$conn = mysqli_connect($servername,$username,$password,$database);

// Cek Koneksi

if (!$conn) {
    die("Koneksi Gagal".mysqli_connect_error());
}

echo "Koneksi Berhasil";
// mysqli_close();
?>