<?php
    if(isset($_POST['tambah'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_telp = $_POST['no_telp'];
    $kelas = $_POST['kelas'];
    $password = $_POST['password'];

    $conn = mysqli_connect('localhost', 'root', '', 'db_sicerdas');
    
    $query = "INSERT INTO tb_siswa VALUES ('$nis', '$nama', '$alamat', '$jenis_kelamin', '$no_telp', '$kelas', '$password')";

    $exec = mysqli_query($conn, $query);

    if($exec) {
        header('location:data_siswa.php');
    }
    else {
        echo"Gagal menambahkan data!";
    }
    }
?>