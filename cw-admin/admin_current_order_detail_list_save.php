<?php
include('dbcon.php');
$get_ord_id = trim($_REQUEST['ord_id']);
$get_status = trim($_REQUEST['status']);

$update_order_status = "UPDATE `cw_create_chicken_order` SET `ccco_order_status`= '".$get_status."' , ccco_order_delivery_date = '".$current_date."' WHERE `ccco_oid` = '".$get_ord_id."'";
mysqli_query($connect,$update_order_status);
header('location:admin_current_order_list.php');


?>