<?php
session_start(); 
if(!isset($_SESSION['username'])){
	echo '<script language="javascript">alert("anda belum login!"); document.location="login.html";</script>';
}
?>