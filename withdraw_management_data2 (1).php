<?php
 
// Check if form is submitted for user update, then redirect to homepage after update
include 'koneksi.php';
if(isset($_GET['id']))
{	
	// include database connection file
    
	
	// update user data
	$result = mysqli_query($koneksi,"select a.id, a.uid, a.account_name,c.phone_number,a.`status`
from t_withdraw a, t_bank b, t_user c 
where a.bank_id=b.id and a.uid=c.uid and a.id= $_GET[id]");
    
    $result1 = mysqli_query($koneksi,"select 
            b.bank_name, 
            a.account_no, 
            a.withdraw_amount, 
            a.transfer_no, 
            a.transfer_img, 
            a.message
            from t_withdraw a, t_bank b where a.bank_id = b.id and a.id= $_GET[id]");
 
	while($hasil = mysqli_fetch_assoc($result))
	{
         if($hasil['status'] == 100){
                    $status = "Succed";
                }
                else{
                    $status = "";
                }
		$id 		= 	$hasil['id'];
        $uid 		= 	$hasil['uid'];
		$name 		= 	ucfirst($hasil['account_name']);
		$phone     	= 	ucfirst($hasil['phone_number']);
		
	}
    
    while($hasil = mysqli_fetch_assoc($result1))
	{
		$bank 		= 	$hasil['bank_name'];
        $accNo 		= 	$hasil['account_no'];
		$wAmount 	= 	ucfirst($hasil['withdraw_amount']);
		$tNo     	= 	ucfirst($hasil['transfer_no']);
		$tImg     	= 	ucfirst($hasil['transfer_img']);
		$message     	= 	ucfirst($hasil['message']);
		
	}
}
else
{ echo "test";}
?>
