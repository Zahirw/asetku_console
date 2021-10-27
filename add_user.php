<?php
 $mysqli = mysqli_connect("localhost", "root", "", "asetku");
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
						
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO tbl_user(usr_usrNm,usr_email,usr_passw,usr_type) VALUES('$username','$email','$password','2')");
		
		// Show message when user added
		header("location:login.html?pesan=sukses");
	}
	?>