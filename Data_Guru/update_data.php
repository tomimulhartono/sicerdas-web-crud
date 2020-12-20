<?php
    include 'koneksi.php';
    if(isset($_POST['update'])) {
    $NIP = $_POST['nip'];
    $Nama = $_POST['nama'];
    $Alamat = $_POST['alamat'];
    $Jenis_Kelamin = $_POST['jenis_kelamin'];
    $NoTelp = $_POST['no_telp'];
    $Mapel = $_POST['mapel'];


   $query = "UPDATE  tb_guru SET nama='$Nama', alamat='$Alamat', jenis_kelamin='$Jenis_Kelamin', no_telp='$NoTelp', mapel='$Mapel' WHERE nip='$NIP'";
   $hasil = mysqli_query($koneksi, $query);
    }
?>