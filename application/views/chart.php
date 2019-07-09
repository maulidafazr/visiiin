<html>
  <head>
        <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);
      //google.charts.setOnLoadCallback(drawChart1);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

          {
            var PieChartData1='<?php echo $PieChartData1;?>' //string
            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows(JSON.parse(PieChartData1));

            // Set chart options
            var options = {'title':'<?php echo $PieChartTitle1;?>',
                           'width':400,
                           'height':300};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart2_div'));
            chart.draw(data, options);
          }

         {
            var PieChartData='<?php echo $PieChartData;?>'
            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows(JSON.parse(PieChartData));

            // Set chart options
            var options = {'title':'<?php echo $PieChartTitle;?>',
                           'width':400,
                           'height':300};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
          }

          {
            var ColumnChartData='<?php echo $ColumnChartData;?>' //string
            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows(JSON.parse(ColumnChartData));

            // Set chart options
            var options = {'title':'<?php echo $ColumnChartDataTitle;?>',
                           'width':400,
                           'height':300};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.ColumnChart(document.getElementById('chart3_div'));
            chart.draw(data, options);
          }

          {
            var ColumnChartData1='<?php echo $ColumnChartData1;?>' //string
            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows(JSON.parse(ColumnChartData1));

            // Set chart options
            var options = {'title':'<?php echo $ColumnChartDataTitle1;?>',
                           'width':400,
                           'height':300};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.ColumnChart(document.getElementById('chart4_div'));
            chart.draw(data, options);
          }

          {
            var ColumnChartData2='<?php echo $ColumnChartData2;?>' //string
            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Domestik');
            data.addColumn('number', 'Mancanegara');
            data.addRows(JSON.parse(ColumnChartData2));

            // Set chart options
            var options = {'title':'<?php echo $ColumnChartDataTitle2;?>',
                           'width':400,
                           'height':300};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.ColumnChart(document.getElementById('chart5_div'));
            chart.draw(data, options);
          }
      }

    </script>
  </head>

  <body>
   
    <table>
      <tr>
      <br><h1><center>Visualisasi Data Pariwisata di Kabupaten Wonosobo</center></h1></br></tr>
      <tr>
        <td>     <div id="chart2_div"></div>  </td>
        <td>    <div id="chart_div"></div> </td>
        <td>    <div id="chart3_div"></div> </td>
      </tr>
      <tr>
        <td>    <div id="chart4_div"></div> </td>
        <td>    <div id="chart5_div"></div> </td>
      </tr>

    </table>
  </body>
</html>