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
                    <li><a href="admin1.php">Beranda</a></li>
                </ul>
                <h3><i class="glyphicon glyphicon-user"></i>
                    <small><b>Pengajar</b></small>
                </h3>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="/">Tambah</a></li>
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
            <form class="bootstrap-form-with-validation" method="post" action="">
        <h2 class="text-center">Tambah Tenaga Pengajar</h2>
        <div class="form-group">
            <label class="control-label" for="nama-input">Nama Lengkap</label>
            <input class="form-control" type="text" name="nama" id="nama" required>
        </div>
        <div class="form-group">
            <label class="control-label" for="email-input">Email</label>
            <input class="form-control" type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label class="control-label" for="password-input">Password</label>
            <input class="form-control" type="password" name="password" id="password" required>
        </div>
        <div class="form-group">
            <label class="control-label" for="ttl-input">Tempat, Tanggal Lahir</label>
            <input class="form-control" type="text" name="tempat" id="tempat" placeholder="Tempat Lahir" required>
            <div class="input-group date col-md-3" data-date="" data-date-format="yyyy-mm-dd">
              <input class="form-control" type="text" name="tanggalLahir" placeholder="tanggal Lahir" readonly="readonly" required>
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
        </div>
        <div class="form-group">
            <label for="pendidikan">Pilih Pendidikan </label>
            <select class="form-control" id="pendidikan" name="pendidikan">
                <option value="SD">SD / SEDERAJAT</option>
                <option value="SMP">SMP / SEDERAJAT</option>
                <option value="SMA">SMA / SEDERAJAT </option>
                <option value="D3">D3</option>
                <option value="S1">S1/D4</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select>
        </div>
                <div class="form-group">
            <label class="control-label" for="sekolah-input">Lulusan Sekolah Terakhir</label>
            <input class="form-control" type="text" name="sekolah" id="sekolah" required>
        </div>
        <div class="form-group">
            <label class="control-label" for="kelamin-input">Jenis Kelamin</label>
            <select class="form-control" id="kelamin" name="kelamin">
                <option value="laki-laki">laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label" for="agama-input">Agama</label>
            <select class="form-control" id="agama" name="agama">
                <option value="islam">Islam</option>
                <option value="katolik">Katolik</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label" for="alamat-input">Alamat </label>
            <textarea style="resize: vertical;" class="form-control" name="alamat" id="alamat" required></textarea>
        </div>
        <div class="form-group">
            <label class="control-label" for="foto-input">Foto</label>
            <input type="file" name="foto" id="toto" required>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="tambah">Tambahkan</button>
        </div>
    </form>
        </div>
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
include 'koneksi.php';
if (isset($_POST['tambah'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggalLahir'];
    $pendidikan = $_POST['pendidikan'];
    $sekolah = $_POST['sekolah'];
    $kelamin = $_POST['kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $foto = $_POST['foto'];

    $sql=mysqli_query($con,"INSERT INTO pengajar values ('','$nama','$email','$password','$tempat','$tanggal','$pendidikan','$sekolah','$kelamin','$agama','$alamat','$foto')");
    $sql1=mysqli_query($con,"INSERT INTO users values ('','$nama','$email','$password','pengajar')");
    // mysqli_query($con, "INSERT INTO users (id, nama, email, password, level) values ('','$nama','$email','$password','user')");
    if($sql && $sql1){
?>
<script type="text/javascript">
    alert("berhasil daftar");
    window.location.href="admin1.php";

</script>

<?php  }
}
?>

