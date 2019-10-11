<?php
	//mysqli_connect("server","usrnm","pswd","db");
	$connection = mysqli_connect("127.0.0.1","root","","shop");

	// cek koneksi
	if(mysqli_connect_errno()){
		echo "Error: " . mysqli_connect_error();
	}