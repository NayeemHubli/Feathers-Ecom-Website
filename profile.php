<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en" ng-app="product_module">

<head>
    <title>Feather</title>
    <?php   
    require_once 'cw-admin/dbcon.php';
    include 'section-CSS-Library.php';
    $page =  'Profile';
    if(!isset( $_SESSION['cust_id'])){
        header("location: login.php?msg=product");
    }
    ?>
    <style type="text/css">
		.order-list{
			border-bottom-style: inset !important;
    		border-width: 1.5px !important ;
    		border-color: #eee !important ;
			padding-bottom: 5px !important ;
			border-color: #eee !important ;
    		padding: 0px 0px 5px 0px !important ;
			margin-top: 7px;
		}
		.cla{
			color: #000;
		}
	</style>
</head>

<body>
<div id="container" class="boxed-page">
    <div class="hidden-header"> </div>
    <?php include'section-header.php'; 
      $check_entry = " SELECT `cust_fname`, `cust_lname`, `cust_mobile`, `cust_email` 
      FROM `cw_customer_details` 
      WHERE `cust_oid`= '".$_SESSION['cust_id']."'  " ;

	$check_entry_exe = mysqli_query($connect,$check_entry) or die('Error at customer details'.mysql_error());
	$check_entry_row = mysqli_fetch_array($check_entry_exe);
	?>
   

    <div class="section" style="background:#fff; padding-top: 20px;">
        <div class="container">
        <div class="row">
		<?php if($_REQUEST['msg'] == 'address'){ ?>
			<h3 class="text-center" style="color: #ee3733;">Please Add new address before ordering chicken !!!</h3>
		<?php } ?>

						<div class="col-md-4">
							<!-- Classic Heading -->
							<h4 class="classic-title"><span>My Details</span></h4>
							
							<!-- Accordion -->
							<div class="panel-group" id="accordion">
								
								<!-- Start Accordion 1 -->
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse-one" style="color: #000;">
												<i class="fa fa-angle-up control-icon"></i>
												<i class="fa fa-user"></i> Personal Details
											</a>
										</h4>
									</div>
									<div id="collapse-one" class="panel-collapse collapse in">
										<div class="panel-body">
                                        <div class="widget widget-categories">
                                                <ul>
                                                    <li>
                                                    <label> Name: </label>
                                                    <a href="#"> <?=$check_entry_row['cust_fname']?>  <?=$check_entry_row['cust_lname']?></a>
                                                    </li>
                                                    <li>
                                                    <label> Mobile Number: </label>
                                                    <a href="#"><?=$check_entry_row['cust_mobile']?></a>
                                                    </li>
                                                    <li>
                                                    <label> Email: </label>
                                                    <a href="#"><?=$check_entry_row['cust_email']?></a>
                                                    </li>
                                                </ul>
                                                <a href="edit_details.php?msg=edit_1" class="btn-system btn-mini border-btn" style="margin-top: 10px;"><i class="fa fa-edit"></i> Edit details</a>
                                            </div>
                                        </div>
									</div>
								</div>
								<!-- End Accordion 1 -->
								
								<!-- Start Accordion 2 -->
								<?php $check_address = "SELECT COUNT(`cud_oid`) as address_list FROM `cw_customer_address` WHERE `cust_oid` = '".$_SESSION['cust_id']."'";
											$check_address_exe = mysqli_query($connect,$check_address) or die('Error at customer details'.mysql_error());
											$check_address_row = mysqli_fetch_array($check_address_exe);
											$add_address_btn = $check_address_row['address_list'] == 0 ?  '<i class="fa fa-home"></i> Address' :  '<a href="edit_details.php?msg=edit_2">Add New Address</a>'; 
											?>
											
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse-tow" >
												<i class="fa fa-angle-up control-icon"></i>
												  <?= $add_address_btn?>
											</a>
										</h4>
									</div>
							
									<div id="collapse-tow" class="panel-collapse collapse in">
										<div class="panel-body">
											<?php 
											
						   
											if($check_address_row['address_list'] == 0){
												echo '<a href="edit_details.php?msg=edit_2" class="btn-system btn-mini border-btn" style="margin-top: 10px;"><i class="fa fa-edit"></i> Add Address</a>';
											}else{ ?>
											<?php $check_address_list = "SELECT * FROM `cw_customer_address` WHERE `cust_oid` = '".$_SESSION['cust_id']."'";
                              				$check_address_list_exe = mysqli_query($connect,$check_address_list) or die('Error at customer address'.mysql_error());
											  while($check_address_list_row = mysqli_fetch_array($check_address_list_exe)){?>
												<div class="classic-testimonials item">
													<div class="testimonial-content">
														<label>Type: <?= $check_address_list_row['cud_address_type']?></label>
														<p><?= $check_address_list_row['cud_address']?></p>
														<a href="edit_details.php?msg=edit_3&cud_adress=<?= $check_address_list_row['cud_oid']?>" class="testimonial-author"><span>Edit</span></a>
													</div>
												</div>
												<?php } ?>
											<?php } ?>
										</div>
									</div>
								</div>
								<!-- End Accordion 2 -->							
							</div>
							<!-- End Accordion -->
							
						</div>
						
						<div class="col-md-8">
							
							<h4 class="classic-title"><span>My Orders History</span></h4>
							<?php 
									 $get_ord_details = "SELECT cw_customer_details_1.cust_oid,
									cw_customer_details_1.cust_fname,
									cw_customer_details_1.cust_mobile,
									cw_create_chicken_order_1.chv_variety_name,
									cw_create_chicken_order_1.chv_price,
									cw_create_chicken_order_1.ccco_qty,
									cw_create_chicken_order_1.ccco_total_amount,
									cw_create_chicken_order_1.ccco_order_status,
									cw_create_chicken_order_1.ccco_oid,
									cw_customer_address_1.cud_address_type,
									cw_create_chicken_order_1.ccco_order_date,
									cw_create_chicken_order_1.chv_oid,
									cw_chicken_variety_1.quatity_type,
									cw_chicken_variety_1.chv_img_loc
							 		FROM ((chickenwala_77.cw_create_chicken_order    cw_create_chicken_order_1
									INNER JOIN chickenwala_77.cw_chicken_variety cw_chicken_variety_1
									ON (cw_create_chicken_order_1.chv_oid = cw_chicken_variety_1.chv_oid))
								   INNER JOIN chickenwala_77.cw_customer_details cw_customer_details_1
									ON (cw_customer_details_1.cust_oid = cw_create_chicken_order_1.cust_oid))
								   INNER JOIN chickenwala_77.cw_customer_address cw_customer_address_1
									 ON (cw_create_chicken_order_1.cud_oid = cw_customer_address_1.cud_oid) 
									WHERE cw_customer_details_1.cust_oid = '".$_SESSION['cust_id']."' 
									ORDER BY cw_create_chicken_order_1.ccco_oid DESC";
									$ord_details_exe = mysqli_query($connect,$get_ord_details) or die('Error at customer address'.mysql_error());
									while($ord_details_row = mysqli_fetch_array($ord_details_exe)){?>
									
									<div class="col-lg-12 order-list" >
										<div class="col-lg-3" style="width: fit-content; padding: 0px;">
										<img alt="<?= $ord_details_row['chv_variety_name']?>" src="images/products/chicken_biryani_piece.jpg" height="100" width="100"/>
									</div>
									<div class="col-lg-9">
										<div class="col-lg-4">
											<b class="cla">Item Order </b>#2021<?= $ord_details_row['ccco_oid']?>
										</div> 
										<div class="col-lg-4">
										<b class="cla">Order For : </b><?= $ord_details_row['cust_fname']?>
										</div> 
										<div class="col-lg-4">
											<b class="cla">Address Type : </b><?= $ord_details_row['cud_address_type']?>
										</div> 
									</div>
									<div class="col-lg-9">
										<div class="col-lg-8">
											<b class="cla">Item Name : </b> <?= $ord_details_row['chv_variety_name']?>
										</div> 
										
										
									</div>
									<div class="col-lg-9">
										<div class="col-lg-4">
											<b class="cla">Price : </b> <?= $ord_details_row['chv_price']?>
										</div> 
										<div class="col-lg-4">
											<b class="cla">Quantity : </b> <?= $ord_details_row['ccco_qty']?> <?= $ord_details_row['quatity_type']?>
										</div> 
										<div class="col-lg-4">
											<b class="cla">Total Price : </b> <?= $ord_details_row['ccco_total_amount']?>
										</div> 
									</div>

									<div class="col-lg-12" style="padding: 0px;">
										<?php 
											if($ord_details_row['ccco_order_status'] == 'yet_to_confirm'){
												echo '<a href="order_process.php?msg=cancel&ord_id='.$ord_details_row['ccco_oid'].'" class="label label-info" style="margin-top: 5px;"> Cancel</a>';
											}else if($ord_details_row['ccco_order_status'] == 'order_cancel'){
												echo'<span class="label label-danger">Cancelled by me</span>';
											}else if($ord_details_row['ccco_order_status'] == 'order_confirm'){
												echo '<span class="label label-warning">Order Confirmed</span>';
											}else if($ord_details_row['ccco_order_status'] == 'order_delivered'){
												echo'<span class="label label-success">Order Delivered</span>';
											}
										?>
										
									</div>
										<div class="col-lg-12"  style="padding: 0px;">
											<b class="cla">Order date : </b><?= date("d-m-y - H:i A",strtotime($ord_details_row['ccco_order_date']));?>
										</div>
									</div>									
									<?php } ?>
							
						</div>
        </div>
    </div>
    <!-- =========================================EOD Product list ========================================= -->

  
</div>

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<?php include'section-modal.php'; include'section-JS-Library.php' ?>
<script src="cw-js/prod.js" type="text/javascript"></script>


</body>

</html>