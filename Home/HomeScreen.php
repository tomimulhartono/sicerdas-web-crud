<?php  
    session_start();
    
    if($_SESSION['status'] !="login"){
        header("location: ../autentikasi/login.php");
    }
?>
<html>
        <style type="text/css">
    .logo{
    float: left;
    width: 80px;
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
  .p{
    color:white;
    font-size: 
  }
        </style>
    <head>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <title>SiCerdas | Home</title>
    </head>
    <body background="background.png" class="bg">
        <nav class="navbar navbar-expand-lg">
            <img src="logo.png" class="logo">
            <button class="navbar-toggler d-flex flex-row" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link" href="HomeScreen.php">Beranda <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="../Profil_Sekolah/profil_sekolah.php">Profil Sekolah</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="../Program_Studi/program_studi.php">Program Studi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="../Fasilitas/fasilitas.html">Fasilitas</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <?php echo $_SESSION['username']; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="../Profil/Profil.html">Profil</a>
                            <a class="dropdown-item" href="../Jadwal/Jadwal.html">Jadwal</a>
                            <a class="dropdown-item" href="../Daftar_Nilai/nilai.html">Nilai</a>
                            <a class="dropdown-item" href="../autentikasi/logout.php">Logout</a>

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    <img src="logo.png" style="width:30%; margin-left: 35%;">
    <div align=center style="border-radius:100px; background-color: #005EA7; margin: 0px 20% 10px 20% ; width: 60%; opacity: 0.8;"> <!--Sumber: Tomi(Anggota Kelompok)-->
        <br>
        <br><br>
        <p class="p"><b>SMK Cerdas</b></p>
        <p class="p"><b>Berdiri tahun 2013 dan sudah terakreditasi "C"</b></p>
        <p class="p"><b>dengan menghasilkan lulusan yang berkualitas sehingga langsung</b></p>
        <p class="p"><b>diserap oleh industri.</b></p>
        <br>
        <br><br>
    </div>
    </body>
</html>