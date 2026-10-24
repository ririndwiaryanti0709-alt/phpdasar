<?php
// koneksi ke database
$con = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $con;    
    $result = mysqli_query($con, $query);
    $row = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $con;
    
    $nim = htmlspecialchars($data['nim']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$nim', '$nama', '$email', '$jurusan', '$gambar')
                ";
    mysqli_query($con, $query);

    return mysqli_affected_rows($con);

}

function hapus($id) {
    global $con;
    mysqli_query($con, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($con);
}

?>