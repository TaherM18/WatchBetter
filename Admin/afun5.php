<!DOCTYPE html>
<html>
    <html lang="en">
  <head>
      <title></title>
     
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    
    <script
  src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="crossorigin="anonymous"></script>  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/css3piechart@0.4.0/css3piechart.min.css" integrity="sha384-4La7D3qZ1JeJ7nS2C5X5w14D4IT4e4MGMcm77iFLzsM5GL5m5S9X32fWZ3qBZV7G" crossorigin="anonymous">
</head>
  <div class="w3-container" align="left" mt-5>
    <p align="center"><b>Shehzada</b></p>
<script>
    $(document).ready(function() {
  // Set up data for the pie chart
  var data = {
    labels: ["Refund Approved", "Refund Pending"],
    datasets: [
      {
        data: [60, 40],
        backgroundColor: [
          "#36A2EB",
          "#FFCE56",
//          "#FF6384"
        ],
        hoverBackgroundColor: [
          "#36A2EB",
          "#FFCE56",
//          "#FF6384"
        ]
      }]
  };

  // Get the context of the canvas element we want to select
  var ctx = $("#myChart");

  // Create the pie chart
  var myPieChart = new Chart(ctx,{
      type: 'pie',
      data: data,
      options: {
          responsive: true,
          maintainAspectRatio: false
      }
  });
});
  </script>
  </div>


  <div class="w3-container" align="left" mt-5>
    <p align="center"><b>Tuh Jhooti mein makkar</b></p>
<script>
    $(document).ready(function() {
  // Set up data for the pie chart
  var data = {
    labels: ["Refund Approved", "Refund Pending"],
    datasets: [
      {
        data: [60, 40],
        backgroundColor: [
          "#36A2EB",
          "#FFCE56",
//          "#FF6384"
        ],
        hoverBackgroundColor: [
          "#36A2EB",
          "#FFCE56",
//          "#FF6384"
        ]
      }]
  };

  // Get the context of the canvas element we want to select
  var ctx = $("#myChart1");

  // Create the pie chart
  var myPieChart = new Chart(ctx,{
      type: 'pie',
      data: data,
      options: {
          responsive: true,
          maintainAspectRatio: false
      }
  });
});
  </script>
  </div>
    <style>
        #chart-container {
  width: 200px;
  height: 200px;
  margin: 0 auto;
  text-align: center;
}
#myChart {
  width: 100%;
  height: 100%;
}


#myChart1 {
  width: 100%;
  height: 100%;
}

    </style>
    
    <div id="chart-container">
  <canvas id="myChart"></canvas>


</div>

     
  <?php?>
</body>
</html>