<?php
// koneksi ke database
$con = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($con, "SELECT * FROM mahasiswa");
if (!$result) {
    echo  mysql_error($con);
}

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object() // mengembalikan object

$mhs = mysqli_fetch_row($result);
var_dump($mhs);
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

    <tr>
        <td>1</td>
        <td>
            <a href="">Ubah</a> |
            <a href="">Hapus</a>
        </td>
        <td><img src="img/ririn.jpg" width="50" height="50" alt=""></td>
        <td>090100</td>
        <td>Ririn Dwi Aryanti</td>
        <td>ririn@gmail.com</td>
        <td>Manajemen Informatika</td>
    </tr>
</table>
</body>
</html>