<?php
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['Submit']) )
{	
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$status = $_POST['status'];
	$type = $_POST['type'];
	// include database connection file
	$koneksi = mysqli_connect("localhost", "root", "", "asetku") or die (mysqli_error());
	// update user data
	$result = mysqli_query($koneksi, "UPDATE tbl_lender SET ldr_name='$name',ldr_phone='$phone',ldr_status='$status',ldr_type='$type' WHERE ldr_UID = $_GET[id]");
	//header("location:edit2.php?pesan=updatesukses");
	header("location:tables_dynamic.php?pesan=sukses");
	
}
else{
	echo "gagal";
}
?>