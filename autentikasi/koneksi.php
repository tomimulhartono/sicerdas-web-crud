<?php
	$koneksi = mysqli_connect("localhost","root","","db_sicerdas");

	if(!$koneksi){
	echo "koneksi database gagal : ". mysqli_connect_error();
	}
?>