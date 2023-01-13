<?php

include('dbcon.php');

echo "*_Today's Price List of Chicken Varieties_* <br> <br>" ;


$sql = "SELECT * FROM `cw_chicken_variety` ORDER BY `chv_sort_number` ASC   ";
$exe = mysqli_query($connect,$sql);
if(mysqli_num_rows($exe) > 0 ) {
    $i = 1;
    while($row = mysqli_fetch_array($exe)){


       echo $i.") " ."*".ucwords($row['chv_variety_name'])."*" ." : " ."*".$row['chv_price']."*" ." " .$row['quatity_type'] ."<br>";


        $i++;
    }

}



?>

