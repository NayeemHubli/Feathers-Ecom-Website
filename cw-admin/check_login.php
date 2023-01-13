<?php       /* + Created by PhpStorm. + User: Shahbaaz + Date: 31-01-2016 + Time: 12:08 */

include('dbcon.php');

if(isset($_REQUEST['user_mail'])){

    $admin_email = $_REQUEST['user_mail'];
    $admin_contact_number = $_REQUEST['contact_number'];


     $sql_select = "SELECT * FROM `cw_login` WHERE `log_contact` = '".$admin_contact_number."' AND `log_username` = '".$admin_email."' ";

    //echo $sql_select;
    $select_exe = mysqli_query($connect,$sql_select)or die("Cannot execute select log admin!!! > " . mysql_error());

    //echo $select_exe;
    if(mysqli_num_rows($select_exe) > 0){
        /*this below code will be used to fetched only column when it get executed*/
        $row = mysqli_fetch_array($select_exe);
        session_start();
        $_SESSION['log_id'] = $row['log_oid'];
        $_SESSION['log_name'] = $row['log_name'];
        $_SESSION['log_role'] = $row['log_role'];
        $_SESSION['log_user_name'] = $row['log_user_name'];

        $sql_update = "UPDATE `cw_login`  SET  `log_date` = now()  WHERE log_oid   = '".$row['log_oid']."'  ";
        $update_exe = mysqli_query($connect,$sql_update)or die("Cannot update log admin!!! > " . mysql_error());



        

        if($row['log_role'] === 'su-admin'){
            header("location:dashboard.php");
        }else if($row['log_role'] === 'employee'){
            header("location:add_order.php");
        }
    }
    else{
        header("location: index.php?msg=error");
    }


}
?>