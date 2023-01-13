<!DOCTYPE html>
<html>
<?php include('dbcon.php'); ?>
<head>
    <meta charset="UTF-8">
    <title><?php titleName()?> | Dashboard</title>
    <?php include('CWCssLib.php');?>
</head>
<body class="skin-red sidebar-mini fixed">
<div class="wrapper">
    <!--top menu-->
    <?php include('nav_top.php'); ?>
    <!--Left menu-->
    <?php $page = "customer_list";$subpage = "";
    include('nav_left.php'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Customer Details
            </h1>
        </section>
        <section class="content">
            <div class="col-lg-8 no-padding">
                <div class="box box-danger">
                    <div class="box-body" style="overflow: auto;">
                        <?php $sql_cust_details = "SELECT * FROM `cw_customer_details` ORDER BY `cust_oid` DESC";
                        $sql_cust_details_exe = mysqli_query($connect,$sql_cust_details) or die('Error at customer details'.mysql_error());?>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1 ;while($row_cust_details = mysqli_fetch_array($sql_cust_details_exe)){ ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $row_cust_details['cust_fname']; ?> <?= $row_cust_details['cust_lname'];?></td>
                                    <td ><a class="text-black" href="tel:<?= $row_cust_details['cust_mobile']?>"><?= $row_cust_details['cust_mobile']?></a></td>
                                    <td><?= $row_cust_details['cust_email']?></td>
                                    <td><?= setDate($row_cust_details['create_date']) ?></td>
                                    <td>
                                        <a class="btn btn-success btn-flat" href="admin_customer_list.php?address=<?=$row_cust_details['cust_oid'] ?>" >Address <i class="fa fa-arrow-right"></i></a>
                                    </td>
                                </tr>
                            <?php $i++; } ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <?php 
                if(isset($_REQUEST['address'])){ ?>
                    <div class="col-lg-4 no-padding">
                        <div class="box box-info">
                        
                            <div class="box-body" style="overflow: auto;">  
                            <?php $sql_cust_address = "SELECT * FROM `cw_customer_address` WHERE `cust_oid` = '".$_REQUEST['address']."'";
                                  $sql_cust_address_exe = mysqli_query($connect,$sql_cust_address) or die('Error at customer details'.mysql_error());?>
                                  <ul class="products-list product-list-in-box">                                                                    
                                    <?php $i = 1 ;while($row_cust_address = mysqli_fetch_array($sql_cust_address_exe)){ ?>
                                        <li class="item">                                    
                                            <div class="product-info" style="margin:0px;">
                                                <span class="label label-success pull-right"><?= $row_cust_address['cud_address_type']?></span></a>
                                                <span class="product-description" style="white-space: pre-line;">
                                                    <?= $row_cust_address['cud_address']?>
                                                </span>
                                            </div>
                                        </li>
                                    <?php $i++; } ?>
                                </ul>
                            </div>
                        </div>
                    </div>   
                <?php } ?>  
                                 
            <div class="clearfix"></div>
        </section>
    </div>
    <!--Footer -->
    <?php include('footer.php'); ?>
    <!-- right menu -->
    <?php include('nav_right.php'); ?>
    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<?php include('CWJsLib.php');?>
</body>
</html>
