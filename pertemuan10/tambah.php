<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['submit'])) {
    // cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0 ) {
        echo " 
        <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>
            ";
    } else {
       echo"
       <script>
           alert('data gagal ditambahkan!');
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
    <title>Tambah Data Mahasiswa</title>
    <link rel='stylesheet' href='main.css'>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">
          <ul>
            <li>
                <label for="nim">NIM: </label>
                <input type="text" name="nim" required>
            </li>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" required>
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="text" name="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" required  >
            </li>
            <li>
                <label for="gambar">Gambar: </label>
                <input type="text" name="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
          </ul>
    </form>


</body>
</html>
