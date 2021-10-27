<?php
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['submit']) )
{	
	$name           = $_POST['name'];
	$sequence       = $_POST['sequence'];
    $begin_time     = strtotime($_POST['begin_time'])*1000;
    $end_time       = strtotime($_POST['end_time'])*1000;
    $url            = $_POST['url'];

	// include database connection file
	include 'koneksi.php';
	// update user data
	$result = mysqli_query($koneksi, "insert into t_activity
                                    (name,sequence,url,begin_time,end_time) 
                                    values ('$name',$sequence,'$url',$begin_time,$end_time);");
    
   
	//header("location:edit2.php?pesan=updatesukses");

	header("location:activity_management.php");

}




?>