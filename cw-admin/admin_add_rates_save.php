<?php
include('dbcon.php');
$get_action_type = $_REQUEST['action_type'];
$get_chk_variety_id = $_REQUEST['chk_variety_id'];
$get_txt_variety_name = $_REQUEST['txt_variety_name'];

$get_txt_market_price = $_REQUEST['txt_chicken_market_price'];
$get_txt_chicken_extra_price = $_REQUEST['txt_chicken_extra_price'];

$total_price = ($get_txt_market_price + $get_txt_chicken_extra_price);

$get_chicken_status = $_REQUEST['chicken_status'];
$get_chicken_availability = $_REQUEST['chicken_availability'];
$get_chicken_type = $_REQUEST['chicken_type'];
$get_txt_chicken_order = $_REQUEST['txt_chicken_order'];
$get_txt_chicken_desc = $_REQUEST['txt_chicken_desc'];

$tmp_img = $_FILES['image']['tmp_name'];//get data from user & store as temp file
$image_name  = $_FILES['image']['name'];//get actual file of from user with extension
$file_location = "../images/products/".$image_name; //set location
if($get_action_type === '0'){
    move_uploaded_file($tmp_img,$file_location);//move into my project folder i.e "image"

    $sql_insert_chk_variety = "INSERT INTO `cw_chicken_variety`(`chv_oid`,
                                `chv_variety_name`,
                                `chv_market_price`,
                                `chv_extra_price`,
                                `chv_price`,
                                `quatity_type`,
                                `chv_img_loc`,
                                `chv_status`,
                                `chv_availability`,
                                `chv_sort_number`,
                                 `chv_description`,
                                 `chv_price_date`,
                                 `create_date`)
                               VALUES ('',
                               '".$get_txt_variety_name."',
                               '".$get_txt_market_price."',
                                '".$get_txt_chicken_extra_price."',
                               '".$total_price."',
                               '".$get_chicken_type."',
                               '".$image_name."',
                               '".$get_chicken_status."',
                               '".$get_chicken_availability."',
                               '".$get_txt_chicken_order."',
                               '".$get_txt_chicken_desc."',
                               '".$current_date."','".$current_date_time."')";
    mysqli_query($connect,$sql_insert_chk_variety) or die("Error at Chicken variety insert!!! > " . mysql_error());
    header('location:admin_add_rates.php');

}else if($get_action_type === '1'){
    if($image_name ===''){
        $sql_update_chk_variety = "UPDATE `cw_chicken_variety` SET `chv_variety_name`= '".$get_txt_variety_name."',
                                          `chv_market_price`='".$get_txt_market_price."',
                                          `chv_extra_price`='".$get_txt_chicken_extra_price."',
                                          `chv_price`='".$total_price."',
                                          `quatity_type`='".$get_chicken_type."',
                                          `chv_status`='".$get_chicken_status."',
                                          `chv_availability`='".$get_chicken_availability."',
                                          `chv_description`='".$get_txt_chicken_desc."',
                                          `chv_sort_number`='".$get_txt_chicken_order."',`chv_price_date`='".$current_date."'
                                   WHERE `chv_oid`='".$get_chk_variety_id."'";
        mysqli_query($connect,$sql_update_chk_variety)
        or die("Error at Chicken variety Update without Image!!! > " . mysql_error());

    }elseif($image_name != ''){
        move_uploaded_file($tmp_img,$file_location);//move into my project folder i.e "image"
        $sql_update_chk_variety = "UPDATE `cw_chicken_variety` SET `chv_variety_name`= '".$get_txt_variety_name."',
                                          `chv_market_price`='".$get_txt_market_price."',
                                          `chv_extra_price`='".$get_txt_chicken_extra_price."',
                                          `chv_price`='".$total_price."',
                                          `quatity_type`='".$get_chicken_type."',
                                          `chv_img_loc`='".$image_name."',
                                          `chv_status`='".$get_chicken_status."',
                                          `chv_availability`='".$get_chicken_status."',
                                          `chv_description`='".$get_chicken_availability."',
                                          `chv_sort_number`='".$get_txt_chicken_order."',`chv_price_date`='".$current_date."'
                                   WHERE `chv_oid`='".$get_chk_variety_id."'";
        mysqli_query($connect,$sql_update_chk_variety)
        or die("Error at Chicken variety Update with Image!!! > " . mysql_error());
    }
    header('location:admin_add_rates.php');
}else if($get_action_type === '3'){
    $sql_delete_chk_variety = "DELETE FROM `cw_chicken_variety` WHERE `chv_oid`='".$get_chk_variety_id."'";
    mysqli_query($connect,$sql_delete_chk_variety)
    or die("Error at Chicken variety Delete!!! > " . mysql_error());
}



?>