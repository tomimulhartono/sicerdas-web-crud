<?php
	include 'koneksi.php';
	
	$nip = $_GET['nip'];

	$query = "DELETE FROM tb_guru WHERE nip = '$nip'";
	mysqli_query($koneksi, $query);

	header("location:data_guru.php");
?>