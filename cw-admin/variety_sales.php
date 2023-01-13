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
    <?php $page = "variety sales"; $subpage = "";
    include('nav_left.php'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
            Variety Sales Charts
            </h1>

        </section>
        <!-- Main content -->
        <section class="content">
      

          <div class="row">
       

            <div class="col-md-12">
              <!-- Bar chart -->
              <div class="box box-primary">
                
                <div class="box-body">
                  <div id="bar-chart" style="height: 300px;"></div>
                </div><!-- /.box-body-->
              </div><!-- /.box -->

              
            </div><!-- /.col -->
          </div><!-- /.row -->
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
<!-- FLOT CHARTS -->

<?php include('CWJsLib.php');?>



    <script src="https://shahbaazchaviwale.github.io/js-css-library/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="https://shahbaazchaviwale.github.io/js-css-library/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="https://shahbaazchaviwale.github.io/js-css-library/plugins/flot/jquery.flot.pie.min.js" type="text/javascript"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <script src="https://shahbaazchaviwale.github.io/js-css-library/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
    
    <script>
            $(document).ready(function(){
                
            });
        </script>
     <script type="text/javascript">

      $(function () {

        var getData = [];
        var prod_list = [];
                $.ajax({
                    url:  'http://localhost/feather/cw-admin/graph_data_one.php',
                    method: 'GET',
                    success: function(data)
                    { 
                  
                        var remove_chicken_word ='';
                        getData = JSON.parse(data);
                        console.log('Data >>', getData);
                        for(var i in getData){
                            remove_chicken_word = getData[i].PROD_NAME.replace('Chicken ', '')
                            prod_list.push([remove_chicken_word, getData[i].PROD_AMOUNT])
                            
                        }
                        console.log('prod_list >>', prod_list);
                        // console.log('total >>', total);
                        
                        // ==============  BAR CODE
                            var bar_data = {
                                data: prod_list,
                                color: "#3c8dbc"
                                };
                                $.plot("#bar-chart", [bar_data], {
                                grid: {
                                    borderWidth: 1,
                                    borderColor: "#f3f3f3",
                                    tickColor: "#f3f3f3"
                                },
                                series: {
                                    bars: {
                                        show: true,
                                        barWidth: 0.5,
                                        align: "center"
                                    }
                                },
                                xaxis: {
                                    mode: "categories",
                                    tickLength: 1
                                }
                                });
                        // ==============  EOD BAR CODE
                    
                    },
                    error: function(data){ console.log('Error >>', data)}
                });
        /*
         * BAR CHART
         * ---------
         */
        
        
        /* END BAR CHART */

        /*
         * DONUT CHART
         * -----------
         */

        var donutData = [
          {label: "Series2", data: 30, color: "#3c8dbc"},
          {label: "Series3", data: 20, color: "#0073b7"},
          {label: "Series4", data: 50, color: "#00c0ef"}
        ];
        $.plot("#donut-chart", donutData, {
          series: {
            pie: {
              show: true,
              radius: 1,
              innerRadius: 0.5,
              label: {
                show: true,
                radius: 2 / 3,
                formatter: labelFormatter,
                threshold: 0.1
              }

            }
          },
          legend: {
            show: false
          }
        });
        /*
         * END DONUT CHART
         */

      });

      /*
       * Custom Label formatter
       * ----------------------
       */
      function labelFormatter(label, series) {
        return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
                + label
                + "<br/>"
                + Math.round(series.percent) + "%</div>";
      }
    </script>
</body>
</html>
