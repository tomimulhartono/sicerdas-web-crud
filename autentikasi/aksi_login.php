<?php
	session_start();
	include 'koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "select * from tb_siswa where username = '$username' and password = '$password'";
	$login = mysqli_query($koneksi, $query);
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		$data = mysqli_fetch_assoc($login);
		if ($data['level'] == "admin") {
			echo "
			<script>
				alert('Login berhasil!');
				window.location.href='#';
			</script>
			";
			if(!isset($_SESSION)){ 
	        	session_start(); 
	    	} 
			$_SESSION['username'] = $username;
			$_SESSION['status'] = "login";
			$_SESSION['level'] = "admin";
		}
		else if($data['level'] == "siswa"){
			echo "
			<script>
				alert('Login berhasil!');
				window.location.href='../Home/HomeScreen.php';
			</script>
			";
			if(!isset($_SESSION)){ 
	        	session_start(); 
	    	}
			$_SESSION['username'] = $username;
			$_SESSION['status'] = "login";
			$_SESSION['level'] = "siswa";
		}
	}
	else{
		echo "
			<script>
				alert('Login gagal!');
				window.location.href='login.php';
			</script>
		";
	}
?>