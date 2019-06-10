<?php  
session_start();
if($_SESSION['login']!="user"){
    header('location:index.php');
}
if(empty($_SESSION['login'])){
    header('location:login.php');
}
$iduser = $_GET['id'];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Learning EHE</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
</head>

<body>
    <nav class="navbar navbar-default custom-header">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.html">Electronic Home<span>Electronic </span> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav links">
                    <li role="presentation"><a href="grafik.php">Grafik Nilai Anak </a></li>
                    <li role="presentation"><a class="active" href="pendaftaranMurid.php">Tambah Peserta Didik </a></li>
                    <li role="presentation"><a href="rapotAnak.php"> Rapot Anak</a></li>
                    <!-- <li role="presentation"><a href="harapan.php" class="custom-navbar"> Jejang Pendidikan Selanjutnya<span class="badge">new</span></a></li> -->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"> <span class="caret"></span><img src="assets/img/avatar.png" class="dropdown-image"></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li role="presentation"><a href="setting.php">Pengaturan </a></li>
                            <li role="presentation" class="active"><a href="logout.php">Keluar </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h2 class="text-center">Rapot Anak Anda</h2>



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>