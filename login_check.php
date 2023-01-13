<?php

include('cw-admin/dbcon.php');
$u_email = $_REQUEST['user_email'];
$u_password = $_REQUEST['user_password'];



    $check_entry = " SELECT `cust_oid`,  COUNT(`cust_mobile`) as as_count, `cust_email`, `cust_password` 
                     FROM `cw_customer_details` 
                     WHERE `cust_email` = '".$u_email."'  AND `cust_password` = '".$u_password."' " ;
    $check_entry_exe = mysqli_query($connect,$check_entry) or die('Error at customer details'.mysql_error());
    $check_entry_row = mysqli_fetch_array($check_entry_exe);

    if($check_entry_row['cust_oid'] == NULL & $check_entry_row['as_count'] == 0){
        header('Location: login.php?msg=error');
    }else{
        $sql_select = "SELECT `cust_oid`, `cust_fname`, `cust_email`, `cust_password`, `cust_mobile`
        FROM `cw_customer_details` WHERE `cust_email` = '".$u_email."' AND `cust_password` = '".$u_password."'";

        $select_exe = mysqli_query($connect,$sql_select)or die("Cannot execute login!!! > " . mysql_error());

        if(mysqli_num_rows($select_exe) > 0){
            $row = mysqli_fetch_array($select_exe);
            session_start();
            $_SESSION['cust_id'] = $row['cust_oid'];
            $_SESSION['cust_name'] = $row['cust_fname'];   
            $_SESSION['cust_mobile'] = $row['cust_mobile'];   
            header("location: product.php");
        }
    }
?>