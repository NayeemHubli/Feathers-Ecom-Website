<?php
include('../cw-admin/dbcon.php');

$get_send_variety_id = trim($_REQUEST['send_variety_id']);

$sql_variety = "SELECT * FROM `cw_chicken_variety` WHERE `chv_oid` = '".$get_send_variety_id."' ";
                      $sql_variety_exe = mysqli_query($connect,$sql_variety);
                 if(mysqli_num_rows($sql_variety_exe) > 0) {
                     $row_variety = mysqli_fetch_array($sql_variety_exe);
                     echo $row_variety['chv_oid'].'----'.$row_variety['chv_variety_name'].'----'.$row_variety['chv_price'].'----'.$row_variety['chv_img_loc'];
                 }else{
                     echo 'no_variety';
                 }

?>