<?php

$mahasiswa = [
    [
        "gambar" => "ririn.jpg",
        "nama" => "ririn",
        "nim" => "09087",
        "kelas" => "mi3c"
    ],
    [
        "gambar" => "ririndwi.jpg",
        "nama" => "yanto",
        "nim" => "09080",
        "kelas" => "mi3c"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 32px 16px;
            background: #f1f5f9;
            color: #1e293b;
            font-family: Arial, sans-serif;
        }

        h1 {
            margin: 0 0 24px;
            text-align: center;
            color: #0f172a;
        }

        ul {
            display: grid;
            grid-template-columns: 72px 1fr;
            align-items: center;
            gap: 8px 16px;
            max-width: 420px;
            margin: 0 auto 16px;
            padding: 16px;
            list-style: none;
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgb(15 23 42 / 8%);
        }

        li:first-child {
            grid-row: 1 / span 3;
        }

        img {
            display: block;
            width: 72px;
            height: 72px;
            object-fit: cover;
            border-radius: 50%;
            background: #e2e8f0;
        }

        li:not(:first-child) {
            font-size: 15px;
        }

        @media (max-width: 480px) {
            body {
                padding: 24px 12px;
            }

            ul {
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- belajar menggunakan metode request GET (menggunakan URL) -->

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs): ?>

        <ul>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&kelas=<?= $mhs["kelas"]; ?>&gambar=<?= $mhs["gambar"]; ?>">
                    <?= $mhs["nama"]; ?>
                </a>
            </li>
        </ul>

    <?php endforeach; ?>

</body>
</html>