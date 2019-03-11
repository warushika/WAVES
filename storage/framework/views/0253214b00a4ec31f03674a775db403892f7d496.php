<!DOCTYPE html>
<html>
    <head>

            <title>Make Google Pie Chart in Laravel<tittle>
            <link href="../../css/bootstrap.min.css" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <style type="text/css">
                .box{
                    width:800px;
                    margin:0 auto;

                }
            </style>
            <script type="text/javascript">
                var analytics = <?php echo $name; ?>

                google.chart.load('current', {'packages':['corechart']});

                google.charts.setOnLoadCallback(drawChart);

                function drawChart()
                {
                    var data = google.visualization.arrayToDataTable(analytics);
                    var options = {
                        title : 'Types of boats'};
                    var chart = new google.visualization.PieChart(document.getElementById(pie_chart));
                    chart.draw(data, options);
                }
            </script>
    </head>

    <body>
       <br/>
       <div class="container">
           <h3 align="center">Make Google Pie Chart in Laravel</h3>
           <br />

           <div class="panel panel-default">
               <div class="panel-heading">
                   <h3 class="panel-title">Types of boats</h3>
               </div>
               <div class="panel-body">
                   <div id="pie_chart" style="width:750px; height:450px;">
                </div>
            </div>
        </div>
    </body>

</html> 