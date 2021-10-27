<?php
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['submit1']) )
{	
	    $name 		       = ucfirst($_POST['name']);
		$rate 		       = $_POST['rate'];
		$total 		       = $_POST['total_amount'];
        $sequence 	       = $_POST['order'];
        $period 	       = $_POST['period'];
        $limit   	       = $_POST['times_limit'];
        $start   	       = $_POST['base_amount'];
        $increase          = $_POST['increase_amount'];
        $amt               = $_POST['personal_limit'];
        $start_time        = strtotime($_POST['start_time'])*1000;
        $end_time          = strtotime($_POST['end_time'])*1000;
        $desc              = json_encode($_POST['json_product_desc']);

	// include database connection file
	include 'koneksi.php';
	// update user data
	$result = mysqli_query($koneksi, "insert into t_product
                                      (name,rate,total_amount,`order`,period,times_limit,base_amount,
                                      increase_amount,personal_limit,start_time,end_time,json_product_desc) 
                                      values ('$name',$rate,$total,$sequence,$period,$limit,$start,$increase,
                                      $amt,$start_time,$end_time,'$desc');");
    
   
	//header("location:edit2.php?pesan=updatesukses");

	header("location:lending_management.php");

}




?>