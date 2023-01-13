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
    <?php $page = "total_sales";
    include('nav_left.php');?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <!-- Main content -->
        <section class="content">
            <div class="col-lg-12 no-padding">
                <div class="box box-danger">
                    <div class="box-body" style="overflow: auto;">
                        <div id="chart-container">
                        <canvas id="mycanvas"></canvas>
                        </div>
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

    <!-- CHARTS JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script type="text/javascript"  src="https://shahbaazchaviwale.github.io/js-css-library/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script>
        $(document).ready(function(){
            var getMonthName = function(dt){
                mlist = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
                return mlist[dt.getMonth()];
            };


            $.ajax({
                url:  'http://localhost/feather/cw-admin/graph_data.php ?msg=tot_month_sales',
                method: 'GET',
                success: function(data)
                { 
                    var month = [];
                    var total =[];
                    var monthName = '';
                    console.log('Data >>', JSON.parse(data));
                    var getData = JSON.parse(data);
                    for(var i in getData){
            
                        monthName = getMonthName(new Date(getData[i].month))
                        month.push(monthName);
                        total.push(getData[i].total);
                    }
                    // console.log('month >>', month);
                    // console.log('total >>', total);
                    
                var chartdata = {
                    labels: month,
                    datasets : [
                        {
                            
                                label: 'Sales',
                                data: total,

                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(255, 159, 64, 0.2)',
                                    'rgba(255, 205, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(201, 203, 207, 0.2)'
                                    ],
                                    borderColor: [
                                    'rgb(255, 99, 132)',
                                    'rgb(255, 159, 64)',
                                    'rgb(255, 205, 86)',
                                    'rgb(75, 192, 192)',
                                    'rgb(54, 162, 235)',
                                    'rgb(153, 102, 255)',
                                    'rgb(201, 203, 207)'
                                    ],
                                hoverBackgroundColor: 'rgba(200,200,200,1)',
                                hoverBorderColor: 'rgba(200,200,200,1)',
                            
                        }
                    ]
                };
                var ctx = $("#mycanvas");
                var barGraph = new Chart(ctx,{
                    type: 'bar',
                    data: chartdata
                });
            },
                error: function(data){ console.log('Error >>', data)}
            });
        });
    </script>
</div><!-- ./wrapper -->
<?php include('CWJsLib.php');?>
</body>
</html>
