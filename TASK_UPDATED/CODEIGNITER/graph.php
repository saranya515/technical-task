//<!DOCTYPE HTML>
//<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Bar chart with data from MySQL using Highcharts</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript">

$(function () {
var chart;
$(document).ready(function() {
chart = new Highcharts.Chart({
chart: {
                    renderTo: 'container',
                    type: 'column'
                },
                title: {
                    text: 'APP INSTALLS'                 
                },
                
                xAxis: {
                    categories: ['india','germany','italy']
                },
                yAxis: {
                    title: {
                        text: 'Installs'
                    }
                },
        
        tooltip: {
            formatter: function() {
                return ''+
                    this.x +': '+ this.y +' mm';
            }
        },
        
            series: 
            <?php echo $seri;?>

        
       
    });
});

});
 </script>
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
    </head>
    <body>
        <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>

    </body>
//</html>