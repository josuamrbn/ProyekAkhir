<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "SangkarNihutadb";

$koneksi    = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
    die("Gagal terkoneksi");
}
function registrasi($data) {
    global $koneksi;

    $username = strtolower(stripslashes( $data["username"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    return 1;
}



?>