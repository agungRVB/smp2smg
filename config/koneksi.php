<?php

	$host="localhost";
	$user="root";
	$password="";
	$database="smp";
	$connect=mysqli_connect($host,$user,$password,$database);

	//Cek Koneksi
	if(mysqli_connect_errno()){
		echo"Koneksi database gagal:",mysqli_connect_errno();
	}
?>