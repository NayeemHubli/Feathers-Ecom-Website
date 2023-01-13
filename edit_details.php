<!DOCTYPE html>
<html>
<head>
    <?php include('cw-admin/dbcon.php');?>
    <meta charset="UTF-8">
    <title>Feather</title>

<!--tab icon-->
<link rel="shortcut icon" type="../images/icon2.png" href="../images/icon2.png" />
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.4 -->
<link href="https://shahbaazchaviwale.github.io/js-css-library/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Font Awesome Icons -->
<link href="https://shahbaazchaviwale.github.io/js-css-library/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Ionicons -->
<link href="https://shahbaazchaviwale.github.io/js-css-library/css/ionicons.min.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="https://shahbaazchaviwale.github.io/js-css-library/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
<link href="https://shahbaazchaviwale.github.io/js-css-library/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

<link href="https://shahbaazchaviwale.github.io/js-css-library/css/style.css" rel="stylesheet" type="text/css" />
<!--Date picker-->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="../js/html5shiv.min.js"></script>
<script src="../js/respond.min.js"></script>
<![endif]-->

<?php   
    require_once 'cw-admin/dbcon.php';
    if(!isset($_SESSION['cust_id'])){
        header("location: login.php?msg=product");
    }
    ?>
</head>
<body class="login-page">
<div class="login-box">
    <div class="login-box-body">
         <p class="login-box-msg"><i class="fa fa-edit"></i> 
         <?php if(($_REQUEST['msg']) == 'edit_1'){?>
            <b>Edit Your Details</b> 
         <?php }else if(($_REQUEST['msg']) == 'edit_2'){ ?>
            <b>Add your new address</b> 
         <?php }else if(($_REQUEST['msg']) == 'edit_3'){ ?>
            <b>Edit your address</b> 
        <?php } ?>
        </p>
        <?php if(($_REQUEST['msg']) == 'edit_1'){
            $check_entry = " SELECT `cust_fname`, `cust_lname`, `cust_mobile`, `cust_email` 
                            FROM `cw_customer_details` 
                            WHERE `cust_oid`= '".$_SESSION['cust_id']."'  " ;

	$check_entry_exe = mysqli_query($connect,$check_entry) or die('Error at customer details'.mysql_error());
	$check_entry_row = mysqli_fetch_array($check_entry_exe);
    ?>
        <form action="edit_details_save.php" method="post">
            <input type="hidden" name="action_type" value="edit_1">
            <input type="hidden" name="cust_id" value="<?= $_SESSION['cust_id']?>">

            <div class="form-group has-feedback">
                <input type="text" name="cust_fname" class="form-control" placeholder="Enter your first name" required="" 
                oninvalid="this.setCustomValidity('Please enter your first name')"
                oninput="this.setCustomValidity('')"
                value="<?= $check_entry_row['cust_fname']?>"/>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" name="cust_lname" class="form-control" placeholder="Enter your last name" required=""
                oninvalid="this.setCustomValidity('Please enter your last name')"
                oninput="this.setCustomValidity('')"
                value="<?= $check_entry_row['cust_lname']?>"/>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="email" name="cust_email" class="form-control" placeholder="Enter your email ID" required="" 
                oninvalid="this.setCustomValidity('Please enter your email ID')"
                oninput="this.setCustomValidity('')"
                value="<?= $check_entry_row['cust_email']?>"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            
            <div class="form-group has-feedback">
                <input type="number" name="cust_mobile" class="form-control" placeholder="Enter your mobile" required=""
                oninvalid="this.setCustomValidity('Please enter your mobile here')"
                oninput="this.setCustomValidity('')"
                value="<?= $check_entry_row['cust_mobile']?>"/>
                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
            </div>
            
            <div class="row">
                <div class="col-xs-8"></div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Submit <i class="fa fa-plus-square-o"></i></button>

                </div>
            </div>
        </form>
        <?php }if(($_REQUEST['msg']) == 'edit_2' || ($_REQUEST['msg']) == 'edit_3'){  ?>
            <form action="edit_details_save.php" method="post">
            <input type="hidden" name="action_type" value="<?= $_REQUEST['msg']?>">
            <input type="hidden" name="cust_id" value="<?= $_SESSION['cust_id']?>">

            <?php 
            $get_address_type ="SELECT COUNT(cud_oid) as tot_address, `cud_address_type`, `cud_address` FROM `cw_customer_address` WHERE `cud_oid` = '".$_REQUEST['cud_adress']."' AND `cust_oid` = '".$_SESSION['cust_id']."'";
            $get_address_type_exe = mysqli_query($connect,$get_address_type) or die('Error at customer details'.mysql_error());
	        $get_address_type_row = mysqli_fetch_array($get_address_type_exe);

            $get_address_type_data = $get_address_type_row['tot_address'] > 0 ?  $get_address_type_row['cud_address_type'] :  ''; 
            $get_cud_address_data = $get_address_type_row['tot_address'] > 0 ?  $get_address_type_row['cud_address'] :  ''; 
            $check_address_data = $_REQUEST['cud_adress'] > 0 ?  $_REQUEST['cud_adress'] :  0; ?>

            <input type="hidden" name="cust_address_id" value="<?= $check_address_data ?>">
            <div class="form-group has-feedback">
               <label>Enter Address Type: Home/Work</label>
                <input type="text" name="cust_address_type" class="form-control" placeholder="Enter Address Type" required="" 
                oninvalid="this.setCustomValidity('Please enter your first name')"
                oninput="this.setCustomValidity('')"
                value="<?= $get_address_type_data ?>"/>
                <span class="glyphicon glyphicon-home form-control-feedback"></span>
            </div>
            <div class="form-group">
                      <label>Enter Your Address here</label>
                      <textarea name="cust_address" class="form-control" rows="3" placeholder="Enter ..."><?= $get_cud_address_data?></textarea>
            </div>
            <div class="row">
                <div class="col-xs-8"></div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Submit <i class="fa fa-plus-square-o"></i></button>
                </div>
            </div>
        </form>
        <?php } ?>
    </div>
</div>
<!-- jQuery 2.1.4 -->
<script src="https://shahbaazchaviwale.github.io/js-css-library/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="https://shahbaazchaviwale.github.io/js-css-library/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>
