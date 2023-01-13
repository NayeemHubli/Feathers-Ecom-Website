<?php
session_start();
unset($_SESSION['cust_id']);
session_start();
unset($_SESSION['cust_name']);

session_destroy();
header('location:index.php');
exit;
?>