<?php


class get_all_chicken_varieties
{
    public $chk_id;
    public $chk_variety_name;
    public $chk_price;
    public $chk_quantity_type;
    public $chk_image_location;
    public $chk_active_status;
    public $chk_sort_number;
}
$chicken_list_arr = array();
$chicken_list_arr["chicken_list_arr"]=array();


$sql = "SELECT * FROM `cw_chicken_variety` WHERE `chv_status` = 'active' ORDER BY `chv_sort_number` ASC   ";
$exe = mysqli_query($connect,$sql);
if(mysqli_num_rows($exe) > 0 ) {
    $i = 1;
    while($row = mysqli_fetch_array($exe)){

        $obj_get_all_chicken_varieties = new get_all_chicken_varieties();

        $obj_get_all_chicken_varieties->chk_id = $row['chv_oid'];
        $obj_get_all_chicken_varieties->chk_variety_name = $row['chv_variety_name'];
        $obj_get_all_chicken_varieties->chk_price = $row['chv_price'];
        $obj_get_all_chicken_varieties->chk_quantity_type = $row['quatity_type'];
        $obj_get_all_chicken_varieties->chk_image_location = $row['chv_img_loc'];
        $obj_get_all_chicken_varieties->chk_active_status = $row['chv_status'];
        $obj_get_all_chicken_varieties->chk_sort_number = $row['chv_sort_number'];

        array_push($chicken_list_arr["chicken_list_arr"], $obj_get_all_chicken_varieties);
    }
}


?>

