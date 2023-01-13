<?php

     $q = "SELECT COUNT(hit_oid) AS total_hits FROM `cw_hit_app` ";
    $rec = mysqli_query($connect,$q);
    if(mysqli_num_rows($rec) > 0)
    {
        $row_hits = mysqli_fetch_assoc($rec);
        $tot_hits = ($row_hits['total_hits']);
         $tot_hits ;
    }


?>

