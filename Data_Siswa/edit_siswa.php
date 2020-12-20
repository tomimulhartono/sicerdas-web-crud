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
            height: 420px;
            margin: 100px 400px 0px 400px;
            color: white;
        }

        table {
            width: 70%;
            font-size: 20px;
        }
        table td {
            height: 30px;
            color: white;
        }

        button {
            margin: 0px 60px 0px 5px;
            color: white;
            background-color: #0F3A5B;
            border-radius: 50px;
            width: 80px;
            border-color: #0F3A5B;
        }
    </style>
<head>
    <title>SiCerdas | Edit Siswa</title>
</head>
<body id="background">
    <nav>
        <img class="logo" src="logo.png">
        <p class="user"> RANGGA S T</p>
        <a href="../Data_Siswa/data_siswa.php">DATA SISWA</a>
        <a href="../Data_Guru/data_guru.php">DATA GURU</a>
    </nav>

    <div class="layout">
    <center>
    <br>
    <h1>Edit Siswa</12>
    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'db_sicerdas');

        $nis = $_GET['nis'];
    
        $query = "SELECT * FROM tb_siswa WHERE nis = '$nis'";

        $exec = mysqli_query($conn, $query);
        
        while($data = mysqli_fetch_array($exec)) {
    ?>
    <form action="update_siswa.php" method="post">
    <br>
        <table>
            <tr>
                <td>NIS</td>
                <td><?php echo $data['nis']; ?></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td> <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
                    <br>
                    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
            </tr>
            <tr>
                <td>No. Telpon</td>
                <td><input type="number" name="no_telp" value="<?php echo $data['no_telp']; ?>"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" value="<?php echo $data['id_kelas']; ?>"></td>
            </tr>
        </table>
        <br>
            <button type="submit" name="edit">EDIT</td>
            <button type="reset" name="reset">RESET</td>
            <button type="cancel" name="cancel">CANCEL
    </form>
    <?php
        }
    ?>
    </center>
    </div>
</body>
</html>