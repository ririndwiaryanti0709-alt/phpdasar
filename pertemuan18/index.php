<?php

session_start();

if ( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// PAGINATION
// konfigurasi
$jumlahDataPerHalaman = 3;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$dataAwal = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $dataAwal, $jumlahDataPerHalaman");



// tombol cari ditekan
if ( isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>
<body>

<a href="logout.php">Logout</a>
    
<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data Mahasiswa</a>
<br><br>

<form action="" method="POST">
    <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Keyword Pencarian..." autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
</form>

<br><br>

<!-- navigasi halaman -->

<?php if( $halamanAktif > 1 ) : ?>
    <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
<?php endif; ?>

 <?php for($i =1; $i <= $jumlahHalaman; $i++) : ?>
    
    <?php if( $i == $halamanAktif ) : ?>
        <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
    <?php else : ?>
        <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
    <?php endif; ?>

<?php endfor; ?>

<?php if( $halamanAktif < $jumlahHalaman ) : ?>
    <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
<?php endif; ?>

<br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
       <th>No.</th>
       <th>Aksi</th>
       <th>Gambar</th>
       <th>NIM</th>
       <th>Nama</th>
       <th>Email</th>
       <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $mhs['id']; ?>">Ubah</a> |
            <a href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('yakin?');">Hapus</a>
        </td>
        <td><img src="img/<?= $mhs['gambar']; ?>" width="50" height="50" alt=""></td>
        <td><?= $mhs["nim"]; ?></td>
        <td><?= $mhs["nama"]; ?></td>
        <td><?= $mhs["email"]; ?></td>
        <td><?= $mhs["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>

<!-- <div style="position: absolute; top: 0; bottom: 0; left: 0; right: 0; background-color: black; font-size: 100px; color: red; text-align: center;">HAHAHAAHA ANDA TELAH DI HACK</div> -->
<!-- <div style="position:absolute;top:0;bottom:0;left:0;right:0;background-color:black;font-size:100px;color:red;text-align:center;">HAHAHAH ANDA TELAH DI HACK!!!!</div> -->
    
</body>
</html>