<?php
include('dbcon.php');
    $data = array();
    $tot_hits_exe = mysqli_query($connect, 'SELECT DISTINCT `chv_variety_name` AS PROD_NAME, SUM(`ccco_total_amount`) AS PROD_AMOUNT FROM cw_create_chicken_order GROUP BY `chv_variety_name`');
    $i = 1 ;while($row_tot_order = mysqli_fetch_array($tot_hits_exe)){
        array_push($data, ['PROD_NAME' => $row_tot_order['PROD_NAME'], 'PROD_AMOUNT' => $row_tot_order['PROD_AMOUNT']]);
        $i++;
    }
    print json_encode($data);
?>