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
    <?php $page = "add rates"; $subpage = "add variety";
    include('nav_left.php'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add Current Chicken Rates
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <!--add tex box-->
            <div class="col-md-3 no-padding">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Details</h3>
                    </div>
                    <div class="box-body">
                        <form action="admin_add_rates_save.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" id="action_type" name="action_type" value="0">
                            <input type="hidden" id="chk_variety_id" name="chk_variety_id" value="">
                                <div class="col-lg-12 no-padding">
                                    <div class="form-group">
                                        <label>Enter Chicken Variety Name </label>
                                        <input  type="text" class="form-control" id="txt_variety_name" name="txt_variety_name" placeholder="Enter text here">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xs-6 no-padding">
                                    <div class="form-group">
                                        <label>Market Price </label>
                                        <input  type="number" class="form-control" id="txt_chicken_market_price" name="txt_chicken_market_price" placeholder="Add Price">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xs-6 no-padding">
                                    <div class="form-group">
                                        <label>Add Extra Price  </label>
                                        <input  type="number" class="form-control" id="txt_chicken_extra_price" name="txt_chicken_extra_price" placeholder="Add Price">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-xs-4 no-padding">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="chicken_status" id="chicken_status">
                                            <option value="active">Active</option>
                                            <option value="disabled">disabled</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xs-4 no-padding">
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select class="form-control" name="chicken_type" id="chicken_type">
                                            <option value="Per Kg">Per Kg</option>
                                            <option value="Per Piece">Per Piece</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xs-4 no-padding">
                                    <div class="form-group">
                                        <label>Priority </label>
                                        <input  type="number" class="form-control" id="txt_chicken_order" name="txt_chicken_order" placeholder="Order">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-xs-12 no-padding">
                                    <div class="form-group">
                                        <label>Availability</label>
                                        <select class="form-control" name="chicken_availability" id="chicken_availability">
                                            <option value="available">Available</option>
                                            <option value="Out of stock">Out of stock</option>
                                            <option value="Order one day before">Order one day before</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 no-padding">
                                    <div class="form-group">
                                        <label>Enter Description </label>
                                        <input  type="text" class="form-control input-lg" id="txt_chicken_desc" name="txt_chicken_desc" placeholder="Enter Description">
                                    </div>
                                </div>

                                <div class="col-lg-12 no-padding " style="margin-top: -25px;">
                                    <div class="form-group">
                                        <label>&nbsp; </label>
                                        <input type="file" id="image" name="image"  >
                                    </div>
                                </div>
                                <div class="col-lg-12 no-padding">
                                    <div class="form-group">
                                        <input  type="submit" class="btn btn-success" value="Save">
                                        <a   href="" class="btn btn-warning" >Refresh</a>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--data list-->
            <div class="col-lg-9" style=" padding-left: 1px; padding-right: 0px;">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Image Size : width-230 , Height-150</h3>
                    </div>
                    <div class="box-body" style="overflow: auto;">
                        <?php $sql_sel_chk_variety = "SELECT * FROM `cw_chicken_variety`";
                              $sql_sel_chk_variety_exe = mysqli_query($connect,$sql_sel_chk_variety) or die('Error at VARIETY'.mysql_error());?>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Names</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Order</th>
                                    <th>Date</th>
                                    <th>Action</th>
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
                                    <td><?= $chk_variety_row['chv_sort_number']?></td>
                                    <td><?= setDate($chk_variety_row['chv_price_date']) ?></td>
                                    <td>
                                        <button class="btn  btn-warning btn-flat"
                                                onclick="Edit_chicken_variety('<?= $chk_variety_row['chv_oid']?>','<?= $chk_variety_row['chv_variety_name']?>',
                                                                              '<?= $chk_variety_row['chv_market_price']?>',
                                                                               '<?= $chk_variety_row['chv_extra_price']?>',
                                                                               '<?= $chk_variety_row['chv_status']?>',
                                                                               '<?= $chk_variety_row['chv_availability']?>',
                                                                              '<?= $chk_variety_row['chv_description']?>',
                                                                              '<?= $chk_variety_row['quatity_type']?>','<?= $chk_variety_row['chv_sort_number']?>');">Edit</button>
                                        <button class="btn  btn-danger btn-flat" onclick="RemoveChkVariety('<?= $chk_variety_row['chv_oid']?>','<?= $chk_variety_row['chv_variety_name']?>');" >Remove</button>
                                    </td>

                                </tr>
                            <?php } ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Names</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Order</th>
                                    <th>Date</th>
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
