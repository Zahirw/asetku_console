<?php
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['Submit1']) )
{	
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$rlgi = $_POST['rlgi'];
	$plcBr = $_POST['plcBr'];
	$dtBr = $_POST['dtBr'];
	$addrs = $_POST['addrs'];
	$city = $_POST['city'];
	$provi = $_POST['provi'];
	$cntry = $_POST['cntry'];
	$occup = $_POST['occup'];

	// include database connection file
	include 'koneksi.php';
	// update user data
	$result = mysqli_query($koneksi, "update t_lender_user_ext set 
                                        age=$age,religion=$rlgi,
                                        place_of_birth=$plcBr,
                                        birth_date=$dtBr,city=$city,
                                        province=$provi,address='$addrs'
                                        where uid= $_GET[id]");
    
    $result1 = mysqli_query($koneksi, "update t_user set 
                gender=$gender,occupation=$occup,first_name=$name
                where uid= $_GET[id]");
	//header("location:edit2.php?pesan=updatesukses");

	header("location:profile.php?id=$_GET[id]");
	
}
elseif
	(isset($_POST['Submit2']))
	{
	$edu = $_POST['edu'];
	$fldJb = $_POST['fldJb'];
	$tpUsr = $_POST['tpUsr'];
	$nmLeg = $_POST['nmLeg'];
	$tpLeg = $_POST['tpLeg'];
	$legal = $_POST['legal'];
	

	// include database connection file
	include 'koneksi.php';
	// update user data
	$result = mysqli_query($koneksi, "UPDATE t_lender_user_ext SET 
                                        field_of_job='$fldJb',
                                        type='$tpUsr',legal_entity_name='$nmLeg',
                                        legal_entity_type='$tpLeg',legal_entity_id='$legal' 
                                        WHERE uid = $_GET[id]");
    
    $result1 = mysqli_query($koneksi, "UPDATE t_user SET 
                                        education_level=$edu
                                        WHERE uid = $_GET[id]");
	//header("location:edit2.php?pesan=updatesukses");
	header("location:profile.php?id=$_GET[id]");	
}
elseif
	(isset($_POST['Submit3']))
	{
	$bank = $_POST['bank'];
	$accNo = $_POST['accNo'];
	$accName = $_POST['accName'];

	// include database connection file
	include 'koneksi.php';
	// update user data
	$result = mysqli_query($koneksi, "UPDATE tbl_bank SET bnk_bank='$bank',bnk_accNo='$accNo',bnk_accName='$accName' WHERE bnk_UID = $_GET[id]");
	//header("location:edit2.php?pesan=updatesukses");
	header("location:profile.php?id=$_GET[id]");	
}
elseif
	(isset($_POST['Submit4']))
	{
	$pLogn = $_POST['pLogn'];
	$pWith = $_POST['pWith'];

	// include database connection file
	include 'koneksi.php';
	// update user data
	$result = mysqli_query($koneksi, "UPDATE tbl_sec SET sec_pLogn='$pLogn',sec_pWith='$pWith' WHERE sec_UID = $_GET[id]");
	//header("location:edit2.php?pesan=updatesukses");
	header("location:profile.php?id=$_GET[id]");	
}

?>