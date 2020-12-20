<?php
	include 'koneksi.php';

	$nip  = $_POST['nip']; 
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jkelamin = $_POST['jenis_kelamin'];
	$no_telp = $_POST['no_telp'];
	$mapel = $_POST['mapel'];

	$query = "INSERT INTO tb_guru VALUES ('$nip','$nama','$alamat','$jkelamin','$no_telp','$mapel')";
	$hasil = mysqli_query($koneksi, $query);

	header('location:data_guru.php')
?>