<?php  
session_start();
if($_SESSION['login']!="user"){
    header('location:index.php');
}
if(empty($_SESSION['login'])){
    header('location:login.php');
}
$idUser = $_GET['id'];
$idmurid = $_GET['idMurid'];
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
    $sql    = "select * from murid where idUser = $idUser";
    $query  = mysqli_query($con,$sql);
  ?>
    <nav class="navbar navbar-default custom-header">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.html">Electronic Home<span>Education </span> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav links">
                    <li role="presentation"><a href="grafik.php">Grafik Nilai Anak </a></li>
                    <li role="presentation"><a class="active" href="pendaftaranMurid.php">Tambah Peserta Didik </a></li>
                    <li role="presentation"><a href="rapotAnak.php"> Rapot Anak</a></li>
                    <li role="presentation"><a href="/" class="custom-navbar"> Jejang Pendidikan Selanjutnya<span class="badge">new</span></a></li>
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
    <form class="bootstrap-form-with-validation" action="" method="post">
        <h2 class="text-center">Form Harapan Orang Tua</h2>
        <div class="form-group">
            <label class="control-label" for="harapan-input">Harapan Anda </label>
            <textarea style="resize: vertical;" class="form-control" name="harapan" id="harapan" required></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="tambah">Tambahkan</button>
        </div>
    </form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php  
include 'koneksi.php';
if (isset($_POST['tambah'])){
    $keterangan = $_POST['harapan'];
    // $idmurid = $_GET['id'];


    $sql=mysqli_query($con,"INSERT INTO harapan values ('','$keterangan','$idUser','$idmurid')");
    if($sql){
?>
<script type="text/javascript">
    alert("berhasil ditambahkan");
    window.location.href="harapan.php";

</script>

<?php  }
}
?>