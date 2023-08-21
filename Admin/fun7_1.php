<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch data from database
$sql = "SELECT * FROM fun7";
$result = mysqli_query($conn, $sql);


echo "<h1 align='center'>Update Or Delete Movie</h1><br/><br/>";
// Display data in HTML table
echo "<table border='1' align='center'>";
echo "<tr><th>ID</th>
<th>pic</th>
<th>Movie Name</th>
<th>Platinum Seat</th>
<th>Gold Seat</th>
<th>Silver Seat</th>
<th>Update</th>
<th>Delete</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["id"] .
    "</td><td>" . $row["pic"] .
     "</td><td>" . $row["mname"] .
      "</td><td>" . $row["pseat"] .
      "</td><td>" . $row["gseat"] . 
      "</td><td>". $row["sseat"] ."</td>
      <td><a href='edit.php?id=$row[id]'>
      <input type='submit' value='Update' style='background-color:green; color:white;'/></a></td>
      <td><a href='delete.php?id=$row[id]'><input type='submit' value='Delete' style='background-color:red; color:white;'/></a></td></tr>";
}
echo "</table>";

// Close database connection




// $conn = mysqli_connect('localhost', 'root', '', 'admin');
// $sql = "SELECT * FROM update ORDER BY id DESC LIMIT 1";
// @$result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);
// $image_path = $row['pic'];
// $mname=$row['mname'];
// $mname=$row['pseat'];
// $mname=$row['gseat'];
// $mname=$row['sseat'];

// // Display the image on the web page
// echo "<img src='$image_path'>";
mysqli_close($conn);
?>
