<?php
session_start(); 

include "koneksi.php";

if (isset($_POST['login'])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT *FROM user WHERE email='$email' or password='$password'";
    $hasil = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($hasil) > 0){
        $row = mysqli_fetch_assoc($hasil);
        if($password == $row["password"]){
            header("Location: dash.php"); 
            exit();
        }
     else {
        echo "<script>alert('email atau password salah');</script>";
    }
}

}

?>