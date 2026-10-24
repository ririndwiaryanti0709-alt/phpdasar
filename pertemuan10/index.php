<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data Mahasiswa</a>
<br><br>

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
            <a href="">Ubah</a> |
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