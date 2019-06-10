<?php 
include 'koneksi.php';
$email = $_GET['email'];
$querydelete = "delete from pengajar where `email`='$email' ";
$delete = "delete from users where `email`='$email' ";
mysqli_query($con,$querydelete);
mysqli_query($con,$delete);
?>
<script type="text/javascript">
	window.location.href="cekpengajar.php";
</script>