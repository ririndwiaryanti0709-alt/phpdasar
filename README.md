

<p align="center">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ31OhBssAMSomWP5MOXQiKmulwMgp5hUV5TTV_cEu2ZQ&s" alt="PHP Logo" width="180">
</p>

<p align="center">
  <strong>Belajar PHP dari dasar, memahami cara kerja server-side, dan membangun fondasi backend.</strong>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-Basic-777BB4?style=flat-square&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/Learning-Backend-181717?style=flat-square" alt="Backend Learning">
  <img src="https://img.shields.io/badge/Editor-VS%20Code-007ACC?style=flat-square&logo=visualstudiocode&logoColor=white" alt="VS Code">
</p>

---

## Tentang Repository

Repository ini berisi perjalanan saya dalam mempelajari **PHP dari dasar**.

Saya tidak ingin hanya menghafal syntax. Target utama dari repository ini adalah memahami bagaimana PHP bekerja, bagaimana PHP memproses data, dan bagaimana nantinya PHP digunakan untuk membangun aplikasi web yang memiliki backend.

Setiap materi akan dipelajari dengan pola:

**Belajar, Coba, Error, Perbaiki, Praktik, Dokumentasikan**

Jadi isi repository ini bukan hanya kumpulan kode, tetapi juga menjadi catatan perkembangan saya selama belajar PHP.

---

## Kenapa Belajar PHP?

PHP merupakan salah satu bahasa yang banyak digunakan untuk membangun aplikasi web dari sisi server.

Dengan PHP, saya mulai belajar konsep yang sebelumnya belum terlalu banyak saya temui ketika membuat website menggunakan HTML, CSS, dan JavaScript.

Contohnya:

* bagaimana server memproses request
* bagaimana PHP menghasilkan HTML
* bagaimana menerima data dari form
* bagaimana mengolah data
* bagaimana terhubung dengan database
* bagaimana membuat sistem login
* bagaimana membangun backend aplikasi web

Tujuan akhirnya bukan sekadar bisa menulis PHP, tetapi memahami bagaimana sebuah website bekerja dari sisi server.

---

## Gambaran Besar Pembelajaran

```text
PHP Dasar
   │
   ├── Syntax & Output
   │
   ├── Variable & Data Type
   │
   ├── Operator
   │
   ├── Conditional
   │
   ├── Loop
   │
   ├── Function
   │
   ├── Array
   │
   ├── String
   │
   ├── Form & Input
   │
   ├── Include / Require
   │
   ├── Session & Cookie
   │
   ├── File Handling
   │
   ├── Database
   │
   └── Mini Project
```

---

## Mindmap

<p align="center">
  <img src="https://ft.syncfusion.com/featuretour/php/images/ejdiagram/mindmap.png" alt="PHP Learning Mindmap" width="850">
</p>

---

## Roadmap Belajar PHP

| Tahap | Materi            | Fokus                                |
| ----- | ----------------- | ------------------------------------ |
| 01    | Pengenalan PHP    | Memahami PHP dan server-side         |
| 02    | Syntax & Output   | `echo`, `print`, syntax dasar        |
| 03    | Variable          | Menyimpan dan menggunakan data       |
| 04    | Data Type         | String, integer, float, boolean, dll |
| 05    | Operator          | Operasi dan perbandingan data        |
| 06    | Conditional       | `if`, `else`, `elseif`, `switch`     |
| 07    | Loop              | `for`, `while`, `foreach`            |
| 08    | Function          | Membuat kode yang reusable           |
| 09    | Array             | Menyimpan banyak data                |
| 10    | String            | Mengolah teks                        |
| 11    | Form              | Mengambil input dari user            |
| 12    | Include & Require | Membagi file PHP                     |
| 13    | Session & Cookie  | Menyimpan informasi pengguna         |
| 14    | File Handling     | Membaca dan mengelola file           |
| 15    | Database          | Menghubungkan PHP dengan database    |
| 16    | CRUD              | Create, Read, Update, Delete         |
| 17    | Authentication    | Login dan logout                     |
| 18    | Mini Project      | Menggabungkan materi                 |

Roadmap ini dapat berkembang sesuai kebutuhan selama proses belajar.

---

## Struktur Repository

```text
Belajar-PHP/
│
├── 01-pengenalan-php/
│   ├── index.php
│   └── README.md
│
├── 02-syntax-output/
│   ├── index.php
│   └── README.md
│
├── 03-variable/
│   ├── index.php
│   └── README.md
│
├── 04-data-type/
│   ├── index.php
│   └── README.md
│
├── ...
│
├── images/
│   └── php-mindmap.png
│
└── README.md
```

Setiap folder digunakan untuk satu materi agar proses belajar lebih mudah dilacak.

---

## Cara Belajar

Saya mencoba menggunakan pendekatan yang sederhana.

### 1. Pahami konsepnya

Sebelum mengetik banyak kode, saya mencoba memahami:

> "Kode ini sebenarnya digunakan untuk apa?"

### 2. Tulis kode sendiri

Setelah memahami konsep dasar, saya mencoba menulis ulang contoh menggunakan kasus sederhana.

### 3. Sengaja mencoba variasi

Misalnya setelah memahami:

```php
$nama = "Ririn Dwi Aryanti";
```

saya tidak berhenti di sana.

Saya mencoba:

```php
$nama = "Ririn Dwi Aryanti";
$umur = 20;

echo $nama;
echo $umur;
```

Kemudian mencoba menggabungkannya:

```php
echo "Nama saya $nama dan umur saya $umur tahun.";
```

Tujuannya supaya syntax tidak hanya terlihat familiar, tetapi benar-benar dipahami.

### 4. Membuat kesalahan

Error adalah bagian dari proses belajar.

Kalau kode tidak berjalan, saya mencoba mencari:

* pesan error
* baris yang bermasalah
* penyebabnya
* cara memperbaikinya

### 5. Dokumentasikan

Setelah memahami materi, saya mencatat apa yang sudah dipahami di `README.md`.

---

## Contoh Konsep PHP

PHP berjalan di sisi server.

Secara sederhana:

```text
Browser
   │
   │ Request
   ▼
Server
   │
   │ menjalankan PHP
   ▼
PHP
   │
   │ menghasilkan HTML
   ▼
Browser
```

Contoh:

```php
<?php

$nama = "Ririn";

echo "Halo, nama saya $nama";

?>
```

Browser tidak menerima kode PHP tersebut secara langsung.

Server menjalankan PHP terlebih dahulu, kemudian mengirimkan hasil akhirnya kepada browser.

---

## PHP vs JavaScript

PHP dan JavaScript sama-sama dapat digunakan dalam pengembangan web, tetapi penggunaannya berbeda.

| PHP                                           | JavaScript                                  |
| --------------------------------------------- | ------------------------------------------- |
| Umumnya berjalan di server                    | Umumnya berjalan di browser                 |
| Digunakan untuk server-side                   | Digunakan untuk client-side                 |
| Bisa mengolah data sebelum dikirim ke browser | Bisa berinteraksi langsung dengan halaman   |
| Banyak digunakan untuk backend                | Banyak digunakan untuk frontend dan backend |
| Dapat berkomunikasi dengan database           | Dapat berkomunikasi dengan API              |

Dalam perjalanan belajar saya, PHP akan menjadi salah satu cara untuk memahami sisi **backend** dari sebuah website.

---

## Tools yang Digunakan

* PHP
* HTML
* CSS
* JavaScript
* VS Code
* Git
* GitHub
* Browser
* Database MySQL
* DBeaver
* Docker

Tools dapat bertambah ketika materi mulai masuk ke backend dan database.


---

## Format README Setiap Materi

Setiap materi akan memiliki dokumentasi sendiri.

Contohnya:

````text
# PHP Variable

## Materi

- Pengertian variable
- Membuat variable
- Mengubah nilai variable
- Menggunakan variable
- Studi kasus sederhana

## Apa yang Saya Pelajari

...

## Contoh Kode

```php
<?php

$nama = "Ririn";

echo $nama;

?>
````


### Project 1 — Biodata Sederhana

Konsep:

* variable
* string
* output
* HTML

### Project 2 — Kalkulator

Konsep:

* input
* operator
* conditional
* function

### Project 3 — Form Data Mahasiswa

Konsep:

* form
* request
* input
* validation sederhana

### Project 4 — CRUD Mahasiswa

Konsep:

* PHP
* MySQL
* CRUD
* database

### Project 5 — Sistem Login

Konsep:

* form
* session
* database
* authentication

---

## Target Akhir

Setelah menyelesaikan fundamental PHP, saya ingin mampu:

* memahami syntax PHP
* membuat halaman dinamis
* menerima input dari user
* mengolah data
* menggunakan function
* mengelola array
* menggunakan session
* terhubung dengan database
* membuat CRUD
* memahami konsep authentication
* membuat aplikasi backend sederhana

Setelah fondasi tersebut cukup kuat, pembelajaran dapat dilanjutkan ke framework PHP seperti **Laravel** atau teknologi backend lainnya.

---

<p align="center">
  <img src="https://www.php.net/images/logos/new-php-logo.svg" alt="PHP" width="120">
</p>

<p align="center">
  Learning PHP step by step.
</p>
