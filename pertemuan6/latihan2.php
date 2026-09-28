<?php 
// $mahasiswa = [
//     ["ririn", "09020","ririn@gmail.com", "manajemen informatika"],
//     ["dika", "09080","dika.com", "agamaislam"],
//     ["agus", "09079", "agus.com", "teknik"]
// ];

//array assosiative - variabel yang bisa memiliki banyak nilai
// definisinya sama seperti array numerik, kecuali
//key-nya string yang kita buat sendiri
$mahasiswa = [
   [
    "nama" => "ririn",
    "nim" => "090102",
    "email" => "ririn@gamil.com",
    "jurusan" => "manajemen informatika",
    "gambar" => "IMG_7952.HEIC"
   ],
   [
    "nama" => "dika",
    "nim" => "09403",
    "email" => "dika.com",
    "jurusan" => "agama islam",
    "tugas" => [90, 40, 80] ,
    "gambar" => "IMG_7953.HEIC"
    ]
];
//menampilkan array assosiative
echo $mahasiswa[1]["tugas"][0];
echo $mahasiswa[1]["email"];
// echo $mahasiswa ["jurusan"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>nama :<?php echo $mhs["nama"]; ?></li>
        <li>nim :<?php echo $mhs["nim"]; ?></li>
        <li>email :<?php echo $mhs["email"]; ?></li>
        <li>jurusan :<?php echo $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?> 

    <!-- cara biasa -->
    <!-- <ul>
        <li>ririn</li>
        <li>09020</li>
        <li>ririn@gmail.com</li>
        <li>manajemen informatika</li>
    </ul> -->
</body>
</html>