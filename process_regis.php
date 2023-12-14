<?php


include "koneksi.php";

if (isset($_POST['registrasi'])){
    $username = $_POST['username']; 
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user  (username, email, password) VALUES ('$username','$email','$password')";

    if (mysqli_query($koneksi, $sql)){
        $_SESSION['email'] = $email; 
        header("Location: login.php"); 
        exit(); 
    } else {
        echo "<script>alert('email atau password salah');</script>";
    }
} else {
    echo "<script>alert('email atau password kosong!');</script>";
}

?>