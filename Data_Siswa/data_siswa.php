<html>
    <style>
        #background {
            background-image: url(transparan.png);
            background-size: 100%;
            margin: 0;
        }
    
        nav {
            background-color: #0F3A5B;
            height: 60px;
        }
    
        .logo {
            width: 80px;
        }
    
        nav a {
            margin: 20px 10px 10px 10px;
            float: right;
            font-size: 20px;
            color: white;
            text-decoration: none;
            margin-right: 75px;
        }

        .aktif {
            border-bottom: 5px solid #D29D29;
        }
    
        .photo {
            width: 50px;
            float: right;
            border-radius: 50%;
            margin: 5px;
        }
    
        .user {
            float: right;
            font-size: 20px;
            color: white;
            margin-right: 10px;
        }

        .layout {
            background-color: #005EA7;
            opacity: 0.8;
            border-radius: 50px;
            height: 400px;
            margin: 100px 50px 0px 50px;
            color: white;
        }

        .tambah {
            background-color: #8FC058;
            width: 145px;
            height: 30px;
            margin-left: 65px;
            font-size: 20px;
        }

        .tambah a {
            text-decoration: none;
            color: black;
            margin: 10px 0px 0px 10px;
        }

        table {
            text-align:center;
            width: 90%;
            font-size: 20px; 
            color: black;
            border-color: gray;
            background-color: white;
        }
    </style>
    <head>
        <title>SiCerdas | Data Siswa</title>
    </head>
    <body id="background">
        <nav>
            <img class="logo" src="logo.png">
            <p class="user"> RANGGA S T</p>
            <a href="../Data_Siswa/data_siswa.php" class="aktif">DATA SISWA</a>
            <a href="../Data_Guru/data_guru.php">DATA GURU</a>
        </nav>

        <div class="layout">
        <br>
        <div class="tambah">
        <a href="tambah_siswa.php"><b>Tambah Siswa</b></a>
        </div>
        <br>

        <center>
        <table border="1px solid">
            <tr>
                <th>NIS</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>JENIS KELAMIN</th>
                <th>NO. TELP</th>
                <th>KELAS</th>
                <th>AKSI</th>
            </tr>

        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'db_sicerdas');

            $query = "SELECT * FROM tb_siswa";

            $exec = mysqli_query($conn, $query);

            while ($row=mysqli_fetch_array($exec, MYSQLI_ASSOC)) {
                echo"<tr>";
                echo"<td>", $row['nis'], "</td>";
                echo"<td>", $row['nama'], "</td>";
                echo"<td>", $row['alamat'], "</td>";
                echo"<td>", $row['jenis_kelamin'], "</td>";
                echo"<td>", $row['no_telp'], "</td>";
                echo"<td>", $row['id_kelas'], "</td>";
                echo"<td> <a href='edit_siswa.php?nis=$row[nis]'>Edit</a>
                          <a href='hapus_siswa.php?nis=$row[nis]'>Hapus</a>
                     </td>";
                echo"</tr>";
            }
            
        ?>
        </table>
        </center>
        </div>
    </body>
</html>