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
    <?php $page = "chicken order"; $subpage = "current orders";
    include('nav_left.php'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Current Orders
            </h1>

        </section>
        <!-- Main content -->
        <section class="content">
            <div class="col-lg-12 no-padding">
                <div class="box box-danger">
                    <div class="box-body" style="overflow: auto;">
                        <?php  $sql_tot_order = "SELECT cw_create_chicken_order_1.ccco_oid,
                                                        cw_customer_details_1.cust_oid,
                                                        cw_chicken_variety_1.chv_oid,
                                                        cw_customer_address_1.cud_oid,
                                                        cw_customer_details_1.cust_fname,
                                                        cw_customer_details_1.cust_mobile,
                                                        cw_create_chicken_order_1.chv_price,
                                                        cw_create_chicken_order_1.ccco_qty,
                                                        cw_create_chicken_order_1.ccco_total_amount,
                                                        cw_customer_address_1.cud_address_type,
                                                        cw_create_chicken_order_1.ccco_order_status,
                                                        cw_create_chicken_order_1.ccco_order_date
                                                FROM ((chickenwala_77.cw_create_chicken_order    cw_create_chicken_order_1
                                                INNER JOIN chickenwala_77.cw_chicken_variety cw_chicken_variety_1
                ON (cw_create_chicken_order_1.chv_oid = cw_chicken_variety_1.chv_oid))
      INNER JOIN chickenwala_77.cw_customer_details cw_customer_details_1
         ON (cw_customer_details_1.cust_oid = cw_create_chicken_order_1.cust_oid))
     INNER JOIN chickenwala_77.cw_customer_address cw_customer_address_1
        ON (cw_create_chicken_order_1.cud_oid = cw_customer_address_1.cud_oid) 
        ORDER BY cw_create_chicken_order_1.ccco_oid DESC";
                        $sql_tot_order_exe = mysqli_query($connect,$sql_tot_order) or die('Error at VARIETY'.mysql_error());?>
                        
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>OrdNo.</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1 ;while($row_tot_order = mysqli_fetch_array($sql_tot_order_exe)){ 
                                if($row_tot_order['ccco_order_status'] == 'yet_to_confirm'){
                                    $confirm = '<span class="label label-info">Not Confirmed</span>';
                                }else if($row_tot_order['ccco_order_status'] == 'order_confirm'){
                                    $confirm = '<span class="label label-warning">Order Confirmed</span>';
                                }else if($row_tot_order['ccco_order_status'] == 'order_delivered'){
                                    $confirm = '<span class="label label-success">Order Delivered</span>';
                                }else if($row_tot_order['ccco_order_status'] == 'order_cancel'){
                                    $confirm = '<span class="label label-danger">Order Cancelled</span>';
                                }
                                ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td>#2021<?= $row_tot_order['ccco_oid']?></td>
                                    <td><?= $row_tot_order['cust_fname']?></td>
                                    <td ><a class="text-black" href="tel:<?= $row_tot_order['cust_mobile']?>"><?= $row_tot_order['cust_mobile']?></a></td>
                                    <td><?= $row_tot_order['cud_address_type']?></td>
                                    <td><i class="fa fa-rupee"></i><?= $row_tot_order['chv_price']?></td>
                                    <td> <?= $row_tot_order['ccco_qty']?></td>
                                    
                                    <td><i class="fa fa-rupee"></i><?= $row_tot_order['ccco_total_amount']?></td>
                                    <td><?= setDate($row_tot_order['ccco_order_date']) ?></td>
                                    <td><?= showTime($row_tot_order['ccco_order_date'])?></td>
                                    <td> <?= $confirm ?></td>
                                   
                                    <td>
                                        <a class="btn btn-warning btn-flat" href="admin_current_order_detail_list.php?ord_id=<?=$row_tot_order['ccco_oid'] ?>&cust_id=<?= $row_tot_order['cust_oid']?>" >Check <i class="fa fa-arrow-right"></i></a>
                                    </td>

                                </tr>
                            <?php $i++; } ?>

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Order No.</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
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
