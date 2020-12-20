<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
		<title>SiCerdas | Lupa Password</title>
	</head>
	<body>
		<div class="kiri">
			<img src="logo.png">
			<p align="center" class="selamat_datang"><b>Selamat datang di Sistem Informasi Akademik<br>
				SMK Cerdas</b>
			</p>
		</div>
		<div class="kanan">
			<form action="aksi_lupa_password.php" method="POST">
				<center>
					<h6 align="center" class="mb-5">Untuk dapat mereset Password anda, silakan masukkan Username Anda.</h6>
					<table>
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
						<tr>
							<td>
								<label>Confirm Password</label>
							</td>
							<td>
								<input type="password" name="retype">
							</td>
						</tr>
					</table>
					<input type="submit" name="login" value="OK" class="submit">
					<input type="button" name="cancel" value="CANCEL" class="cancel" onclick="window.location.href='login.php'">
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
	h6{
		padding-top: 50px;
		font-weight: normal;
	}
	img{
		margin-top: 100px; 
		margin-left: 15%;
		width: 80%;
  		-webkit-filter: drop-shadow(5px 5px 5px);
  		filter: drop-shadow(5px 5px 5px);
	}
	.klik_disini, .daftar{
		color: #333333;
		text-decoration: none;
	}
	.klik_disini:hover, .daftar:hover{
		color: #333333;
		text-decoration: none;
	}
	.p_daftar{
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
	.submit, .cancel{
		font-size: 15px;
		font-weight: bold;
		margin-top: 30px;
		margin-bottom: 120px;
		color: white;
		background-color: #0F3A5B;
		border: none;
		width: 80px;
		height: 30px;
		border-radius: 20px;
	}
	.submit:hover, .cancel:hover{
		background-color: #005ea7;
	}
		label{
		font-size: 20px;
	}
	input{
		height: 20px;
    	border-radius: 3px;
    	padding-left: 4px;
	}
</style>