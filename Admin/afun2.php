<!DOCTYPE html>
<html>
<head>
	<title>Movie Show Timing</title>
	<link rel="stylesheet" href="style.css">
    

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <style>.container {
	max-width: 500px;
	margin: 0 auto;
	padding: 20px;
	background-color: #f2f2f2;
	border-radius: 10px;
}

h2 {
	text-align: center;
}

form {
	display: flex;
	flex-direction: column;
	align-items: center;
}

label, select, input[type="date"] {
	margin: 10px 0;
}

input[type="submit"] {
	padding: 10px 20px;
	background-color: #008CBA;
	color: #fff;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	transition: all 0.3s ease;
}

input[type="submit"]:hover {
	background-color: #005F6B;
}
</style>
<div class="w3-teal">
  
  <div class="w3-container">
      <h1 style="color:white;">WATCH BETTER</h1>
 </div>
</div>
	<div class="container">
		<h2>Movie Show Timing</h2>
		<form action="afun2(1).php" method="post">
			<label for="movie">Select Movie:</label>
			<select name="movie" id="movie">
				<option value="Shehzada">Shehzada</option>
				<option value="Tu Jhoothi mein makkar">Tu Jhoothi mein makkar</option>
				<option value="Pathaan">Pathaan</option>
                <option value="AVTAR 2">AVTAR 2</option>
			</select>
			<label for="date">Start Date:</label>
			<input type="date" name="sdate" id="date">

            <label for="date">End Date:</label>
			<input type="date" name="edate" id="date">


			<label for="time">Start Time:</label>
			<select name="stime" id="time">
				<option value="10:00 AM">10:00 AM</option>
				<option value="2:00 PM">2:00 PM</option>
				<option value="6:00 PM">6:00 PM</option>
				<option value="10:00 PM">10:00 PM</option>
			</select>

            <label for="time">End Time:</label>
			<select name="etime" id="time">
				<option value="10:00 AM">12:30 PM</option>
				<option value="2:00 PM">4:30 PM</option>
				<option value="6:00 PM">8:40 PM</option>
				<option value="10:00 PM">1:30 AM</option>
			</select>
			<input type="submit" value="Set" href="afun2(1).php">
                            <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$movie = $_POST['movie'];
    $sdate = $_POST['sdate'];
	$edate = $_POST['edate'];
	@$stime = $_POST['stime'];
    @$etime = $_POST['etime'];
	
	// Save the booking information in a database or file
	// Send a confirmation email to the user
	
	echo "<h2>Movie Set</h2>";
	echo "<p>You have set $movie for $sdate to $edate at $stime to $etime.</p>";
}

?>

		</form>
	</div>
</body>
</html>