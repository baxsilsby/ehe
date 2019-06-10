<?php  
session_start();
if($_SESSION['login']!="pengajar"){
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
    $pelajaran    = "select * from pelajaran";
    $query  = mysqli_query($con,$pelajaran);
    $murid    = "select * from murid WHERE status='aktif'";
    $sql  = mysqli_query($con,$murid);
  ?>
<nav class="navbar navbar-default custom-header">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.html">Electronic Home<span>Electronic </span> </a>
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
                    <small><b>Dashbord Pengajar</b></small>
                </h3>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="/">Beranda</a></li>
                </ul>
                <h3><i class="glyphicon glyphicon-education"></i>
                    <small><b>Murid</b></small>
                </h3>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="/">Masukan Nilai</a></li>
                    <li><a href="murid.html">Cek Murid</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-7">
            <form class="bootstrap-form-with-validation" method="post" action="">
        <h2 class="text-center">Masukan Nilai</h2>
        <div class="form-group">
            <label class="control-label" for="nama-input">Nama Lengkap</label>
            <select class="form-control" id="nama-input" name="idMurid">
                <?php if(mysqli_num_rows($sql) > 0) {?>
                    <?php while ($rows = mysqli_fetch_array($sql)) { ?>
                        <option><?php echo $rows['id'] ?>. <?php echo $rows['nama'] ?></option>
                    <?php } ?>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="pendidikan">Pilih Pelajaran </label>
            <select class="form-control" id="pelajaran" name="idPelajaran">    
                <?php if(mysqli_num_rows($query) > 0) {?>
                    <?php while ($row = mysqli_fetch_array($query)) { ?>
                        <option><?php echo $row['id'] ?>. <?php echo $row['nama pelajaran'] ?></option>
                    <?php } ?>
                <?php } ?>
            </select>
        </div>
        <!-- <?php echo $nama ?> -->
        <div class="form-group">
            <label class="control-label" for="nilai-input">Nilai</label>
            <input class="form-control" type="text" id="nilai-input" name="nilai">
        </div>
        <div class="form-group">
            <label class="control-label" for="nilai-input">Tanggal Ujian</label>
            <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
              <input class="form-control" type="text" name="tanggalUjian" readonly="readonly" required>
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="tambah">Tambahkan</button>
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
    $idMurid = $_POST['idMurid'];
    $idPelajaran = $_POST['idPelajaran'];
    $nilai = $_POST['nilai'];
    $tanggal = $_POST['tanggalUjian'];

    $tambahkan = mysqli_query($con,"INSERT INTO ujian values('','$idPelajaran','$tanggal','$idMurid','$nilai')");
    if($tambahkan){
?>
<script type="text/javascript">
    alert("nilai berhasil ditambahkan");
    window.location.href="nilai.php";

</script>

<?php  }
}

?>