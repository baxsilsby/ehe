<?php 
include 'koneksi.php';
$id = $_GET['id'];
$queryinsert = "update `murid` SET `status`='nonaktif' WHERE `id`='$id' ";
mysqli_query($con,$queryinsert);
?>
<script type="text/javascript">
	window.location.href="cekMurid.php";
</script>