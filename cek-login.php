<?php

session_start(); //memulai session
include 'koneksi.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = mysqli_query($con,"select * from users WHERE email='$email' AND password='$pass'");
    $get = mysqli_fetch_array($query);
    $level = $get['level'];
    $emailUser = $get['email'];
    $idUser = $get['id'];

    if(mysqli_num_rows($query) != 0){
        if($level=="admin"){
            $_SESSION['login']="admin";
            header("location:admin1.php?id=$idUser");
        }else if($level=="user"){
            $_SESSION['login']="user";
            header("location:pendaftaranMurid.php?id=$idUser&email=$emailUser");
        }else{
            $_SESSION['login']="pengajar";
            header("location:pengajar.php?id=$idUser&email=$emailUser");
        }
    }else{
        echo "";
    }
}else{
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Learning EHEK</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/Login.css">
    <link rel="stylesheet" href="assets/css/daftar.css">

</head>
<body>
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal custom-form" method="post" action="">
                <nav class="navbar navbar-default">
        
            <div class="container">
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-center">
                        <li role="presentation"><a href="index.php">Beranda </a></li>
                        <li role="presentation"><a href="login.php">Login </a></li>
                        <li role="presentation"><a href="register.php">Daftar </a></li>
                        <li role="presentation"><a href="contacMe.php">Hubungi Kami</a></li>
                    </ul>
                </div>
            </div>
        </nav>
                <h1>Login Gagal</h1>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>