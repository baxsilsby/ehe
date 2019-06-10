<?php  
session_start();
if($_SESSION['login']!="admin"){
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
<?php 
include 'koneksi.php';
    $sql    = "select * from murid WHERE status='nonaktif'";
    $query  = mysqli_query($con,$sql);
?>
<nav class="navbar navbar-default custom-header">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.html">Electronic Home<span>Education </span> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"> <span class="caret"></span><img src="assets/img/avatar.png" class="dropdown-image"></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
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
            <div id="sidebar" class="well sidebar-nav">
                <h3><i class="glyphicon glyphicon-home"></i>
                    <small><b>Dashbord</b></small>
                </h3>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="/">Beranda</a></li>
                </ul>
                <h3><i class="glyphicon glyphicon-user"></i>
                    <small><b>Pengajar</b></small>
                </h3>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="tambahPengajar.php">Tambah</a></li>
                    <li><a href="cekpengajar.php">Lihat</a></li>
                </ul>
                <h3><i class="glyphicon glyphicon-education"></i>
                    <small><b>Murid</b></small>
                </h3>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="cekMurid.php">Cek Murid</a></li>
                    <li><a href="#">Cek Rapot</a></li>
                </ul>
                <h3><i class="glyphicon glyphicon-education"></i>
                    <small><b>Pelajaran</b></small>
                </h3>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="tambahPelajaran.php">Kelola Mata Pelajaran</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <br>
        <div class="table-responsive">
        <h2 class="text-center">Daftar Murid tidak aktif</h2>
        <br>
        <table class="table table-bordered">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Asal Sekolah</th>
            <th>Pendidikan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </thead>
        <tbody>
        <?php
            while($data = mysqli_fetch_array($query)){ 
          ?>

            <tr>
              <td><?php echo $data['id']; ?></td>
              <td><?php echo $data['nama']; ?></td>
              <td><?php echo $data['kelas']; ?></td>
              <td><?php echo $data['sekolah']; ?></td>
              <td><?php echo $data['pendidikan']; ?></td>
              <td><?php echo $data['alamat']; ?></td>
              <!-- <td>
                <a href=<?php echo $data['Foto']; ?>><img src=<?php echo $data['Foto']; ?> height="50"></a>
              </td> -->
              <td>
                <a href="statusmurid.php?id=<?php echo $data['id']?>"><button class="btn btn-success bold">Aktifkan</button></a>
              </td>
            </tr>

          <?php
            }
          ?>
        </tbody>
        </table>
        </div>
        </div>
    </div>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>