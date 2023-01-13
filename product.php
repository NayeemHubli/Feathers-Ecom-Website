<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en" ng-app="product_module">

<head>
    <title>Feather</title>
    <?php   require_once 'cw-admin/dbcon.php';
    include 'section-CSS-Library.php';
    $page =  'Chicken';
    if(!isset( $_SESSION['cust_id'])){
        header("location: login.php?msg=product");
    }
    ?>
    <script src="cw-js/angularjs/angular.js" type="text/javascript"></script>
</head>

<body style="background: url(images/body-bg/body_bg.jpg) fixed repeat;">

<div id="container" class="boxed-page">
    <div class="hidden-header"> </div>
    <?php include'section-header.php'; ?>
    <section id="home">
        <div class="section full-width-portfolio" style="border-top:0; border-bottom:0; background:#fff; padding-top: 30px; padding-bottom: 0px;">
            <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01" style="margin-bottom: 10px !important;">
                <h1><strong class="">&nbsp;</strong></h1>
            </div>
        </div>
    </section>

    <!-- ========================================= Product lit ========================================= -->
    <div class="section" style="background:#fff; padding-top: 0px;">
        <div class="container" ng-controller="all_product_list_cont">
            <div class="row" >
                <!-- <div class="col-lg-8 col-lg-offset-2" style="margin-bottom: 10px;">
                    <input  type="text" class="form-control" placeholder="Search Any Chicken Item Here..." ng-model="search_anything">
                </div> -->
            </div>
            <div ng-repeat="view_all_product_list in all_chicken_variety | filter:search_anything">

                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box ">
                            <a class="btn btn-danger btn-xs text-capitalize"> {{view_all_product_list.chk_availability }}</a>
                            <div class="product-imitation">

                                <img alt="{{view_all_product_list.chk_variety_name}}" src="images/products/{{view_all_product_list.chk_image_location}}">
                            </div>
                            <div class="product-desc">
                                            <span class="product-price ">
                                                <i class="fa fa-rupee"></i>
                                                {{view_all_product_list.chk_price | number:0}} <small class="font12 text-capitalize">{{view_all_product_list.chk_quantity_type}}.</small>
                                            </span>
                                <a  class="product-name text-capitalize"> {{view_all_product_list.chk_variety_name}}</a>
                                <div class="small m-t-xs">
                                    {{view_all_product_list.chk_descrition}}
                                </div>
                               <!-- code change:  add button here for order -->
                               <div class="m-t text-right">
                               <?php $check_address = "SELECT COUNT(`cud_oid`) as address_list FROM `cw_customer_address` WHERE `cust_oid` = '".$_SESSION['cust_id']."'";
									 $check_address_exe = mysqli_query($connect,$check_address) or die('Error at customer details'.mysql_error());
									 $check_address_row = mysqli_fetch_array($check_address_exe);
                                     if($check_address_row['address_list'] > 0){ ?>
                                        <button class="btn-system btn-mini border-btn"  ng-click="place_order(view_all_product_list.chk_id)" >Add To Cart <i class="fa fa-shopping-cart"></i> </button>
                               <?php }else{ ?>
                                        <a href="profile.php?msg=address" class="btn-system btn-mini border-btn"   >Add To Cart <i class="fa fa-shopping-cart"></i> </a>                                    
                                    <?php } ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =========================================EOD Product list ========================================= -->

    <!-- ========================================= Footer ========================================= -->
    <?php include'section-footer.php'; ?>
    <!-- ========================================= EOD Footer ========================================= -->

</div>

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<?php include'section-modal.php'; include'section-JS-Library.php' ?>
<script src="cw-js/prod.js" type="text/javascript"></script>


</body>

</html>