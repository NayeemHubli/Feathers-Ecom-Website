<!DOCTYPE html>
<html>
<?php include('dbcon.php');?>
<head>
    <meta charset="UTF-8">
    <title><?php titleName()?> | Dashboard</title>
    <?php include('CWCssLib.php');?>
    <script src="https://shahbaazchaviwale.github.io/js-css-library//js/angular.min.js" type="text/javascript"></script>
</head>
<body class="skin-red sidebar-mini fixed">
<div class="wrapper">

    <!--top menu-->
    <?php include('nav_top.php'); ?>
    <!--Left menu-->
    <?php $page = "Add Customer";
    include('nav_left.php');
    /*load function*/?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content" ng-app="ang_code" ng-controller="ang_cont">
                <input type="hidden" name="action_type" id="action_type" value="">
                <div class="col-lg-4 col-xs-12 no-padding">
                    <input type="text" name="search_cust" id="search_cust"  ng-model="search_cust" class="form-control input-lg margin-bottom" placeholder="Enter Customer" >
                </div>
        <div class="clearfix"></div>
            <div  ng-repeat="get_cust_list_data in get_cust_list | filter : search_cust">
                <div class="col-md-6 no-padding">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <i class="fa fa-user"></i>
                            <h3 class="box-title">{{ get_cust_list_data.cust_fname }} {{ get_cust_list_data.cust_lname }}  </h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="input-group">
                                <input class="form-control" type="text" value="{{ get_cust_list_data.cust_mobile }}" id="cust_{{ get_cust_list_data.cust_oid }}" readonly>
                                <span  class="input-group-addon"  ng-click="copy_fun(get_cust_list_data.cust_oid)"><i class="fa fa-copy"></i></span>
                            </div>
                            <p style="margin-top: 10px;"><i class="fa fa-map-marker"></i> {{ get_cust_list_data.cust_address }}</p>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>


            <div class="clearfix"></div>
        </section>
    </div>
    <!--Loader modal-->
    <div class="modal fade" id="loaderModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false" >
        <div class="modal-dialog" style="margin: 150px auto;">
            <div class="overlay col-lg-offset-5 col-xs-offset-3">
                <i class="fa fa-life-ring fa-pulse" style="color: #f39c12; font-size: 150px; "></i>
            </div>
        </div><!-- /.modal-dialog -->
    </div>
   <!--Footer -->
    <footer class="main-footer">
        &nbsp;
    </footer>
    <!-- right menu -->
    <?php include('nav_right.php'); ?>
    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div><!-- ./wrapper -->
<script type="text/javascript">
    var ang_app = angular.module('ang_code',[]);

    ang_app.controller('ang_cont',['$scope','$http',function($scope, $http){
        $('#loaderModal').modal('show');
        $http.get('add_order_save.php?action_type=search_cust')
            .success(function(response){
                $('#loaderModal').modal('hide');
                $scope.get_cust_list = response.cust_list;

            });

        $scope.copy_fun = function(txt_id){
            $scope.id = txt_id
            var text_box_id;
            text_box_id = document.getElementById('cust_'+$scope.id);
                // Select some text (you could also create a range)
                text_box_id.select();
                // Use try & catch for unsupported browser
                try {
                    // The important part (copy selected text)
                    var successful = document.execCommand('copy');
                    if(successful) {
                        pass_msg('warning','Number Copied !!','Info');
                    }
                    else {
                        console.log('copied not');
                    }
                } catch (err) {
                    alert('Unsupported Browser!');
                }

        };


    }]);
</script>

<?php include('CWJsLib.php');?>

</body>
</html>
