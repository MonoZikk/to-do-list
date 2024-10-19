<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];

// menyeleksi data user dengan email dan password yang sesuai
$data = mysqli_query($db,"SELECT * from user where email='$email' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$user = mysqli_fetch_array($data);
	$_SESSION['email'] = $email;
	$_SESSION['id'] = $user['id'];
	$_SESSION['status'] = true;
	header("location:../dashboard.php");
}else{
	echo "gagal";
}
?>