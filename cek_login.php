<?php
session_start();
include "config/koneksi.php";

// contoh login sederhana, bisa dikembangkan lagi

// password di amankan dengan enkripsi kriptografi MD5
@$pass = md5($_POST['password']);

//mysquli_escape_string fungsinya untuk mengamankan karkter aneh yang akan diinputkan user, seperti 
//sql injection


@$username = mysqli_escape_string($koneksi, $_POST['username']);
@$password = mysqli_escape_string($koneksi, $pass);


$login = mysqli_query($koneksi, "SELECT * from tuser 
								WHERE username='$username' and password = '$password' ");
$data = mysqli_fetch_array($login);
if($data) 
{
	$_SESSION['id_user'] = $data['id_user'];
	$_SESSION['username'] = $data['username'];
	header('location:admin.php');
}

else 
{
	echo "<script>

					alert('maaf , login GAGAL, pastikan username dan password anda Benar..!');
					document.location='index.php';
	            </script>";
}

?>