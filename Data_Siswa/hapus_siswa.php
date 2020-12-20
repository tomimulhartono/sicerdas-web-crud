<?php 

    $nis = $_GET['nis'];

    $conn = mysqli_connect('localhost', 'root', '', 'db_sicerdas');

    $query = "DELETE FROM tb_siswa WHERE nis = '$nis'";

    $exec = mysqli_query($conn, $query);

    if($exec) {
        header('location:data_siswa.php');
    }
    else {
        echo"Gagal menghapus data!";
    }
?>