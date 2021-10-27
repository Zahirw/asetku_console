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
        $desc              = $_POST['json_product_desc'];

	// include database connection file
	include 'koneksi.php';
	// update user data
	$result = mysqli_query($koneksi, "update t_product set 
                                        name='$name',rate=$rate,total_amount=$total,
                                        `order`=$sequence,period=$period,times_limit=$limit,
                                        base_amount=$start,increase_amount=$increase,personal_limit=$amt,
                                        start_time=$start_time,end_time=$end_time
                                        where id= $_GET[id]");
  

	header("location:lending_management.php");
	
}
?>