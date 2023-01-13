<?php

include('../cw-admin/dbcon.php');

class get_all_products{
    public $chk_id;
    public $chk_variety_name;
    public $chk_price;
    public $chk_quantity_type;
    public $chk_image_location;
    public $chk_active_status;
    public $chk_availability;
    public $chk_descrition;
    public $chk_sort_number;

}
$products_list=array();
//$products_list["get_all_product_list"]=array();


 $sql = "SELECT * FROM `cw_chicken_variety` ORDER BY `chv_sort_number` ASC   ";
$exe = mysqli_query($connect,$sql);
if(mysqli_num_rows($exe) > 0 ) {
    $i = 1;
    while($row = mysqli_fetch_array($exe)){
        $obj_get_all_products = new get_all_products();
            $obj_get_all_products->chk_id = $row['chv_oid'];
            $obj_get_all_products->chk_variety_name = $row['chv_variety_name'];
            $obj_get_all_products->chk_price = $row['chv_price'];
            $obj_get_all_products->chk_quantity_type = $row['quatity_type'];
            $obj_get_all_products->chk_image_location = $row['chv_img_loc'];
            $obj_get_all_products->chk_active_status = $row['chv_status'];
            $obj_get_all_products->chk_availability = $row['chv_availability'];
            $obj_get_all_products->chk_descrition = $row['chv_description'];
            $obj_get_all_products->chk_sort_number = $row['chv_sort_number'];

         array_push($products_list, $obj_get_all_products);
    }
    echo json_encode(array('show_all_product_list' => $products_list));
}



?>

