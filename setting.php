<?php
 include ("koneksi.php");

$emailuser = $_GET['email'];
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
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.php">Electronic Home<span>Education </span> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"> <span class="caret"></span><img src="assets/img/avatar.png" class="dropdown-image"></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li role="presentation"><a href="#">Pengaturan </a></li>
                            <li role="presentation" class="active"><a href="logout.php">Keluar </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container" style="margin-center">
    <div class="row">
        <div class="col-md-6">
            <form class="bootstrap-form-with-validation" method="post">
                <?php
                    // $ambil ="SELECT * FROM  pengajar WHERE email='susi1@gmail.com'";
                    $ambil = "select * from pengajar WHERE email='$emailuser'";
                    $result = mysqli_query($con,$ambil);
                    $row = mysqli_fetch_array($result);
                    // echo($row);


                    if (mysqli_num_rows($result) == 0) {
                        echo '<center><h2><font color="red">Data Tidak Ditemukan.</font></h2></center>';

                    }else {
                ?>
                <form action="" method="post">
                <h2 class="text-center">Ubah Biodata Anda</h2>
                <div class="form-group">
                    <label class="control-label" for="nama-input">Nama Lengkap</label>
                    <input class="form-control" type="text" name="nama" id="nama" required value=<?php echo $row['nama']; ?>>
                </div>
                <div class="form-group">
                    <label class="control-label" for="email-input">Email</label>
                    <input class="form-control" type="email" name="email" id="email" required value =<?php echo $row['email']; ?>>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password-input">Password Sekarang</label>
                    <input class="form-control" type="password" name="passwordLama" id="passwordLama" required>
                </div>
                        <div class="form-group">
                    <label class="control-label" for="password-input">Password Baru</label>
                    <input class="form-control" type="password" name="passwordBaru" id="passwordBaru" required>
                </div>
                <div class="form-group">
                    <label class="control-label" for="agama-input">Agama</label>
                    <select class="form-control" id="agama" name="agama" value=<?php echo $row['agama']; ?>>
                        <option value="islam">Islam</option>
                        <option value="katolik">Katolik</option>
                        <option value="kristen">Kristen</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label" for="alamat-input">Alamat </label>
                    <textarea style="resize: vertical;" class="form-control" name="alamat" id="alamat" required value=<?php echo $row['alamat']; ?>></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="ubah">Ubah</button>
                </div>
                </form>
            </form>
        </div>
    </div>
</div>
<?php
        }
        if(isset($_POST['ubah'])){
        $nama = $_POST ['nama'];
        $email = $_POST ['email'];
        $pass = $_POST ['passwordBaru'];
        $agama = $_POST ['agama'];
        $alamat = $_POST ['alamat'];
        $queryinsert = "update `pengajar` SET `nama`='$nama',`email`='$email',`password`='$pass',`agama`='$agama',`alamat`='$alamat'WHERE `email`='$emailuser' ";
        $updateuser = "update `users` SET `nama`='$nama',`email`='$email',`password`='$pass'WHERE `email`='$emailuser' ";
        if (mysqli_query($con,$queryinsert)) {
            if (mysqli_query($con,$updateuser)) {
                // echo "data berhasil diupdate";
                // header("location:pengajar.php?email=$email");
                ?>
                <script type="text/javascript">
                alert ("data berhasil di update");
                window.location.href="pengajar.php?email=<?php echo $email ?>";
                </script>
                <?php
            }else {
                echo "Error :".$queryinsert,"<br/>".(mysqli_error($con));
            }
        }else {
            echo "Error :".$queryinsert,"<br/>".(mysqli_error($con));
        }

        mysqli_close($con);

            }
            ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>