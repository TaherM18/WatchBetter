<html><head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Home Page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    

    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head><body>
<div class="w3-teal">
  
  <div class="w3-container">
      <h1 style="color:white;">WATCH BETTER</h1>
 </div>
</div>
<table>
  <tr>
    <th>Movie Name</th>
    <th>Show Time</th>
    <th>Start-Date</th>
    <th>End-Date</th>
  </tr>
  <tr>
    <td> Shehzada</td>
    <td><?php echo date("h:i A", strtotime("10:00A.M.")); ?> - <?php echo date("h:i A", strtotime("12:30 P.M.")); ?></td>
    <td>03/09/2023</td>
    <td>03/17/2023</td>
  </tr>
  <tr>
    <td>Avatar2</td>
    <td><?php echo date("h:i A", strtotime("11:00 A.M.")); ?> - <?php echo date("h:i A", strtotime("01:30 P.M.")); ?></td>
    <td>03/02/2023</td>
    <td>03/12/2023</td>
  </tr>
  <tr>
    <td> Tuh Jhoothi mein makkar </td>
    <td><?php echo date("h:i A", strtotime("10:00 P.M.")); ?> - <?php echo date("h:i A", strtotime("1:00 A.M.")); ?></td>
    <td>03/08/2023</td>
    <td>03/20/2023</td>
</tr>
    
<style>
    table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #333;
  color: #fff;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

td {
  border-bottom: 1px solid #ddd;
}

</style>
   
</table></body>
</html>