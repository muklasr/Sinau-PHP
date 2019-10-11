<?php 
	// koneksi database
	include 'koneksi.php';

	$id_kategori = $_GET['id_kategori'];
	$nama = $_GET['nama'];

	// create
	$sql = mysqli_query($connection,"update kategori set nama='$nama' where id_kategori='$id_kategori'");

	// redirect ke halaman read
	header("Location: read.php");