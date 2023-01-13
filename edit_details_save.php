<?php 
include('cw-admin/dbcon.php');
$get_action_type = trim($_REQUEST['action_type']);
$get_cust_id = trim($_REQUEST['cust_id']);

$get_cust_address_type = trim($_REQUEST['cust_address_type']);
$get_cust_address = trim($_REQUEST['cust_address']);
// update existing customer details
if($get_action_type == 'edit_1'){
    $get_cust_fname = trim($_REQUEST['cust_fname']);
    $get_cust_lname = trim($_REQUEST['cust_lname']);
    $get_cust_email = trim($_REQUEST['cust_email']);
   $get_cust_mobile = trim($_REQUEST['cust_mobile']);

    echo $update_entry = "UPDATE `cw_customer_details` SET 
    `cust_fname`= '".$get_cust_fname."',
    `cust_lname`= '".$get_cust_lname."',
    `cust_mobile`= '".$get_cust_mobile."',
    `cust_email`= '".$get_cust_email."' 
    WHERE `cust_oid` = '".$get_cust_id."'";

mysqli_query($connect,$update_entry) or die('Error at customer details'.mysql_error());

// insert existing customer address as new 
}else if($get_action_type == 'edit_2'){
    

    $add_address_type = "INSERT INTO `cw_customer_address`(`cud_oid`, `cust_oid`, `cud_address_type`, `cud_address`) 
                        VALUES ('','".$get_cust_id."','".$get_cust_address_type."','".$get_cust_address."')";
    mysqli_query($connect,$add_address_type) or die('Error at customer address'.mysql_error());

// update existing customer addresss
}else if($get_action_type == 'edit_3'){

    $get_cust_address_id = $_REQUEST['cust_address_id'];
    $add_address_type = "UPDATE `cw_customer_address` 
                              SET `cud_address_type` = '".$get_cust_address_type."', `cud_address` = '".$get_cust_address."' 
                              WHERE `cud_oid` = '".$get_cust_address_id."' AND `cust_oid` = '".$get_cust_id."' ";                  
    mysqli_query($connect,$add_address_type) or die('Error at customer address'.mysql_error());
}
header('Location: profile.php');


?>