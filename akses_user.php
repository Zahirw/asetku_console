<?php
session_start(); 
if(!isset($_SESSION['username'])){
	echo '<script language="javascript">alert("anda belum login!"); document.location="login.html";</script>';

}
if($_SESSION['type']=="2"){
	echo '<script language="javascript">alert("Hak akses Terbatas"); document.location="index.php";</script>';
	
}

?>