<?php  
session_start();
if($_SESSION['login']!="user"){
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
    <nav class="navbar navbar-default custom-header">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.html">Electronic Home<span>Electronic </span> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav links">
                    <li role="presentation"><a href="grafik.php">Grafik Nilai Anak </a></li>
                    <li role="presentation"><a class="active" href="/">Tambah Peserta Didik </a></li>
                    <li role="presentation"><a href="rapotAnak.php"> Rapot Anak</a></li>
                    <!-- <li role="presentation"><a href="harapan.php?id=<?php echo $iduser ?>" class="custom-navbar"> Jejang Pendidikan Selanjutnya<span class="badge">new</span></a></li> -->
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
    <form class="bootstrap-form-with-validation col-md-8 " method="post" action="">
        <h2 class="text-center">Form Pendaftaran Peserta didik</h2>
        <div class="form-group">
            <label class="control-label" for="nama-input">Nama Lengkap</label>
            <input class="form-control" type="text" name="nama" id="nama" required>
        </div>
        <div class="form-group">
            <label class="control-label" for="ttl-input">Tempat, Tanggal Lahir</label>
            <input class="form-control" type="text" name="tempat" id="tempat-input" placeholder="Tempat Lahir" required>
            <div class="input-group date col-md-3" data-date="" data-date-format="yyyy-mm-dd">
              <input class="form-control" type="text" name="tanggalLahir" placeholder="tanggal Lahir" readonly="readonly" required>
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
            
        </div>
        <div class="form-group">
            <label class="control-label" for="sekolah-input">Asal Sekolah</label>
            <input class="form-control" type="text" name="sekolah" id="sekolah" required>
        </div>
		<div class="form-group">
			<label for="pendidikan">Pilih Pendidikan</label>
			<select class="form-control" id="pendidikan" name="pendidikan">
				<option value="SD">SD</option>
				<option value="SMP">SMP</option>
				<option value="SMA">SMA</option>
			</select>
		</div>
		<div class="form-group">
            <label class="control-label" for="kelas-input">Kelas</label>
            <input class="form-control" type="text" name="kelas" id="kelas">
        </div>
        <div class="form-group">
            <label class="control-label" for="kelamin-input">Jenis Kelamin</label>
            <select class="form-control" id="kelamin" name="kelamin">
                <option value="laki-laki">laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label" for="alamat-input">Alamat </label>
            <textarea style="resize: vertical;"class="form-control" name="alamat" id="alamat"></textarea>
        </div>
        <div class="form-group">
            <label class="control-label" for="foto-input">Foto</label>
            <input type="file" name="foto" id="toto">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="tambah">Tambahkan</button>
        </div>
    </form>
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
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggalLahir'];
    $sekolah = $_POST['sekolah'];
    $pendidikan = $_POST['pendidikan'];
    $kelas = $_POST['kelas'];
    $kelamin = $_POST['kelamin'];
    $alamat = $_POST['alamat'];
    $foto = $_POST['foto'];
    $idUser = $_GET['id'];
    
    // $emailUser = $_GET['email'];

    $sql=mysqli_query($con,"INSERT INTO murid values ('','$nama','$tempat','$tanggal','$sekolah','$pendidikan','$kelas','$kelamin','$alamat','$foto','$idUser','nonaktif')");
    if($sql){
?>
<script type="text/javascript">
    alert("Anak anda Berhasil didaftarkan");
    window.location.href="rapotAnak.php";

</script>

<?php  }
}
?>
