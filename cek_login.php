<?php 

// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
$koneksi = mysqli_connect("localhost", "root", "", "asetku");

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
echo $username." dan ".$password." <br/>";
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from tbl_user where usr_usrNm='$username' and usr_Passw='$password'");
while($hasil = mysqli_fetch_assoc($data)){
	$type = $hasil['usr_type'];
}

var_dump($data);echo "<br/>";
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
var_dump($cek);

	if($cek > 0){
		$_SESSION['username'] = $username;
		$_SESSION['type'] = $type;
		$_SESSION['status'] = "login";
		header("location:index.php?pesan=sukses");
		
	}else{
		header("location:login.html?pesan=gagal");
	}


?>