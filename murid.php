<?php  
session_start();
if($_SESSION['login']=="user"){
    header('location:index.php');
}
if(empty($_SESSION['login'])){
    header('location:login.php');
}
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
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.php">Electronic Home<span>Electronic </span> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"> <span class="caret"></span><img src="assets/img/avatar.png" class="dropdown-image"></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li role="presentation"><a href="setting.html">Pengaturan </a></li>
                            <li role="presentation" class="active"><a href="logout.php">Keluar </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <!-- It can be fixed with bootstrap affix http://getbootstrap.com/javascript/#affix-->
            <div id="sidebar" class="well sidebar-nav">
                <h3><i class="glyphicon glyphicon-home"></i>
                    <small><b>Dashbord Pengajar</b></small>
                </h3>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="/">Beranda</a></li>
                </ul>
                <h3><i class="glyphicon glyphicon-education"></i>
                    <small><b>Murid</b></small>
                </h3>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="nilai.html">Masukan Nilai</a></li>
                    <li class="active"><a href="/">Cek Murid</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <form class="bootstrap-form-with-validation">
        <h2 class="text-center">Daftar Murid</h2>
        <form class="navbar-form navbar-right" method="GET" role="search">
                <div class="col-md-3">
                    <input type="text" name="q" class="form-control" placeholder="Search" value="search">
                </div>
                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
            </form>
        <div class="table-responsive">
        <table class="table table-bordered">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Asal Sekolah</th>
            <th>Alamat</th>
        </thead>
        <tbody>
        <tr>
            <td>01</td>
            <td>Arif Candra Dwi Susilo</td>
            <td>9</td>
            <td>SMPN 1 Ambulu</td>
            <td>Watukebo Rt 04 Rw 10 Ambulu</td>
        </tr>
        <tr>
            <td>02</td>
            <td>Dian Setyo</td>
            <td>7</td>
            <td>SMPN 2 Ambulu</td>
            <td>Pontang Rt 01 Rw 05 Ambulu</td>
        </tr>
        </tbody>
        </table>
        </div>
        </form>
    </div>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>