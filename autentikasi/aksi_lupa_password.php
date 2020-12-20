<?php
	include 'koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$retype	= $_POST['retype'];

	if($password != $retype){
		?>
			<script>
				alert("Password tidak sesuai!");
				window.location.href = 'lupa_password.php';
			</script>
		<?php
	}
	else{
		$query = "UPDATE tb_siswa SET password = '$password' WHERE username = '$username'";
		$hasil = mysqli_query($koneksi,$query);
		if($hasil){
		?>
			<script>
				alert("Password berhasil diperbarui!");
				window.location.href = 'login.php';
			</script>		
		<?php
		}
	}
?>