<?php
session_start();
print_r($_GET);
$_SESSION['mov_name']=$_GET['name'];
$_SESSION['cno']=$_GET['conno'];
$_SESSION['cname']=$_GET['cname'];
$_SESSION['seats']=$_GET['seats'];

?>
<!--<!DOCTYPE html>
<html>
<head>
    <title>Seat Booking</title>
    <style>
        .seat {
            width: 50px;
            height: 50px;
            margin: 5px;
            display: inline-block;
        }
        .blocked {
            background-color: red;
            pointer-events: none; /* Prevent clicking on blocked seats */
        }
        .booked {
            background-color: red;
            pointer-events: none; /* Prevent clicking on booked seats */
        }
        .selected {
            background-color: blue !important;
        }
        .unavailable {
            background-color: red;
            pointer-events: none; /* Prevent clicking on selected seats */
        }
        .available {
            background-color: green;
            cursor: pointer; /* Make available seats selectable */
        }
    </style>
</head>
<body>
    <h2>Seat Booking</h2>
    <form method="post">
        <?php
        // Initialize array of booked and selected seats
        $bookedSeats = [];
        $selectedSeats = [];
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $selectedSeats = isset($_POST['seats']) ? $_POST['seats'] : [];
            echo "<pre>";
            var_dump($_POST["seats"]);
            echo "</pre>";

            if (count($selectedSeats) <= 10) {
                // Check if the selected seats are available and not already booked or selected
                foreach ($selectedSeats as $selectedSeat) {
                    if (!in_array($selectedSeat, $bookedSeats) && !in_array($selectedSeat, $selectedSeats)) {
                        $selectedSeats[] = $selectedSeat; // Mark the seat as selected
                    }
                }
            }
        }
        
        // Generate seats
        for ($i = 1; $i <= 10; $i++) {
            if (in_array($i, $bookedSeats)) {
                echo "<div class='seat booked'></div>";
            } elseif (in_array($i, $selectedSeats)) {
                echo "<div class='seat unavailable'></div>";
            } else {
                echo "<div class='seat available' data-seat='$i'></div>";
            }
        }
        ?>
        <br>
        <label>Select up to 10 available seats:</label>
        <select name="seats[]" multiple size="10">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <input type="submit" value="Book Seats">
    </form>
</body>
</html>-->



<?php
//include("auth_session.php");
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Watch Better</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-festava-live.css" rel="stylesheet">
       
        <head>
        <script src="https://fonts.googleapis.com/css?family=Montserrat&display=swap"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"></script>


   
    <style>
        body {
            font-family: "Montserrat", sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #fff;
            color: #fff;
            margin: 0;
        }
        * {
            font-family: "Montserrat", sans-serif !important;
            box-sizing: border-box;
        }

        .movie-container {
            margin: 20px 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column
        }

        .movie-container select {
            appearance: none;
            -moz-appearance: none;
            -webkit-appearance: none;
            border: 0;
            padding: 5px 15px;
            margin-bottom: 40px;
            font-size: 14px;
            border-radius: 5px;
        }

        .container {
            perspective: 1000px;
            margin: 40px 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .seat {
            background-color: #008000;
            height: 12px;
            width: 15px;
            margin: 3px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            display: inline-block;
        }

        .selected {
            background-color: #0081cb;
        }

        .occupied {
            background-color: #FF0000;
        }

         .blocked {
            background-color: red;
            pointer-events: none; /* Prevent clicking on blocked seats */
         }
         
        .seat:nth-of-type(2) {
            margin-right: 18px;
        }

        .seat:nth-last-of-type(2) {
            margin-left: 18px;
        }

        .seat:not(.occupied):hover {
            cursor: pointer;
            transform: scale(1.2);
        }

        .showcase .seat:not(.occupied):hover {
            cursor: default;
            transform: scale(1);
        }

         .booked {
            background-color: red;
            pointer-events: none; /* Prevent clicking on booked seats */
        }
        .showcase {
            display: flex;
            justify-content: space-between;
            list-style-type: none;
            background: rgba(0,0,0,0.1);
            padding: 5px 10px;
            border-radius: 5px;
            color: #777;
        }

        .showcase li {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 10px;
        }

        .showcase li small {
            margin-left: 2px;
        }

        .row {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .screen {
            background: #fff;
            height: 70px;
            width: 70%;
            margin: 15px 0;
            transform: rotateX(-45deg);
            box-shadow: 0 3px 10px rgba(255,255,255,0.7);
        }

        p.text {
            margin: 40px 0;
        }

        p.text span {
            color: #0081cb;
            font-weight: 600;
            box-sizing: content-box;
        }

        .credits a {
            color: #fff;
        }

    </style>
    

    </head>

    <body>
        <div style="width:1500px;">
        <h2 style="background-color: black; color: white;" align="center">WATCH BETTER</h2>
</div>
        <div style="width:1500px;">
        <h2 style="background-color: #f5ad42; color: white;">.</h2>
</div>
   <div class="movie-container">
        <label>Pick a movie: </label>
        <select id="movie">
            <option value="250">Interstellar (Rs. 250)</option>
            <option value="200">Kabir Singh (Rs. 200)</option>
            <option value="150">Duniyadari (Rs. 150)</option>
            <option value="100">Natsamrat (Rs. 100)</option>
        </select>

        <ul class="showcase">
            <li>
                <div class="seat"></div>
                <small>N/A</small>
            </li>
            <li>
                <div class="seat selected"></div>
                <small>Selected</small>
            </li>
            <li>
                <div class="seat occupied"></div>
                <small>Occupied</small>
            </li>    
        </ul>

        <div class="container">
            <div class="screen"></div>

            <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat occupied"></div>
                <div class="seat occupied"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat occupied"></div>
                <div class="seat occupied"></div>
            </div>
            <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat occupied"></div>
                <div class="seat occupied"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
            </div>
            <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat occupied"></div>
                <div class="seat occupied"></div>
                <div class="seat occupied"></div>
                <div class="seat"></div>
            </div>

            <p class="text">
                You have selected <span id="count">0</span> seats for the total price of Rs. <span id="total">0</span>
            </p>
            <div class="mt-5 text-center"><button class="btn profile-button" type="button"><a href="cpayment.php">Selected</a></button></div>
        </div>
    </div>
    <script>
        const container = document.querySelector('.container');
        const seats = document.querySelectorAll('.row .seat:not(.occupied)');
        const count = document.getElementById('count');
        const total = document.getElementById('total');
        const movieSelect = document.getElementById('movie');

        let ticketPrice = +movieSelect.value;

//Update total and count
        function updateSelectedCount() {
            const selectedSeats = document.querySelectorAll('.row .seat.selected');
            const selectedSeatsCount = selectedSeats.length;
            count.innerText = selectedSeatsCount;
            total.innerText = selectedSeatsCount * ticketPrice;
        }

//Movie Select Event
        movieSelect.addEventListener('change', e => {
            ticketPrice = +e.target.value;
            updateSelectedCount();
        });

//Seat click event
        container.addEventListener('click', e => {
            if (e.target.classList.contains('seat') &&
                    !e.target.classList.contains('occupied')) {
                e.target.classList.toggle('selected');
            }
            updateSelectedCount();
        });


    </script>


   
   
           

                       
 <footer class="site-footer">
     <div style="width: 1800px;">
         <h2 style="color:white; background-color: yellowgreen ;" align="center">&copy;WATCH BETTER</h2>
                            </div>
                        </footer>
                        <!--
                   
                    T e m p l a t e M o
                   
                        -->

                        <!-- JAVASCRIPT FILES -->
                        <script src="js/jquery.min.js"></script>
                        <script src="js/bootstrap.min.js"></script>
                        <script src="js/jquery.sticky.js"></script>
                        <script src="js/click-scroll.js"></script>
                        <script src="js/custom.js"></script>

                        </body>

                        </html>