<?php 
	// koneksi database
	include 'koneksi.php';

	$id_kategori = $_GET['id_kategori'];

	// create
	$sql = mysqli_query($connection,"delete from kategori where id_kategori='$id_kategori'");

	// redirect ke halaman read
	header("Location: read.php");