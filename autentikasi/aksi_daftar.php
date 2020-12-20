<?php
	include 'koneksi.php';
 
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jkelamin = $_POST['jenis_kelamin'];
	$no_telp = $_POST['no_telp'];
	$kelas = $_POST['kelas'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "INSERT INTO tb_siswa (nama, alamat, jenis_kelamin, no_telp, kelas, username, password, level) VALUES ('$nama','$alamat','$jkelamin','$no_telp','$kelas','$username','$password', 'siswa')";
	$daftar = mysqli_query($koneksi, $query);

	if($daftar){
		echo "
			<script>
				alert('Berhasil mendaftar!');
				window.location.href='login.php';
			</script>
		";
	}
	else{
		echo "
			<script>
				alert('Gagal mendaftar!');
				window.location.href='daftar.php';
			</script>
		";
	}
?>