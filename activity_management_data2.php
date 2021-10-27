<?php
 
// Check if form is submitted for user update, then redirect to homepage after update
include 'koneksi.php';
if(isset($_GET['id']))
{	
	// include database connection file
    
	
	// update user data
	$result = mysqli_query($koneksi,"SELECT *, 
                                    FROM_UNIXTIME(end_time/1000, '%Y-%M-%d') end_time,
                                    FROM_UNIXTIME(begin_time/1000, '%Y-%M-%d') begin_time
                                    from t_activity where id= $_GET[id]");
    
     /*-------------Personal Info----------------*/
	while($hasil = mysqli_fetch_assoc($result))
	{
		$id 		= 	$hasil['id'];
		$name 		= 	ucfirst($hasil['name']);
		$sequence 	= 	$hasil['sequence'];
		$url 		= 	$hasil['url'];
        $begin_time = 	$hasil['begin_time'];
        $end_time 	= 	$hasil['end_time'];
        $banner 	= 	$hasil['banner_url'];
    
	}
    
}
else
{ echo "test";}

 

?>
