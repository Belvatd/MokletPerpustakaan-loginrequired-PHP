<?php
	include('../connect.php');
	$id = @$_GET['id'];
	$sql = mysqli_query($koneksi, "DELETE FROM t_petugas WHERE id='$id'");
	header('location:tampil_petugas.php');

?>