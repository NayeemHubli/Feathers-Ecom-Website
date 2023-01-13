<!DOCTYPE html>
<html>
<?php
include('dbcon.php');
if($_SESSION['log_role'] === 'block'){
    header('location:http://chickenwaala.com/cw-admin');
}
?>
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
    <?php $page = "dashboard";
    include('nav_left.php');
    /*load function*/

    /*this function will count the no of entries*/
    function countEntries($query,$query_exe,$row){
        $connect = 0;
        $query_exe =  mysqli_query($connect, $query);
        $row = mysql_fetch_array($query_exe);
        echo $row[0];
    }
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row no-padding">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>
                                <?php $tot_hits_exe = mysqli_query($connect, 'SELECT COUNT(`hit_oid`) AS tot_hits FROM `cw_hit_app` ');
                                        $row_hits = mysqli_fetch_array($tot_hits_exe);echo $row_hits[0];?></h3>
                            <p>Customer Visits</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-camera"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            &nbsp;
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?php $tot_order_completed_exe = mysqli_query($connect, "SELECT COUNT(`ccco_oid`) AS tot_ord_dvr FROM `cw_create_chicken_order`");
                                $row_order_completed = mysqli_fetch_array($tot_order_completed_exe); echo $row_order_completed['tot_ord_dvr'];?></h3>
                            <p>Total Orders</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-cart-plus"></i>
                        </div>
                        <a href="admin_confirmed_order.php" class="small-box-footer">
                            <i class="fa fa-hand-o-up"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->

                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3><?php $tot_current_order_exe = mysqli_query($connect, "SELECT COUNT(`ccco_oid`) AS tot_ord_confirm FROM `cw_create_chicken_order`  WHERE `ccco_order_status` = 'order_delivered'");
                                    $row_current_order = mysqli_fetch_array($tot_current_order_exe); echo $row_current_order['tot_ord_confirm'];?></h3>
                                <p>Total Delivered Orders</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-cart-arrow-down"></i>
                            </div>
                            <a href="admin_current_order_list.php" class="small-box-footer">
                                <i class="fa fa-hand-o-up"></i>
                            </a>
                        </div>

                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3><?php $tot_cust_exe = mysqli_query($connect, "SELECT COUNT(`cust_oid`) FROM `cw_customer_details`");
                                $row_cust = mysqli_fetch_array($tot_cust_exe); echo $row_cust[0];?></h3>
                            <p>Total Customer</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            &nbsp;
                        </a>
                    </div>
                </div>
            </div>
            <div class="row no-padding">
            <div class="col-lg-6 col-sm-12 col-xs-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Chick Today's Rates</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body" style="overflow: auto;">
                            <?php $sql_sel_chk_variety = "SELECT * FROM `cw_chicken_variety`";
                            $sql_sel_chk_variety_exe = mysqli_query($connect,$sql_sel_chk_variety) or die('Error at VARIETY'.mysql_error());?>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Names</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php while($chk_variety_row = mysqli_fetch_array($sql_sel_chk_variety_exe)){ ?>
                                    <tr>
                                        <td><?= $chk_variety_row['chv_variety_name']?></td>
                                        <td><?= $chk_variety_row['chv_price']?></td>
                                        <td>
                                            <?php if($chk_variety_row['chv_status'] === 'active'){
                                                echo '<i class="fa fa-check text-success"></i>';
                                            } else{
                                                echo '<i class="fa fa-close text-danger"></i>';
                                            }?>
                                        </td>
                                        <td><?= setDate($chk_variety_row['chv_price_date']) ?></td>

                                    </tr>
                                <?php } ?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Names</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div><!-- /.box-body -->
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12 no-padding">
                   
                    <!--grand colection-->
                    <div class="col-lg-6 col-xs-12">
                        <div class="box box-solid">
                            <div class="box-header with-border">
                                <i class="fa fa-dollar text-red"></i>
                                <h3 class="box-title">Total Grand Collection</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <div class="col-lg-12 no-padding">
                                    <h1  style="margin-top: 2px;">
                                        <i class="fa  fa-rupee"></i>
                                        <?php $tot_grand_exe = mysqli_query($connect, "SELECT SUM(`ccco_total_amount`) AS tot_amt FROM `cw_create_chicken_order` WHERE `ccco_order_status` = 'order_delivered'");
                                        $row_grand = mysqli_fetch_array($tot_grand_exe); echo $row_grand[0];?></h3>
                                    </h1>
                                </div>
                            </div><!-- /.box-body -->
                        </div>
                    </div>
                    <!--grand quantity-->
                    <div class="col-lg-6 col-xs-12">
                        <div class="box box-solid">
                            <div class="box-header with-border">
                                <i class="fa  fa-archive text-red"></i>
                                <h3 class="box-title">Total Quantity Sold</h3>
                                
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <div class="col-lg-12 no-padding">
                                    <h1  style="margin-top: 2px;">
                                        <?php $tot_grand_qty_exe = mysqli_query($connect, "SELECT SUM(`ccco_qty`) AS tot_qty  FROM `cw_create_chicken_order` WHERE `ccco_order_status` = 'order_delivered'");
                                        $row_grand_qty = mysqli_fetch_array($tot_grand_qty_exe); echo $row_grand_qty[0] .'Kg.';?></h3>
                                    </h1>
                                </div>
                            </div><!-- /.box-body -->
                        </div>
                    </div>
                    <!--Set Markets-->
                    <!-- <div class="col-lg-6 col-xs-12">
                        <div class="box box-solid">
                            <div class="box-header with-border">
                                <i class="fa  fa-rupee"></i>
                                <h3 class="box-title">Add Price For All</h3>
                            </div>
                            <div class="box-body">
                                <div class="col-lg-12 no-padding">
                                    <form action="admin_add_same_rate_all_variety.php" method="post">
                                        <div class="input-group input-group-sm">
                                            <input class="form-control" type="number" name="price" required="">
                                        <span class="input-group-btn">
                                          <input type="submit" class="btn btn-info btn-flat" value="Submit">
                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->
                   
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

</div><!-- ./wrapper -->
<?php include('CWJsLib.php');?>
</body>
</html>
