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
        <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.php"><span> </span> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
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
                <h1>Form Register</h1>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Nama Lengkap</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="nama" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="email-input-field">Email </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="pawssword-input-field">Password </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="password" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="repeat-pawssword-input-field">Ulangi Password </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="password" required>
                    </div>
                </div>
                <button class="btn btn-outline-default submit-button" name="registrasi" type="submit">Daftar</button>

				<button class="btn btn-danger submit-button" onclick="window.location.href='index.php' type="button">Reset</button>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

<?php  
include 'koneksi.php';
if (isset($_POST['registrasi'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = ($_POST['password']);

    $sql=mysqli_query($con,"INSERT INTO users values ('','$nama','$email','$password','user')");
    // mysqli_query($con, "INSERT INTO users (id, nama, email, password, level) values ('','$nama','$email','$password','user')");
    if($sql){
?>
<script type="text/javascript">
    alert("berhasil daftar");
    window.location.href="login.php";

</script>

<?php  }
}
?>