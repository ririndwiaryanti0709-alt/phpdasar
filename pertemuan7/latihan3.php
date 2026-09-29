<!-- Belajar Penggunaan Metode request POST -->
<!-- Bedanya Get Dan Post adalah jika menggunakan Get 
  maka data akan di tampilkan lewat url 
  jadi sebaiknya gunakan post apalagi untuk Login -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <!-- ini digunakan supaya kata selamat datangnya tidak langsung ditampilkan -->
    <!-- ini di gunakan jika untuk menggunakan post di halaman ini sendiri -->
    <?php if( isset($_POST["submit"]) ) :?>
    <h1>Selamat Datang, <?= $_GET["nama"]; ?> </h1>
    <?php endif; ?>

    <form action="latihan4.php" method="post">
        Masukkan nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>

    </form>
</body>
</html>