<?php
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['submit']) )
{	
	$title                          = $_POST['title'];
	$system_notice                  = $_POST['system_notice'];
    $msg                            = ucfirst($_POST['msg']);
    $system_notice_content          = ucfirst($_POST['system_notice_content']);
    $uid                            = $_POST['uid'];
    $create_time                    = strtotime($_POST['create_time'])*1000;

	// include database connection file
	include 'koneksi.php';
	// update user data
	$result = mysqli_query($koneksi, "insert into t_news
                                    (title,system_notice,msg,system_notice_content,create_time) 
                                    values ('$title',$system_notice,'$msg',$system_notice_content,$create_time);");
    
   
	//header("location:edit2.php?pesan=updatesukses");

	header("location:news_management.php");

}




?>