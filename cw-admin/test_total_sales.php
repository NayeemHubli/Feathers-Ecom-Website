<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        #chart-container{
            width: 640px;
            height: auto;
        }
    </style>
</head>
<body>
<h2>hello</h2>

<div id="chart-container">
    <canvas id="mycanvas"></canvas>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript"  src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script>
    $(document).ready(function(){
        var getMonthName = function(dt){
            mlist = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
            return mlist[dt.getMonth()];
        };


        $.ajax({
            url:  'http://localhost/feather/cw-admin/get_total_sales.php?data=asdads',
            method: 'GET',
            success: function(data)
            { 
                var month = [];
                var total =[];
                var monthName = '';
                console.log('Data List>>', JSON.parse(data));
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
                                'rgba(255, 255, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 205, 86, 1)',
                                'rgba(75, 192, 192,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(201, 203, 207, 1)'
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
</body>
</html>