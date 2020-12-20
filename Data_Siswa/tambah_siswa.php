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
        td {
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
        <title>SiCerdas | Tambah Siswa</title>
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
        <h1>Tambah Data Siswa</h1>

        <form action="insert_siswa.php" method="post">
            <table>
                <tr>
                    <td>NIS </td>
                    <td><input type="text" name="nis" required></td>
                </tr>
                <tr>
                    <td>Nama Lengkap </td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Alamat </td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin </td>
                    <td><input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
                    <br>
                    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
                </tr>
                <tr>
                    <td>Nomor Telepon </td>
                    <td><input type="number" name="no_telp" required></td>
                </tr>
                <tr>
                    <td>Kelas </td>
                    <td><input type="text" name="kelas"></td>
                </tr>
                <tr>
                    <td>Password </td>
                    <td><input type="text" name="password" required></td>
                </tr>
            </table>
            <br>
            <button type="submit" name="tambah">TAMBAH</td>
            <button type="reset" name="reset">RESET</td>
            <button type="cancel" name="cancel">CANCEL
        </form>
        </center>
        </div>
    </body>
</html>