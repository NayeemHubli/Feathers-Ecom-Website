<?php
/*PHP SQL execute codes*/

$hostname = "localhost";
$database = "chickenwala_77";
$username = "root";
$password = "";

$connect = mysqli_connect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
mysqli_select_db($connect,$database);

error_reporting( error_reporting() & ~E_NOTICE );
error_reporting(E_ERROR | E_PARSE);
session_start();

$tabindex = 1;
$page = "";
$subpage = "";
$subsubpage = "";
?>