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
		<form action="process.php" method="post">
			<label for="movie">Select Movie:</label>
			<select name="movie" id="movie">
				<option value="Shehzada">Shehzada</option>
				<option value="Tu jhoothi mein makkar">Tu Jhoothi mein makkar</option>
				<option value="pathaan">pathaan</option>
                <option value="AVTAR2">AVATAR2</option>
			</select>
			<label for="date">Select Date:</label>
			<input type="date" name="date" id="date">
			<label for="time">Select Time:</label>
			<select name="time" id="time">
				<option value="10:00 AM">10:00 AM</option>
				<option value="2:00 PM">2:00 PM</option>
				<option value="6:00 PM">6:00 PM</option>
				<option value="10:00 PM">10:00 PM</option>
			</select>
			<input type="submit" value="Show">
                            <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$movie = $_POST['movie'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	
	// Save the booking information in a database or file
	// Send a confirmation email to the user
	
	echo "<h2>Booking Confirmed</h2>";
	echo "<p>You have booked $movie for $date at $time.</p>";
}

?>

		</form>
	</div>
</body>
</html>