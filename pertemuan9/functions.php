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
?>