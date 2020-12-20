<?php
    if(isset($_POST['edit'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_telp = $_POST['no_telp'];
    $kelas = $_POST['kelas'];
    $password = $_POST['password'];

    $conn = mysqli_connect('localhost', 'root', '', 'db_sicerdas');

    $query = "UPDATE tb_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', no_telp='$no_telp', id_kelas='$kelas', password='$password' WHERE nis='$nis'"; 

    $exec = mysqli_query($conn, $query);
    
    if($exec) {
        header('location:data_siswa.php');
    }
    else {
        echo"Gagal mengubah data!";
    }
    }
?>