<!DOCTYPE html>
<html>
    <html lang="en">
  <head>
      <title>Manage Screen & tickets</title>
     
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    
    <script
  src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous"></script>
  <style>
      input{
          width: 70px;
          text-align: center;
          height: 50px;
      }
  </style>
    <script>
const d = new Date();
document.getElementById("demo").innerHTML = d;
</script>


  </head>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<?php
    $conn=mysqli_connect("localhost","root","","info1");
    if(!$conn){
        die("Connection Unsuccessful");
    }
    // else{
    //     echo "Successful";
    // }
    
?>

<!-- Page Content -->
<div class="w3-teal">
  
  <div class="w3-container">
      <h1 style="color:white;">WATCH BETTER</h1>
 </div>
</div>
<div class="w3-container" align="left" mt-5>
<p id="demo" align="right"><b>Date:19/03/2023</b></p>
<p><span style="color:#b91d47">Screen1</span>&nbsp;&nbsp;<input type="number" value="80" style="background-color: #b91d47; color: white;" readonly/>
    <span style="color:#00aba9">Screen2</span>&nbsp;&nbsp;<input type="number" value="80" style="background-color:#00aba9 ; color: white;" readonly/>
    <span style="color:#2b5797">Screen3</span>&nbsp;&nbsp;<input type="number" value="80" style="background-color:#2b5797; color: white;" readonly/></p>

<canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["Screen1", "Screen2", "Screen3"];
var yValues = [<?php //$sql="SELECT * FROM `login`";
        //$result= mysqli_query($conn, $sql);
        
        //find the num of records
        
        //$num=mysqli_num_rows($result);echo $num;?>
        80,80,80];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  }
  

  
});
</script>
</div>

<div class="w3-container" align="right" mt-5>
    <p align="center"><b>Screen1 Sold tickets:</b></p>
    <canvas id="myChart1" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["PATHAAN", "Shehzada", "Tu jhoothi mein makkar", "AVATAR2"];
var yValues = [80, 50, 20, 15];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  
];

new Chart("myChart1", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  }
});
</script>

</div>

<div class="w3-container" align="left" mt-5>
    <p><b>Screen2 Sold Tickets:</b></p>
    <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
    
</div>
<script>
var xValues = ["PATHAAN", "Shehzada", "Tu zoothi mein makkar", "AVATAR2"];
var yValues = [50, 60, 50, 79];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  
];

new Chart("myChart2", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  }
});
</script>


<div class="w3-container" align="right" mt-5>
    <p align="center"><b>Screen3 Sold tickets:</b></p>
    <canvas id="myChart3" style="width:100%;max-width:600px"></canvas>
<script>
var xValues = ["PATHAAN", "Shehzada", "Tu jhoothi mein makkar", "AVATAR2"];
var yValues = [78, 60, 50, 75];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  
];

new Chart("myChart3", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  }
});
</script>


     
</body>
</html>

