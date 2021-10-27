<?php
 
// Check if form is submitted for user update, then redirect to homepage after update
include 'koneksi.php';
if(isset($_GET['id']))
{	
	// include database connection file
    
	
	// update user data
	$result = mysqli_query($koneksi,"SELECT * from
                            t_product where id= $_GET[id]");
    
     /*-------------Personal Info----------------*/
	while($hasil = mysqli_fetch_assoc($result))
	{
		$id 		    = 	$hasil['id'];
		$name 		    = 	ucfirst($hasil['name']);
		$rate 		    = 	$hasil['rate'];
		$total 		    = 	$hasil['total_amount'];
        $sequence 	    = 	$hasil['order'];
        $period 	    = 	$hasil['period'];
        $limit   	    = 	$hasil['times_limit'];
        $start   	    = 	$hasil['base_amount'];
        $increase       =   $hasil['increase_amount'];
        $amt            =   $hasil['personal_limit'];
        $start_time     =   $hasil['start_time'];
        $end_time       =   $hasil['end_time'];
        $desc           =   json_decode($hasil['json_product_desc']);
	}
    
}
else
{ echo "test";}

 

?>
