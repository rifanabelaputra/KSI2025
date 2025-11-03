# Buat file koneksi.php
echo '<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_mahasiswa";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}

// echo "Koneksi Berhasil!"; // Matikan agar tidak tampil di halaman lain
?>' > koneksi.php