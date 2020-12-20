<html>
	<head>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<title>SiCerdas | Data Guru</title>
	</head>
	<body background="transparan.png" class="bg">
		<nav class="navbar navbar-expand-lg">
		  	<img src="logo.png" class="logo">
		  	<button class="navbar-toggler d-flex flex-row" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		  	<div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNavDropdown">
			    <ul class="navbar-nav">
				      <li class="nav-item active">
				        <a class="nav-link" href="../Data_Guru/data_guru.php">Data Guru <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="../Data_Siswa/data_siswa.php">Data Siswa</a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Admin
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          		<a class="dropdown-item" href="logout.php">Logout</a>
				        </div>
				    </li>
			    </ul>
		  	</div>
		</nav>
		<div class="divForm"> 
	    <form action="aksi_tambah_guru.php" method="post">
	    	<h1 align="center">Data Guru</h1>
			<table align="center" border="1px solid">
			<tr>
				<th>No.</th>
				<th>NIP</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>No. Telepon</th>
				<th>Mapel</th>
				<th>Aksi</th>
			</tr>

		<?php #referensi dari malasngoding.com
			include 'koneksi.php';

			$no = 1;
			$query = mysqli_query($koneksi,"SELECT * FROM tb_guru");
			while ($data = mysqli_fetch_array($query)) {
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $data['nip']; ?></td>
					<td><?php echo $data['nama']; ?></td>
					<td><?php echo $data['alamat']; ?></td>
					<td><?php echo $data['jenis_kelamin']; ?></td>
					<td><?php echo $data['no_telp']; ?></td>
					<td><?php echo $data['mapel']; ?></td>
					<td>
						<a href="edit_guru.php?nip=<?php echo $data['nip']; ?>">Edit</a>
						<a href="aksi_hapus_guru.php?nip=<?php echo $data['nip']; ?>">Hapus</a>
					</td>
				</tr>
				<?php
			}
			?>
		</table>
		</div>
	</body>
</html>

<style type="text/css">
  .logo{
    float: left;
    width: 80px;
  }
  .navbar{
    background-color: #0f3a5b;
    font-size: 20px;
    top: 0;
    right: 0;
    left: 0;
    box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.5);
  }
  .nav-link{
    color: white;
  }
  .nav-link:hover{
    color:white;
    padding-bottom: 3px;
    border-bottom: 5px solid #d29d29;
  }
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
        width: 90%;
        border-radius: 50px;
        margin: 50px auto auto 5%;
        opacity: 0.8; /*Referensi : https://www.w3bai.com/id/css/css_image_transparency.html */
    }
    table{
      width: 90%;
      border: 1px solid white;
      color: inherit;
      text-align: center;
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