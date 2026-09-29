<?php
// memaksan pengguna kehalaman latihan1 tanpa langsung ke halaman latihan 2
// cek apakah tidak ada data di $_GET
if(!isset($_GET["nama"]) ||
    !isset($_GET["nim"]) ||
    !isset($_GET["kelas"])||
    !isset($_GET["gambar"]) ){
// redirect
header("Location: latihan1.php");
exit;
}
?>   



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <style>
        img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>" alt=""></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nim"]; ?></li>
        <li><?= $_GET["kelas"]; ?></li>
        <li>manajemen informatika</li>
    </ul>

<a href="latihan1.php">kembali ke daftar mahasiswa</a>
</body>
</html>