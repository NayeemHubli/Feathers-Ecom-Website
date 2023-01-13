<?php
include('dbcon.php');
if($_REQUEST['msg'] == 'tot_month_sales'){
    $data = array();
    $tot_hits_exe = mysqli_query($connect, 'SELECT MONTH(`ccco_order_date`) month, COUNT(*) total FROM cw_create_chicken_order WHERE YEAR(`ccco_order_date`) = 2021 GROUP BY month');
    $i = 1 ;while($row_tot_order = mysqli_fetch_array($tot_hits_exe)){
        array_push($data, ['month' => $row_tot_order['month'], 'total' => $row_tot_order['total']]);
        $i++;
    }
    print json_encode($data);
}

?>