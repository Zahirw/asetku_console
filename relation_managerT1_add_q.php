<?php
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['submit']) )
{	
	$name           = $_POST['name'];
	$code           = $_POST['code'];
    $conuntry       = 1;
    $create_time    = time()*1000;
    $status         = 1;

	// include database connection file
	include 'koneksi.php';
	// update user data
	$result = mysqli_query($koneksi, "insert into t_rm_code
                                    (name,code,country_id,`status`,create_time) 
                                    values ('$name','$code',$conuntry,$status,$create_time);");
    
   
	//header("location:edit2.php?pesan=updatesukses");

	header("location:relation_managerT1.php");

}



