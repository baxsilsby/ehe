<?php  
session_start();
$_SESSION['login'];
if(empty($_SESSION['login'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Learning EHEK</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
</head>

<body>
<?php
include 'koneksi.php';
    $sql    = "select * from pengajar";
    $query  = mysqli_query($con,$sql);
  ?>
<nav class="navbar navbar-default custom-header">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.php">Electonik Home<span> Education </span> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"> <span class="caret"></span><img src="assets/img/avatar.png" class="dropdown-image"></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <!-- <li role="presentation"><a href="setting.html">Pengaturan </a></li> -->
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
                    <small><b>Dashbord</b></small>
                </h3>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="/">Beranda</a></li>
                </ul>
                <h3><i class="glyphicon glyphicon-user"></i>
                    <small><b>Pengajar</b></small>
                </h3>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="tambahPengajar.php">Tambah</a></li>
                    <li class="active"><a href="cekpengajar.php">Lihat</a></li>
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
                    <li><a href="cekMurid.php">Kelola Mata Pelajaran</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
        <h2 class="text-center">Daftar Tenaga Pengajar</h2>
            <table class="table table-striped table-bordered">
        <thead class=" danger">
          <!-- <th width="30px;">No.</th> -->
          <th>ID</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Tempat</th>
          <th>Tanggal Lahir</th>
          <th>Pendidikan</th>
          <th>Asal Sekolah</th>
          <th>Kelamin</th>
          <th>Agama</th>
          <th>Alamat</th>
            <!-- <th>Foto</th> -->
          <th width="190px;">Aksi</th>
        </thead>

        <tbody>

          <?php
            while($data = mysqli_fetch_array($query)){ 
          ?>

            <tr>
              <td><?php echo $data['id']; ?></td>
              <td><?php echo $data['nama']; ?></td>
              <td><?php echo $data['email']; ?></td>
              <td><?php echo $data['tempat']; ?></td>
              <td><?php echo $data['tanggal']; ?></td>
              <td><?php echo $data['pendidikan']; ?></td>
              <td><?php echo $data['sekolah']; ?></td>
              <td><?php echo $data['kelamin']; ?></td>
              <td><?php echo $data['agama']; ?></td>
              <td><?php echo $data['alamat']; ?></td>
              <!-- <td>
                <a href=<?php echo $data['Foto']; ?>><img src=<?php echo $data['Foto']; ?> height="50"></a>
              </td> -->
              <td>
                <a href="edit anggota.php?Nim=<?php echo $data['NIM'];?>"><button class="btn btn-success bold">Lihat</button></a>
                <a href="deletePengajar.php?email=<?php echo $data['email']?>" onclick="return confirm('Yakin mau di hapus?');"><button class="btn btn-danger bold">Hapus</button></a>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>