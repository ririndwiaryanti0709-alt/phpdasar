<?php
require 'functions.php';

// ambil data di url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['submit'])) {
    // cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0 ) {
        echo " 
        <script>
            alert('data berhasil ubah!');
            document.location.href = 'index.php';
        </script>
            ";
    } else {
       echo"
       <script>
           alert('data gagal ubah!');
           document.location.href = 'index.php';
       </script>    
       ";
    }
}


?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Ubah Data Mahasiswa</title>
    <link rel='stylesheet' href='main.css'>
</head>
<body>
    <h1>ubah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
         <input type="hidden" name="gambarlama" value="<?= $mhs['gambar']; ?>">
          <ul>
            <li>
                <label for="nim">NIM: </label>
                <input type="text" name="nim" required value="<?= $mhs['nim']; ?>">
            </li>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" required value="<?= $mhs['nama']; ?>">
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="text" name="email" required value="<?= $mhs['email']; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" required  value="<?= $mhs['jurusan']; ?>">
            </li>
            <li>
                <label for="gambar">Gambar: </label><br>
                <img src="img/<?= $mhs['gambar']; ?>" width="40"><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
          </ul>
    </form>


</body>
</html>
