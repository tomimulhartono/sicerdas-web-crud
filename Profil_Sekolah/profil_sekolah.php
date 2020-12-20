<?php  
    session_start();
    
    if($_SESSION['status'] !="login"){
        header("location: ../autentikasi/login.php");
    }
?>
<style>
    #background {
        background-image: url(sekolah.png);
        width: 100%;
        margin: 0px;
    }
.logo{
    float: left;
    width: 80px;
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
  .nav-link{
    color: white;
  }
  .nav-link:hover{
    color:white;
    padding-bottom: 3px;
    border-bottom: 5px solid #d29d29;
  }
    .layout {
        background-color: #005EA7;
        overflow: hidden;
        height: 500px;
        border-radius: 50px;
        margin: 30px 50px 0px 50px;
        opacity: 0.8; <!-- Referensi Transparency : https://www.w3bai.com/id/css/css_image_transparency.html -->
    }

    #visi {
        text-align: center;
        color:white;
        float: left;
        width: 50%;
        border-right: 1px solid white;
        margin-top: 50px;
    }

    #misi {
        text-align: center;
        color: white;
        float: right;
        width: 40%;
        margin: 50px 50px;
    }

    hr {
        margin-top: 320px;
    }

    p {
        text-align: center;
        color: white;
    }
    .kontak {
        color: white;
        text-align: center;
    }
</style>

<html>
    <head>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../fontawesome/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <title>SiCerdas | Profil Sekolah</title>
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
                        <a class="nav-link" href="../Home/HomeScreen.php">Beranda <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="profil_sekolah.php">Profil Sekolah</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="../Program_Studi/program_studi.php">Program Studi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="../Fasilitas/fasilitas.php">Fasilitas</a>
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
 
            <br>

    <div class="layout">

        <div id="visi">
            <b>
                <u>VISI</u> <br> <br>
                Sebagai pusat pendidikan dan pelatihan yang menghasilkan <br>
                tenaga kerja terampil dan handal yang mampu menselaraskan <br>
                antara kemajuan IPTEK dan IMTAQ serta sanggup <br>
                bersaing di era global.
            </b>
            <br><br><br><br><br><br><br><br>
        </div>

        <div id="misi">
            <b>
                <u>MISI</u> <br> <br>
                <ol>
                    <li>Menanamkan keimanan dan ketaqwaan Kepada Tuhan <br> Yang Maha Esa.</li>
                    <li>Menyelenggarakan pendidikan yang efektif, <br> efisien dan berkualitas.</li>
                    <li>Membekali peserta didik dengan kemampuan untuk dapat <br> mengembangkan diri.</li>
                </ol>
            </b>
        </div>
    
        <hr>

        <p> Hubungi Kami </p>

        <div class="kontak">
            <i class="fab fa-instagram fa-2x" aria-hidden="true"></i> @smk_cerdas
            <i class="fab fa-whatsapp fa-2x" aria-hidden="true"></i> 0812345678910
            <i class="fab fa-twitter fa-2x" aria-hidden="true"></i> @smk_cerdas
            <i class="fab fa-facebook fa-2x" aria-hidden="true"></i> SMK Cerdas Bandung
        </div>

    </div>

    </body>
</html>