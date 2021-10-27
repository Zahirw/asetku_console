<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['type']);
unset($_SESSION['status']);
header("Location: login.html");
?>