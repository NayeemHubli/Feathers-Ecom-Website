<?php
include'conn.php';
$timezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();
$date->setTimezone($timezone);
$current_date = $date->format( 'Y-m-d H:i:s A' );
$current_date_dmy = $date->format('d-m-Y');

/*App name*/
function titleName(){
    echo 'Feather';
}
/*Send mail*/

function activeMenu($page, $input_page)
{
    if($page==$input_page)
        return 'active';
    else
        return '';
}
function setDate($get_date){
    return date("d-M-y", strtotime($get_date));
}function saveDateDB($get_date){
    return date("Y-m-d", strtotime($get_date));
}function showTime($get_data){
    return date('H:i:s A',strtotime($get_data));
}function showDate($get_data){
    return date("d-m-y", strtotime($get_date));
}


/*Session start*/
session_start();
?>