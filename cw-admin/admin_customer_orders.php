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
    <?php $page = "customer_orders"; $subpage = "";
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
                        <?php  $sql_cust_order = "SELECT * FROM `cw_customer_details` ORDER BY `cust_oid` DESC";
                        $sql_cust_order_exe = mysqli_query($connect,$sql_cust_order) or die('Error at customer details'.mysql_error());?>
                        
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Orders</th>
                                <th>Quantity</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1 ;while($row_cust_order = mysqli_fetch_array($sql_cust_order_exe)){ ?>
                                <?php   $sql_cust_tot_order = "SELECT 
                                            COUNT(`cust_oid`) As total_orders,
                                            SUM(`ccco_total_amount`) As total_amount,
                                            SUM(`ccco_qty`) As total_qty
                                             FROM `cw_create_chicken_order` WHERE `cust_oid` = '".$row_cust_order['cust_oid']."';";
                                           $sql_cust_tot_order_exe = mysqli_query($connect,$sql_cust_tot_order) or die('Error at customer orders'.mysql_error());
                                           $row_cust_tot_order = mysqli_fetch_array($sql_cust_tot_order_exe);
                                           $ord = $row_cust_tot_order['total_orders'] == 0 ? '0.00' :  $row_cust_tot_order['total_orders'];
                                           $qty = $row_cust_tot_order['total_qty'] == NULL ? '0.00' :  $row_cust_tot_order['total_qty'];
                                           $amt = $row_cust_tot_order['total_amount'] == NULL ? '0.00' :  $row_cust_tot_order['total_amount'];?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $row_cust_order['cust_fname']?> <?= $row_cust_order['cust_lname']?></td>
                                    <td ><a class="text-black" href="tel:<?= $row_cust_order['cust_mobile']?>"><?= $row_cust_order['cust_mobile']?></a></td>
                                    <td><?= $ord ?></td>                                 
                                    <td><?= $qty ?></td>                                 
                                    <td><?=  $amt?></td>                                 
                                    <td>
                                        <a class="btn btn-danger btn-flat" href="admin_customer_orders_details.php?cust_id=<?=$row_cust_order['cust_oid'] ?>" >Get Details <i class="fa fa-arrow-right"></i></a>
                                    </td>

                                </tr>
                            <?php $i++; } ?>

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Orders</th>
                                <th>Quantity</th>
                                <th>Amount</th>
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
