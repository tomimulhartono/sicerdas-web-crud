<?php
	include 'koneksi.php';

	$query = "SELECT * FROM tb_mapel";
	$hasil = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html>
	<head>
		<link href="fontawesome/css/all.css" rel="stylesheet">
		<title>SiCerdas | Tambah Guru</title>
	</head>
	<body background="transparan.png" class="bg">
		<nav class="navbar">
	        <img src="logo.png" class="logo">
	        <div class="dropdown"> <!--referensi dropdown : https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_dropdown_navbar_click -->
		        <button class="dropbtn" onclick="myFunction()">Admin <i class="fa fa-caret-down" aria-hidden="true"></i></button>
		        <div class="dropdown-content" id="myDropdown">
				    <a href="#">Profile</a><br>
				    <a href="../Data_Guru/data_guru.php">Data Guru</a><br>
				    <a href="../Data_Siswa/data_siswa.php">Data Siswa</a>
				    <a href="">Logout</a>
			  	</div>
		  	</div>
			  		<a href="../Data_Siswa/data_siswa.php"><b>DATA SISWA</b></a>
               		<a href="../Data_Guru/data_guru.php"><b>DATA GURU</b></a>
	    </nav>
	    <div class="divForm"> 
	    <form action="aksi_tambah_guru.php" method="post">
	    	<h1 align="center">Tambah Data Guru</h1>
			<table align="center">
				<tr>
					<td class="label">
						<label>NIP</label>
					</td>
					<td>
						<input type="number" name="nip" placeholder="NIP">
					</td>
				</tr>
				<tr>
					<td>
						<label>Nama Lengkap</label>
					</td>
					<td>
						<input type="text" name="nama" placeholder="Nama Lengkap">
					</td>
				</tr>
				<tr>
					<td>
						<label>Alamat</label>
					</td>
					<td>
						<input type="text" name="alamat" placeholder="Alamat">
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
						<label>Mata Pelajaran</label>
					</td>
					<td>
						<select name="mapel">
							<option selected="" disabled="">--- Mata Pelajaran ---</option>
							<?php
								while ($data = mysqli_fetch_assoc($hasil)){
							?>
							<option value="<?php echo $data['mapel']; ?>"><?php echo $data['mapel']; ?></option>
							<?php
								}
							?>
						</select>
					</td>
				</tr>
			</table>
			<button type="submit" name="tambah" class="tombol">TAMBAH</button>
			<button class="tombol" type="reset">RESET</button>
			<button class="tombol" onclick="kembali()" href="data_guru.php">CANCEL</button>
		</form>
		</div>
	</body>
</html>
<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
<style type="text/css">
	body{

	}
	.bg{
		margin: 0px;
		background-size: 100%; 
	}
	.navbar{
		background-color: #0f3a5b;
		font-size: 20px;
		height: 60px;
		top: 0;
		right: 0;
		left: 0;
		box-shadow: 1px 1px 1px 1px rgba(0,0,0,0.5);
	}
	.navbar a{
		float: right;
		color: white;
		text-decoration: none;
		margin: 20px 10px 10px 10px;
	}
	.logo{
		float: left;
		width: 80px;
	}
	.img_profil{
		float: right;
		width: 50px;
		border-radius: 50%;
		margin-top: 5PX;
	}
	.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 20px;  
  border: none;
  outline: none;
  color: white;
  font-family: inherit;
  background-color: inherit;
  font-weight: bold;
  margin: 20px 10px 10px 10px;
}
.dropdown-content {
  margin-top: 5px;
  display: none;
  position: fixed;
  background-color: #005EA7;
  box-shadow: 1px 1px 1px 1px rgba(0,0,0,0.5);
  text-align: left;

}

.dropdown-content a {
  color: white;
  text-decoration: none;
  text-align: left;
  width: 150px;
  margin: 0px 0px 0px 0px;
  padding: 5px 3px 5px 17px;
  border: 1px solid white;
}

.dropdown-content a:hover {
  background-color: #0f3a5b;
}

.show {
  display: block;
}
.form_edit{
        background-color: #005EA7;
        overflow: hidden;
        height: 400px;
        border-radius: 50px;
        margin: 100px 50px 0px 50px;
        opacity: 0.8;
    }
    .divForm{
        background-color: #005EA7;
        overflow: hidden;
        height: auto;
        width: 40%;
        border-radius: 50px;
        margin: 50px auto auto 30%;
        opacity: 0.8; /*Referensi : https://www.w3bai.com/id/css/css_image_transparency.html */
    }
    table{
    	width: 80%;
    }
    .divForm form{
    	color: white;
    	margin-top: 50px;
    	margin-bottom: 50px; 
    }
    .label{
    	width: 40%;
    }
    .divForm form label{
    	font-size: 20px;
    }
    .divForm form input{
    	height: 20px;
    	border-radius: 3px;
    	border: none;
    	padding-left: 4px;
    }
    td{
    	height: 30px;
    }
    .tombol{
    	margin-left: 10%;
    	font-size: 15px;
		font-weight: bold;
		margin-top: 30px;
		color: white;
		background-color: #0F3A5B;
		border: none;
		width: 100px;
		height: 30px;
		border-radius: 20px;
    }
</style>