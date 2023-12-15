<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css"> 
</head>
<body><br><br>
    <div class="container">
     <form action="process_login.php" method="post"> 
        <h2 class="text-center">LOGIN</h2>
        <br>
        <div class="form-group" >
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="emails">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
        </div>
        <div class="form-group">
            <label for>Don't have an account?<a href="registrasi.php"> Create an account </a></label>
        </div>
        <div class="text-center">
        <input type="submit" class="button"  id="login" value="login" name="login">
        </a>
        </div>
     </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>