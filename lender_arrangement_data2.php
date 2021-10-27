<?php
 
// Check if form is submitted for user update, then redirect to homepage after update
include 'koneksi.php';
if(isset($_GET['id']))
{	
	// include database connection file
    
	
	// update user data
	$result = mysqli_query($koneksi,"SELECT t_purchase_order.id,
		  t_user.uid,
		  t_user.first_name,
		  t_purchase_order.amount,
		  t_purchase_order.coupon_id,
		  t_purchase_order.name,
		  t_purchase_order.rate,
		  t_product.period
    FROM t_purchase_order 
    JOIN t_user ON t_purchase_order.uid  = t_user.uid
    JOIN t_product ON t_purchase_order.name = t_product.name where t_purchase_order.id= $_GET[id]");
    
	$result1 = mysqli_query($koneksi, "SELECT t_order_pay_info.`status`,
		 t_bank.bank_name,
		 t_order_pay_info.tx_id,
		 t_purchase_order.id,
         t_purchase_order.pay_time
FROM t_order_pay_info
JOIN t_purchase_order ON t_order_pay_info.id = t_purchase_order.id
JOIN t_bank ON t_order_pay_info.bank_id  = t_bank.id where t_order_pay_info.id= $_GET[id]");
    
	/*$result2 = mysqli_query($koneksi, "SELECT t_user.education_level,t_lender_user_ext.legal_entity_id,t_lender_user_ext.legal_entity_name,t_lender_user_ext.legal_entity_type,t_lender_user_ext.field_of_job,t_lender_user_ext.type
    FROM t_user JOIN t_lender_user_ext
    ON t_user.uid = t_lender_user_ext.uid where t_user.uid= $_GET[id]");
    
	$result3 = mysqli_query($koneksi, "SELECT * FROM t_user where uid = $_GET[id]");*/
	while($hasil = mysqli_fetch_assoc($result))
	{
		$id 		= 	$hasil['id'];
        $uid 		= 	$hasil['uid'];
		$name 		= 	ucfirst($hasil['first_name']);
        $amount 	= 	number_format($hasil['amount']);
		$coupon_id 	= 	ucfirst($hasil['coupon_id']);
        $pname   	= 	ucfirst($hasil['name']);
        $rate   	= 	ceil($hasil['rate']);
        $period   	= 	ucfirst($hasil['period']);
		
	}
	while($hasil1 = mysqli_fetch_assoc($result1))
	{
		//$bnk_uid 			= 	$hasil1['uid'];
        $status 			= 	$hasil1['status'];
		$bank 				= 	ucfirst($hasil1['bank_name']);
		$tnumber 			= 	$hasil1['tx_id'];
		$paytime			= 	$hasil1['pay_time'];
	}
	/*while($hasil1 = mysqli_fetch_assoc($result2))
	{
		$edu 			= 	ucfirst($hasil1['education_level']);
		$fldJb 			= 	ucfirst($hasil1['field_of_job']);
		$tpUsr			= 	ucfirst($hasil1['type']);
		$nmLeg			= 	ucfirst($hasil1['legal_entity_name']);
		$tpLeg			= 	ucfirst($hasil1['legal_entity_type']);
		$legal			= 	ucfirst($hasil1['legal_entity_id']);
	}
	while($hasil1 = mysqli_fetch_assoc($result3))
	{
		$sec_uid		= 	$hasil1['uid'];
		$pLogn 			= 	$hasil1['phone_number'];
		$pWith 			= 	$hasil1['login_pwd'];
	}*/
	// Redirect to homepage to display updated user in list
	//header("Location: test.php");
}
else
{ echo "test";}
?>
