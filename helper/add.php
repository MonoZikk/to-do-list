<?php
include 'koneksi.php'; 

session_start();
//mengambil nilai session
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$date = $_SESSION['date'];
$phone = $_SESSION['phone'];
$gender = $_SESSION['gender'];
//mengambil nilai post
$email=$_POST['email'];
$newpassword = $_POST['newpassword'];
$confirmpassword = $_POST['confirmpassword'];

if ($newpassword !== $confirmpassword) {
    echo "Password tidak sesuai!";
    exit();
}

//query
$query_simpan="INSERT INTO user (first_name,last_name,date,phone,gender,email,password) values ('$firstname','$lastname','$date','$phone','$gender', '$email', '$newpassword')";
$simpan=mysqli_query($db,$query_simpan);

//cek
if ($simpan) {
	echo "berhasil <br>";
    // Hapus session setelah data disimpan
    session_unset();
    session_destroy();
	header("location:../login.php");
	exit;
}
else{
	echo "gagal <br>";
}
 ?>