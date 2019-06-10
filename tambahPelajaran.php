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
    <link rel="stylesheet" href="assets/bootstrap/css/datepicker.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
</head>

<body>
<?php
include 'koneksi.php';
    $pengajar    = "select * from pengajar";
    $query  = mysqli_query($con,$pengajar);
    $pelajaran = "select p.`id`,p.`nama pelajaran`,o.`nama` from pelajaran p join pengajar o on p.`idPengajar`=o.`id`";
    // "select p.`id penyewaan`,p.`id mobil`, p.`nama penyewa`, p.alamat, p.NIK, p.hp,p.`id supir`,p.`Tanggal Sewa`,p.`Lama Sewa`,p.Status,p.`bayar 
    // mobil`from penyewaan p join datamobil d on p.`id mobil` = d.`id mobil` where d.`id pemilik` = '$id'"
    $sql  = mysqli_query($con,$pelajaran);
  ?>
<nav class="navbar navbar-default custom-header">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.html">Education Home<span> Education </span> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
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
                    <li class="active"><a href="tambahPelajaran.php">Kelola Mata Pelajaran</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-7">
            <form class="bootstrap-form-with-validation" method="post" action="">
        <h2 class="text-center">Tambahkan Pelajaran</h2>
        <div class="form-group">
            <label class="control-label" for="nama-input">Nama Pelajaran</label>
            <input class="form-control" type="text" name="pelajaran" id="pelajaran">
        </div>
        <div class="form-group">
            <label for="pendidikan">Pilih Pengajar </label>
            <select class="form-control" id="pengajar" name="idPengajar">    
                <?php if(mysqli_num_rows($query) > 0) {?>
                    <?php while ($row = mysqli_fetch_array($query)) { ?>
                        <option><?php echo $row['id'] ?>. <?php echo $row['nama'] ?></option>
                    <?php } ?>
                <?php } ?>
            </select>
        </div>
        <!-- <?php echo $nama ?> -->
        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="tambah">Tambahkan</button>
        </div>

        <div class="table-responsive">
        <table class="table table-bordered">
        <h2 class="text-center">Daftar Pelajaran</h2>
        <thead>
            <th>No</th>
            <th>Nama Pelajaran</th>
            <th>Nama Pengajar</th>
        </thead>
        <tbody>
        <?php
            while($data = mysqli_fetch_array($sql)){ 
          ?>

            <tr>
              <td><?php echo $data['id']; ?></td>
              <td><?php echo $data['nama pelajaran']; ?></td>
              <td><?php echo $data['nama']; ?></td>
            </tr>

          <?php
            }
          ?>
        </tbody>
        </table>
        </div>


    </form>
    </div>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap-datepicker.js"></script>
    <script>
  $(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
</script>
</body>
</html>
<?php  
if (isset($_POST['tambah'])) {
    $nama = $_POST['pelajaran'];
    $idPengajar = $_POST['idPengajar'];

    $tambahkan = mysqli_query($con,"INSERT INTO pelajaran values('','$nama','$idPengajar')");
    if($tambahkan){
?>
<script type="text/javascript">
    alert("matapelajaran berhasil ditambahkan");
    window.location.href="admin1.php";

</script>

<?php  }
}

?>