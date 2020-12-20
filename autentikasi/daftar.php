<?php
	include 'koneksi.php';

	$query = "SELECT * FROM tb_kelas";
	$hasil = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
		<title>SiCerdas | Daftar</title>
	</head>
	<body>
		<div class="kiri">
			<img src="logo.png">
			<p align="center" class="selamat_datang"><b>Selamat datang di Sistem Informasi Akademik<br>
				SMK Cerdas</b>
			</p>
		</div>
		<div class="kanan">
			<form action="aksi_daftar.php" method="POST">
				<center>
					<h2 align="center" class="mt-1 pt-1">DAFTAR</h2>
					<table>
						<tr>
							<td>
								<label>Nama</label>
							</td>
							<td>
								<input type="text" name="nama">
							</td>
						</tr>
						<tr>
							<td>
								<label>Alamat</label>
							</td>
							<td>
								<textarea name="alamat"></textarea>
							</td>
						</tr>
						<tr>
							<td>
								<label>Jenis Kelamin</label>
							</td>
							<td>
								<input type="radio" name="jenis_kelamin" value="L"> Laki-laki<br>
								<input type="radio" name="jenis_kelamin" value="P"> Perempuan
							</td>
						</tr>
						<tr>
							<td>
								<label>No. Telepon</label>	
							</td>
							<td>
								<input type="number" name="no_telp" placeholder="No. Telepon">
							</td>
						</tr>
						<tr>
							<td>
								<label>Kelas</label>
							</td>
							<td>
								<select name="kelas">
									<option selected="" disabled="">--------- Pilih Kelas ---------</option>
									<?php
										while ($data = mysqli_fetch_assoc($hasil)){
									?>
									<option value="<?php echo $data['kelas']; ?>"><?php echo $data['kelas']; ?></option>
									<?php
										}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<label>Username</label>
							</td>
							<td>
								<input type="text" name="username">
							</td>
						</tr>
						<tr>
							<td>
								<label>Password</label>
							</td>
							<td>
								<input type="password" name="password">
							</td>
						</tr>
					</table>
					<input type="submit" name="login" value="DAFTAR" class="submit">
					<p class="p_login">Sudah punya akun? <a href="login.php" class="login"><b>Login disini</b></a></p>
				</center>
			</form>
		</div>
	</body>
</html>
<style type="text/css">
	body{
		background-color: #0F3A5B;
	}
	td{
		height: 35px;
	}
	.selamat_datang{
		margin-left: 75px;
		font-size: 20px;
		color: white;
		text-shadow: 2px 2px black;
	}
	h2{
		padding-top: 50px;
	}
	img{
		margin-top: 100px; 
		margin-left: 15%;
		width: 80%;
  		-webkit-filter: drop-shadow(5px 5px 5px);
  		filter: drop-shadow(5px 5px 5px);
	}
	.login{
		color: #333333;
		text-decoration: none;
	}
	.login:hover{
		color: #333333;
		text-decoration: none;
	}
	.p_login{
		padding-bottom: 20px;
	}
	.kiri{
		max-width: 50%;
		float: left;
	}
	.kanan{
		width: 50%;
		float: right;
	}
	form{
		height: 450px;
		margin-top: 15%;
		background-color: white;
		width: 80%;
		border-radius: 50px;
		box-shadow: 5px 5px 2px 2px;
	}
	.submit{
		font-size: 15px;
		font-weight: bold;
		margin-top: 5px;
		margin-bottom: 20px;
		color: white;
		background-color: #0F3A5B;
		border: none;
		width: 100px;
		height: 30px;
		border-radius: 20px;
	}
	.submit:hover{
		background-color: #005ea7;
	}
	label{
		font-size: 20px;
	}
	input, select{
		height: 20px;
    	border-radius: 3px;
    	padding-left: 4px;
	}
</style>