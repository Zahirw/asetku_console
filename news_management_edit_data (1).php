<?php
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['submit1']) )
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
	$result = mysqli_query($koneksi, "update t_news set
                                        title='$title', system_notice='$system_notice',msg='$msg',
                                        system_notice_content='$system_notice_content',
                                        uid=$uid,create_time=$create_time
                                        where id= $_GET[id]");
    
   
	//header("location:edit2.php?pesan=updatesukses");

	header("location:news_management.php?id=$_GET[id]");
	
}



?>