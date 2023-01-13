<?php
include('../cw-admin/dbcon.php');

$get_fname = trim($_REQUEST['set_fname']);
$get_mobile = trim($_REQUEST['set_mobile']);
$get_qty = trim($_REQUEST['set_qty']);
$get_chk_id = trim($_REQUEST['set_chk_id']);
$get_chk_name = trim($_REQUEST['set_chk_name']);
$get_chk_price = trim($_REQUEST['set_chk_price']);
$get_total_amt = trim($_REQUEST['set_total_amt']);

$get_address_type = trim($_REQUEST['set_address_type']);
$get_cust_id = trim($_REQUEST['set_cust_id']);

$get_action_type = trim($_REQUEST['action_type']);

$get_chk_bought_id = trim($_REQUEST['set_chk_bought_id']);

if($get_action_type === 'save'){
    if($get_qty === '0' || $get_qty < -1 || $get_fname === ' ' || $get_mobile === ' ' || $get_mobile === '987456123'){
        echo'<i class="icon fa fa-close"></i> Oops !! <br>
                 <table style="margin: auto; font-size: 18px;">
                <tr>
                    <th>Please Add Text Properly !!</th>
                </tr>';
    }else{
        if($get_fname != '' && $get_mobile != '' && $get_qty != ''){
            
             $sql_insert_order = "INSERT INTO `cw_create_chicken_order`
                                    (`ccco_oid`, `cust_oid`, `chv_oid`, 
                                     `chv_variety_name`, `chv_price`, 
                                     `ccco_qty`, `ccco_total_amount`, 
                                     `cud_oid`, 
                                     `ccco_order_status`, 
                                     `ccco_order_date`) 
                                VALUES ('',
                                        '".$get_cust_id."',
                                        '".$get_chk_id."',
                                        '".$get_chk_name."',
                                        '".$get_chk_price."',
                                        '".$get_qty."',
                                        '".$get_total_amt."',
                                        '".$get_address_type."',
                                        'yet_to_confirm',
                                        '".$current_date."')";

            // $sql_insert_order = "INSERT INTO `cw_temp_order`(`ch_tmp_oid`, `first_name`, `mobile_number`, `chv_oid`, `ch_variety_name`,
            //                 `ch_price`,`ch_qty`, `total_price`, `ch_price_date`, `ch_status`, `create_date`)
            //     VALUES ('','".$get_fname."','".$get_mobile."','".$get_chk_id."','".$get_chk_name."','".$get_chk_price."','".$get_qty."',
            //             '".$get_total_amt."','".saveDateDB($current_date)."','0','".$current_date."') ";
            mysqli_query($connect,$sql_insert_order);

            echo '<i class="icon fa fa-check"></i> You have bought <br>
                 <table style="margin: auto; font-size: 18px;">
                <tr>
                    <th>Variety Name</th>
                    <th> &nbsp;:&nbsp; </th>
                    <th>'.$get_chk_name.'</th>
                </tr>
                <tr>
                    <th>Price</th>
                    <th> &nbsp;:&nbsp; </th>
                    <th>'.$get_chk_price.'</th>
                </tr>
                <tr>
                    <th>Quantity</th>
                    <th> &nbsp;:&nbsp; </th>
                    <th>'.$get_qty.'</th>
                </tr>
                <tr>
                    <th>Total</th>
                    <th> &nbsp;:&nbsp; </th>
                    <th>'.$get_total_amt.'</th>
                </tr>
                <tr>
                    <th>&nbsp;&nbsp; </th>
                    <th> &nbsp;&nbsp; </th>
                    <th>&nbsp;&nbsp; </th>
                </tr>
            </table>
            <br> Thank you for buying chicken on feather.com!!  Your Order will be confirmed within 15 minutes
            <br/> <span style="color:red; font-size: 12px;">Note: You may can cancel the order within 10 minutes before confirmation</span>';

            
        }
    }
}else if($get_action_type === 'update'){

    $sql_update_order = "UPDATE `cw_temp_order` SET `ch_qty`= '".$get_qty."',`total_price`='".$get_chk_price."',`total_price` = '".$get_total_amt."' ,
                                `create_date`='".($current_date)."' WHERE `ch_tmp_oid`='".$get_chk_bought_id."' ";
    mysqli_query($connect,$sql_update_order);

} else if($get_action_type === 'delete'){

    $sql_delete_order = "DELETE FROM `cw_temp_order` WHERE `ch_tmp_oid`='".$get_chk_bought_id."' ";
    mysqli_query($connect,$sql_delete_order);

}


?>