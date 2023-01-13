<?php

 $hit_date_today = date("Y-m-d", strtotime($current_date));
 $q = "INSERT INTO cw_hit_app (hit_oid,hit_date) VALUES('','".$hit_date_today."')";
 mysqli_query($connect,$q);
?>