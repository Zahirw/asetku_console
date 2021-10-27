<?php
 
// Check if form is submitted for user update, then redirect to homepage after update
include 'koneksi.php';
if(isset($_GET['id']))
{	
	// include database connection file
    
	
	// update user data
	$result = mysqli_query($koneksi,"SELECT t_lender_user_ext.uid,t_user.first_name,t_user.phone_number,t_user.gender,t_lender_user_ext.age,t_lender_user_ext.religion,t_lender_user_ext.place_of_birth,t_lender_user_ext.birth_date,t_lender_user_ext.address,t_lender_user_ext.city,t_lender_user_ext.province,t_user.country_id,t_user.occupation
    FROM t_lender_user_ext JOIN t_user
    ON t_lender_user_ext.uid  = t_user.uid where t_lender_user_ext.uid= $_GET[id]");
    
	$result1 = mysqli_query($koneksi, "SELECT * FROM 
                                        t_bank a, t_user_bank_info b
                                        where a.id = b.bank_id and b.uid = $_GET[id]");
    
	$result2 = mysqli_query($koneksi, "SELECT t_user.education_level,t_lender_user_ext.legal_entity_id,t_lender_user_ext.legal_entity_name,t_lender_user_ext.legal_entity_type,t_lender_user_ext.field_of_job,t_lender_user_ext.type
    FROM t_user JOIN t_lender_user_ext
    ON t_user.uid = t_lender_user_ext.uid where t_user.uid= $_GET[id]");
    
	$result3 = mysqli_query($koneksi, "SELECT * FROM t_user where uid = $_GET[id]");
    
     /*-------------Personal Info----------------*/
	while($hasil = mysqli_fetch_assoc($result))
	{
		$uid 		= 	$hasil['uid'];
		$name 		= 	ucfirst($hasil['first_name']);
		$gender		=	ucfirst($hasil['gender']);
		$age		=	$hasil['age'];
		$plcBr		=	ucfirst($hasil['place_of_birth']);
		$dtBr		=	$hasil['birth_date'];
		$phone 		=	$hasil['phone_number'];
		$rlgi 		= 	ucfirst($hasil['religion']);
		$occup		=	ucfirst($hasil['occupation']);
		$addrs		=	ucfirst($hasil['address']);
		$city		=	ucfirst($hasil['city']);
		$provi		=	ucfirst($hasil['province']);
		$cntry		=	ucfirst($hasil['country_id']);
		
	}
    
    /*-------------Bank Account Info----------------*/
	if($hasil1 = mysqli_fetch_assoc($result1))
	{
		//$bnk_uid 			= 	$hasil1['uid'];
		$bank 				= 	ucfirst($hasil1['bank_name']);
		$accNo 				= 	$hasil1['account_no'];
		$accName			= 	ucfirst($hasil1['bank_first_name']);
		/*$idNo				= 	$hasil1['bnk_idNo'];
		$idPoto				= 	$hasil1['bnk_idPoto'];*/
	}
    else{
        
        $bank 				= "Data Tidak Ditemukan";
		$accNo 				= "Data Tidak Ditemukan";
		$accName			= "Data Tidak Ditemukan";
        
    }
   
    /*-------------Legal Entity Info----------------*/
	while($hasil1 = mysqli_fetch_assoc($result2))
	{
		$edu 			= 	ucfirst($hasil1['education_level']);
		$fldJb 			= 	ucfirst($hasil1['field_of_job']);
		$tpUsr			= 	ucfirst($hasil1['type']);
		$nmLeg			= 	ucfirst($hasil1['legal_entity_name']);
		$tpLeg			= 	ucfirst($hasil1['legal_entity_type']);
		$legal			= 	ucfirst($hasil1['legal_entity_id']);
	}
    
    /*-------------Security Info----------------*/
	while($hasil1 = mysqli_fetch_assoc($result3))
	{
		$sec_uid		= 	$hasil1['uid'];
		$pLogn 			= 	$hasil1['phone_number'];
		$pWith 			= 	$hasil1['login_pwd'];
	}
	// Redirect to homepage to display updated user in list
	//header("Location: test.php");
}
else
{ echo "test";}

 

?>
