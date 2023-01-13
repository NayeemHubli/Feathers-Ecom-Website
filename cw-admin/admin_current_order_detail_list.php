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
    <?php $page = "chicken order";  $subpage = "current orders";
    include('nav_left.php'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Details of current orders
            </h1>

        </section>
        <!-- Main content -->
        <section class="content">
            <?php  $sel_tot_order_list = "SELECT cw_customer_details.*, cw_customer_address.*, cw_create_chicken_order.*
                FROM (chickenwala_77.cw_create_chicken_order    cw_create_chicken_order
                INNER JOIN chickenwala_77.cw_customer_address cw_customer_address
                ON (cw_create_chicken_order.cud_oid = cw_customer_address.cud_oid))
                INNER JOIN chickenwala_77.cw_customer_details cw_customer_details
                ON (cw_create_chicken_order.cust_oid = cw_customer_details.cust_oid) 
                WHERE cw_create_chicken_order.ccco_oid = '".$_REQUEST['ord_id']."' AND cw_customer_details.cust_oid = '".$_REQUEST['cust_id']."'";
            $sql_tot_order_exe = mysqli_query($connect,$sel_tot_order_list);
            $row_tot_order = mysqli_fetch_array($sql_tot_order_exe);
            $btn_confirm_delivery_banned = '';
            if($row_tot_order['ccco_order_status'] == 'yet_to_confirm'){
                $confirm = 'Not Confirmed';
                $btn_confirm_delivery_banned = 'disabled';
            }else if($row_tot_order['ccco_order_status'] == 'order_confirm'){
                $confirm = 'Order Confirmed';
                $btn_ord_confirm_banned = 'disabled';
                $btn_confirm_delivery_banned = '';
            }else if($row_tot_order['ccco_order_status'] == 'order_delivered'){
                $confirm = 'Order Delivered';
                $btn_confirm_delivery_banned = 'disabled';
                $btn_ord_confirm_banned = 'disabled';
            }else if($row_tot_order['ccco_order_status'] == 'order_cancel'){
                $confirm = 'Order Cancelled';
                $btn_confirm_delivery_banned = 'disabled';
                $btn_ord_confirm_banned = 'disabled';
            }
            ?>
                <div class="col-lg-8 no-padding">
                    <div class="box box-danger">
                    <div class="box-header with-border">
                    <h3 class="box-title">order with details</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                                <div class="box-body">
                                    <div class="col-lg-6">
                                        <h4 class="text-muted"><i class="fa fa-user"></i> Customer</h4>
                                        <h4 style="margin-top: -5px;" class="text-capitalize"><?= $row_tot_order['cust_fname'] ?> <?= $row_tot_order['cust_lname'] ?></h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="text-muted"><i class="fa fa-phone-square"></i> Mobile</h4>
                                        <h4 style="margin-top: -5px;"><?= $row_tot_order['cust_mobile'] ?></h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="text-muted"><i class="fa fa-reorder"></i> Order No.</h4>
                                        <h4 style="margin-top: -5px;">#2021<?= $row_tot_order['ccco_oid'] ?></h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="text-muted"><i class="fa fa-home"></i> Address Type</h4>
                                        <h4 style="margin-top: -5px;"><?= $row_tot_order['cud_address_type'] ?></h4>
                                    </div>
                                    <div class="col-lg-12">
                                        <h4 class="text-muted"><i class="fa fa-home"></i>Delivery Address</h4>
                                        <h4 style="margin-top: -5px;"><?= $row_tot_order['cud_address'] ?></h4>
                                    </div>
                                
                                    <div class="col-lg-6">
                                        <h4 class="text-muted"><i class="fa fa-th"></i> Item Name</h4>
                                        <h4 style="margin-top: -5px;"><?= ($row_tot_order['chv_variety_name']) ?></h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="text-muted"><i class="fa  fa-dashcube"></i> Item Status</h4>
                                        <h4 style="margin-top: -5px;"><?=  $confirm?></h4>
                                    </div>

                                    <div class="col-lg-12 no-padding ">
                                        <div class="table-responsive">
                                            <table class="table no-margin">
                                                <thead>
                                                <tr>
                                                    <th>Price</th>
                                                    <th>Qty</th>
                                                    <th>Total Amt</th>
                                                    <th>Ord date</th>
                                                    <th>Time</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><i class="fa fa-rupee"></i> <?= $row_tot_order['chv_price'] ?></td>
                                                        <td><?= $row_tot_order['ccco_qty'] ?></td>
                                                        <td><i class="fa fa-rupee"></i> <?= $row_tot_order['ccco_total_amount'] ?></td>
                                                        <td><?= setDate($row_tot_order['ccco_order_date'] )?></td>
                                                        <td><?= showTime($row_tot_order['ccco_order_date']) ?></td>
                                                            
                                                            <!-- <?php if($row_tot_order['ccco_order_date'] == NULL){
                                                                $ord_dvr_date = 'No Confirm Date';
                                                            }else{
                                                                $ord_dvr_date = date("D, d-M-Y ",strtotime($row_tot_order['ccco_order_date']));
                                                            }?>
                                                        <td><?= $ord_dvr_date ?></td> -->
                                                    
                                                    </tr>
                                            
                                                </tbody>
                                            </table>

                                        </div>

                                    </div>
                                </div>
                            </div><!-- /.box -->
                        <div class="clearfix"></div>
                    
                </div>

                <div class="col-lg-4">
                <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">order actions</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                  <ul class="products-list product-list-in-box">
                   
                    <li class="item">
                            <a href="admin_current_order_detail_list_save.php?ord_id=<?= $row_tot_order['ccco_oid'] ?>&status=order_confirm" 
                            class="btn btn-block btn-success btn-flat <?= $btn_ord_confirm_banned ?>">confirm order</a>
                    </li>
                    <li class="item">
                            <a href="admin_current_order_detail_list_save.php?ord_id=<?= $row_tot_order['ccco_oid'] ?>&status=order_delivered"
                            class="btn btn-block btn-warning btn-flat <?= $btn_confirm_delivery_banned ?>">confirm for delivery</a>
                    </li>
                    
                  </ul>
                </div>
               
              </div>
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
