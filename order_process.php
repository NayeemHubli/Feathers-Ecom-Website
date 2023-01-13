<?php 
include('cw-admin/dbcon.php');
$get_msg = trim($_REQUEST['msg']);
$get_ord_id= trim($_REQUEST['ord_id']);
if($get_msg == 'cancel'){
    echo $update_entry = "UPDATE `cw_create_chicken_order` SET `ccco_order_status` = 'order_cancel',  ccco_order_delivery_date = '".$current_date."'  WHERE `ccco_oid` = '".$get_ord_id."' ";
    mysqli_query($connect,$update_entry) or die('Error at customer details'.mysql_error());
    header('location:profile.php');
}?>