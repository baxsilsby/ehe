<?php
     
    include "koneksi.php";

 ?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Learning EHE</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/Login.css">
</head>


<body>
        <div class="login-card"> <h1><center>Login</center></h1> <img src="assets/img/avatar.png" class="profile-img-card">
        <p class="profile-name-card"> </p>
        <form class="form-signin" method="post" action="cek-login.php"><span class="reauth-email"> </span>
            <input class="form-control" type="email" name="email" required="" placeholder="Alamat Email" autofocus="" id="inputEmail">
            <input class="form-control" type="password" name="password" required="" placeholder="Password" id="inputPassword">
            <div class="checkbox">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Ingat Selalu</label>
                </div>
            </div>
            <!-- <button class="btn btn-primary btn-block btn-lg btn-signin" name="login" type="submit">Masuk</button> -->
            <input class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="login" value="masuk">
        </form><center><a href="lupaPassword.php" class="forgot-password">Lupa Password.?</center></a>
        <br><center><a href="index.php" class="forgot-password">Beranda</a>
        </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>