<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "volunteer"; 

$koneksi = mysqli_connect ($host, $username, $password,$dbname);


if(!$koneksi){
    die ("Tidak bisa terkoneksi ke database".mysqli_connect_error ());
}

