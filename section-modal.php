<!--buy chicken  modal-->
<div class="modal fade" id="BuyChickenModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  aria-hidden="true" data-backdrop="static" data-keyboard="false" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-red">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close " style="color: #fff;"></i></span></button>
                <h4 id="modal-title-name" class="modal-title"><span class="fa fa-cart-plus"></span> Place Order For Chicken</h4>
                <small class="text-capitalize"> &nbsp; &nbsp;minimum order must be 1 Kg.</small>
            </div>
            <div class="modal-body">
                <div class="box-body no-padding">
                    <div class="col-lg-6 col-xs-6 padding_no">
                        <h4 class="make_small text-muted"><i class="fa fa-shopping-cart"></i> Variety Name</h4>
                        <h3 class="make_small"   id="chk_variety_name"></h3>
                    </div>
                    <div class="col-lg-6 col-xs-6 padding_no">
                        <h4 class="make_small text-muted"><i class="fa fa-rupee"></i> Current Price</h4>
                        <h3 class="make_small"   id="chk_price"></h3>

                    </div>
                    <input type="hidden" id="chk_variety_id" name="chk_variety_id" value="">
                    <input type="hidden" id="txt_chk_variety_name" name="txt_chk_variety_name" value="">
                    <input type="hidden" id="txt_chk_price" name="txt_chk_price" value="">
                    <input type="hidden" id="txt_cust_id" name="txt_cust_id" value="<?= $_SESSION['cust_id'] ?>">

                    <div class="col-lg-6  padding_no" style="margin-top: 5px;">
                        <input type="number" name="txt_qty" id="txt_qty" class="form-control" placeholder="Enter Quantity in KG"  onkeypress="return isNumberKey(event,this);" tabindex="1" >
                    </div>

                    <div class="col-lg-6 padding_no" style="margin-top: 5px;">
                        <input type="text" name="txt_fname" id="txt_fname" class="form-control" placeholder="Enter First Name" onkeypress="return onlyAlphabets(event,this);" tabindex="2" value="<?= $_SESSION['cust_name'] ?>"  readonly>
                    </div>

                    <div class="col-lg-6 padding_no" style="margin-top: 5px;">
                        <select name="address_type" id="address_type" class="form-control">
                        <?php $check_address_list = "SELECT * FROM `cw_customer_address` WHERE `cust_oid` = '".$_SESSION['cust_id']."'";
                              $check_address_list_exe = mysqli_query($connect,$check_address_list) or die('Error at customer address'.mysql_error());
								while($check_address_list_row = mysqli_fetch_array($check_address_list_exe)){?>
                                        <option value="<?= $check_address_list_row['cud_oid'] ?>"><?= $check_address_list_row['cud_address_type'] ?></option>
								<?php } ?>
                            
                        </select>
                    </div>

                    <div class="col-lg-6 padding_no" style="margin-top: 5px;">
                        <input type="number" name="txt_mob" id="txt_mob" class="form-control" placeholder="Enter Your Mobile Number" onkeypress="return isNumberKey(event,this);" tabindex="3" value="<?= $_SESSION['cust_mobile'] ?>" readonly >
                    </div>

                    

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-flat" style="color: #fff;" onclick="CalculateChicken();"><i class="fa fa-check"></i> Place Order</button>
                <button type="button" data-dismiss="modal" class="btn btn-danger btn-flat pull-left" style="color: #fff;"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>


<!--Loader modal-->
<div class="modal fade" id="loaderModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false" >
    <div class="modal-dialog" style="margin: 150px auto;">
        <div class="overlay col-lg-offset-5 col-xs-offset-3">
            <div id="loader">
                <div class="spinner">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
            </div>
        </div>
    </div><!-- /.modal-dialog -->
</div>

<!--successful modal sell scrap-->
<div class="modal fade" id="SuccessfullyBuyChicken" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="margin: 150px auto;">
        <div id="exitScrapBgColor" class="call-action call-action-boxed call-action-style2 clearfix alert-dismissable text-center" >
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <h4 id="exitBuyChicken" class="text-center">
            </h4>
        </div>
    </div><!-- /.modal-dialog -->
</div>

<!--based on order it show order list modal-->
<div class="modal fade" id="UpdateBuyChickenModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  aria-hidden="true" data-backdrop="static" data-keyboard="false" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-red">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close " style="color: #fff;"></i></span></button>
                <h4 id="modal-title-name" class="modal-title" style="color: #fff;"><span class="fa fa-cart-plus"></span> Enter your mobile number to view last placed orders </h4>
            </div>
            <div class="modal-body">
                <div class="box-body">

                    <div class="col-lg-12" style="margin-top: 5px;">
                        <input type="number" name="search_mob" id="search_mob" class="form-control input-lg" placeholder="Enter Your Mobile Number" onkeypress="return isNumberKey(event,this);">
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-flat" style="color: #fff;" onclick="UpdateBuyChicken();"><i class="fa fa-check"></i> Search</button>
                <button type="button" data-dismiss="modal" class="btn btn-danger btn-flat pull-left" style="color: #fff;"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>


<!--ordered chicken details modal-->
<div class="modal fade" id="OrderedChickenModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  aria-hidden="true" data-backdrop="static" data-keyboard="false" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-red">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close " style="color: #fff;"></i></span></button>
                <h4 id="modal-title-name" class="modal-title" style="color: #fff;"><span class="fa fa-cart-plus"></span> Order your chicken </h4>
            </div>
            <div class="modal-body">
                <div class="box-body">
                    <div class="col-lg-6">
                        <h4 class="text-muted"><i class="fa fa-cart-plus"></i> Variety Name</h4>
                        <h3 style="margin-top: -5px;" id="update_chk_variety_name"></h3>
                    </div>
                    <div class="col-lg-6">
                        <h4 class="text-muted"><i class="fa fa-rupee"></i> Current Price</h4>
                        <h3 style="margin-top: -5px;" id="update_chk_price"></h3>

                    </div>

                    <input type="hidden" id="chk_update_bought_id" name="chk_update_bought_id" value="">
                    <input type="hidden" id="chk_update_price" name="chk_update_price" value="">
                    <input type="hidden" id="update_mobile" name="update_mobile" value="">


                    <div class="col-lg-12" style="margin-top: 5px;">
                        <h4 class="text-muted">  Total Quantity</h4>
                        <input type="number" name="update_txt_qty" id="update_txt_qty" class="form-control input-lg" placeholder="Enter Quantity in KG"  onkeypress="return isNumberKey(event,this);" >
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-flat" style="color: #fff;" onclick="FinalUpdateOrder();"><i class="fa fa-check"></i> Update Order</button>
                <button type="button" data-dismiss="modal" class="btn btn-danger btn-flat pull-left" style="color: #fff;"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>
