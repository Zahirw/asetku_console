<?php
// include database connection file
$mysqli = mysqli_connect("localhost", "root", "", "asetku") or die (mysqli_error());
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "UPDATE tbl_lender SET ldr_active='0' WHERE ldr_UID = $_GET[id]");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:tables_dynamic.php");
?> 
