<!-- make login form
add secure.php to home.php

home.php was renamed from index.php -->
<?php require("connection/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login first</title>
</head>

<body>
    <form action="login-process/login.php" method="POST" enctype="multipart/form-data" class="container  w-75 mt-5">

        <div class=" mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Log In</button>
        <a href="signup.php" class="btn btn-primary" >Sign Up</a>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>


<!-- ?php
require("connection/config.php");

if(isset($_POST['email'])){
session_start();
unset($_SESSION['id']);
unset($_SESSION['email']);
unset($_SESSION['name']);
}
?> -->