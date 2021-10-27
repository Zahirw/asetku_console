<?php
 
// Check if form is submitted for user update, then redirect to homepage after update
include 'koneksi.php';
if(isset($_GET['id']))
{	
	// include database connection file
    
	
	// update user data
	$result = mysqli_query($koneksi,"SELECT *, 
                                    FROM_UNIXTIME(create_time/1000, '%Y-%M-%d') create_time
                                    from t_news where id= $_GET[id]");
    
     /*-------------Personal Info----------------*/
	while($hasil = mysqli_fetch_assoc($result))
	{
		$id                       = $hasil['id']; 
        $uid 		              = $hasil['uid'];
		$title 	                  = ucfirst($hasil['title']);
        $create_time     	      = $hasil['create_time'];
        $system_notice   	      = $hasil['system_notice'];
        $msg        		      = $hasil['msg'];
        $system_notice_content    = $hasil['system_notice_content'];
    
	}
    
}
else
{ echo "test";}

 

?>
