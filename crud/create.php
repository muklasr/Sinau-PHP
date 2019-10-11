<?php 
	// koneksi database
	include 'koneksi.php';

	$nama = $_GET['nama'];

	// create
	$sql = mysqli_query($connection,"insert into kategori(nama) values('$nama')");

	// redirect ke halaman read
	header("Location: read.php");