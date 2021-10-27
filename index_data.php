<?php 

include 'koneksi.php';

/*----- Query Total User ------r*/
$result1 = mysqli_query($koneksi, "select count(*) as j_user from t_user where role=2 ;");

/*----- Query Total Login User ------r*/
$result2 = mysqli_query($koneksi, "select count(distinct uid) as l_user from t_login_device_log;");

/*----- Query Total Verified User ------r*/
$result3 = mysqli_query($koneksi, "select count(distinct uid) as v_user from t_user where `status` = 2 and role= 2;");

/*----- Query Total Withdraw User ------r*/
$result4 = mysqli_query($koneksi, "select count(distinct uid) as w_user from t_withdraw;");

/*----- Query Total Withdraw Amount ------r*/
$result5 = mysqli_query($koneksi, "select sum(withdraw_amount) as w_amount from t_withdraw;");

/*----- Query Total Virtual Account Amount ------r*/
$result6 = mysqli_query($koneksi, "select ifnull(sum(amount),0) va_amount from t_purchase_order o, t_order_pay_info p, t_user u where o.id = p.id and p.virtual_account is not null and u.uid = o.uid");

/*----- Query Total Virtual Account Count ------r*/
$result7 = mysqli_query($koneksi, "select count(1) va_account from t_purchase_order o, t_order_pay_info p, t_user u where o.id = p.id and p.virtual_account is not null and u.uid = o.uid
;");

/*----- Query Total Invest User ------r*/
$result8 = mysqli_query($koneksi, "select count(distinct o.uid ) as i_user from t_purchase_order o, t_user u  where o.uid = u.uid and o.status not in(1,64,128);");

/*----- Query Total Invest Amount ------*/
$result9 = mysqli_query($koneksi, "select ifnull(sum(principal),0) i_amount from t_purchase_order o, t_user u  where o.uid = u.uid and o.`status` not in(1,64,128);");

while($hasil = mysqli_fetch_assoc($result1))
	{
		$j_user 		= 	$hasil['j_user'];
	}

while($hasil = mysqli_fetch_assoc($result2))
	{
		$l_user 		= 	$hasil['l_user'];
	}

while($hasil = mysqli_fetch_assoc($result3))
	{
		$v_user 		= 	$hasil['v_user'];
	}

while($hasil = mysqli_fetch_assoc($result4))
	{
		$w_user 		= 	$hasil['w_user'];
	}

while($hasil = mysqli_fetch_assoc($result5))
	{
		$w_amount 		= 	$hasil['w_amount'];
	}

while($hasil = mysqli_fetch_assoc($result6))
	{
		$va_amount 		= 	$hasil['va_amount'];
	}

while($hasil = mysqli_fetch_assoc($result7))
	{
		$va_account 		= 	$hasil['va_account'];
	}

while($hasil = mysqli_fetch_assoc($result8))
	{
		$i_user 		= 	$hasil['i_user'];
	}

while($hasil = mysqli_fetch_assoc($result9))
	{
		$i_amount 		= 	$hasil['i_amount'];
	}
?>