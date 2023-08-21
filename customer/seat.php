<?php
session_start();
include_once("db.php");

if (isset($_GET["tid"]) && isset($_GET["sid"])) {
    $theatreId = base64_decode($_GET["tid"]);

    $fetchSeats = "SELECT row_count, col_count, seats_per_col, regular_seat_fee, luxury_seat_fee 
    FROM theatre
    WHERE theatre_id = ?";
    $stmt = $con->prepare($fetchSeats);
    $stmt->bind_param("i", $theatreId);

    if ($stmt->execute()) {
        $rs = $stmt->get_result();

        if ($rs->num_rows == 1) {
            $tRow = $rs->fetch_assoc();
        }
    }

    $fetchSeatCodes = "SELECT seat_id, seate_code FROM seat WHERE theatre_id = ?";
    $stmt = $con->prepare($fetchSeatCodes);
    $stmt->bind_param("i", $theatreId);
    if ($stmt->execute()) {
        $rs = $stmt->get_result();

        if ($rs->num_rows == 1) {
            $seatArray = $rs->fetch_all(MYSQLI_ASSOC);
        }
    }
} else {
    $tRow = null;
    $seatArray = [
        ["seat_id" => 1, "seat_code" => "A1"], 
        ["seat_id" => 2, "seat_code" => "A2"], 
        ["seat_id" => 3, "seat_code" => "A3"],
        ["seat_id" => 4, "seat_code" => "A4"],
        ["seat_id" => 5, "seat_code" => "A5"],
        ["seat_id" => 6, "seat_code" => "A6"],
        ["seat_id" => 7, "seat_code" => "A7"],
        ["seat_id" => 8, "seat_code" => "A8"],
        ["seat_id" => 9, "seat_code" => "A9"],
        ["seat_id" => 10, "seat_code" => "A10"],
        ["seat_id" => 11, "seat_code" => "A11"],
        ["seat_id" => 12, "seat_code" => "A12"],
        ["seat_id" => 1, "seat_code" => "B1"], 
        ["seat_id" => 2, "seat_code" => "B2"], 
        ["seat_id" => 3, "seat_code" => "B3"],
        ["seat_id" => 4, "seat_code" => "B4"],
        ["seat_id" => 5, "seat_code" => "B5"],
        ["seat_id" => 6, "seat_code" => "B6"],
        ["seat_id" => 7, "seat_code" => "B7"],
        ["seat_id" => 8, "seat_code" => "B8"],
        ["seat_id" => 9, "seat_code" => "B9"],
        ["seat_id" => 10, "seat_code" => "B10"],
        ["seat_id" => 11, "seat_code" => "B11"],
        ["seat_id" => 12, "seat_code" => "B12"],
    ];
}
$seatIndex = 0;
$_GET["sid"] = 1;
?>

<!DOCTYPE html>
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
            /* body {
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
            } */

            .movie-container {
                margin: 100px 0px;
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

            /* .container {
                perspective: 1000px;
                margin: 40px 0;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            } */

            .seat {
                background-color: #008000;
                height: 24px;
                width: 30px;
                margin: 6px;
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
                pointer-events: none;
                /* Prevent clicking on blocked seats */
            }

            /* .seat:nth-of-type(2) {
                margin-right: 18px;
            }

            .seat:nth-last-of-type(2) {
                margin-left: 18px;
            } */

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
                pointer-events: none;
                /* Prevent clicking on booked seats */
            }

            .showcase {
                display: flex;
                justify-content: space-between;
                list-style-type: none;
                background: rgba(0, 0, 0, 0.1);
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
                box-shadow: 0 3px 10px rgba(255, 255, 255, 0.7);
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
    <!-- header -->
    <?php include_once("header.php"); ?>

    <main>

        <section class="movie-container">

            <div class="row  mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h5 class="my-0 fw-normal">Regular</h5>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title pricing-card-title">&#8377;0<small class="text-body-secondary fw-light">/seat</small></h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h5 class="my-0 fw-normal">Luxury</h5>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title pricing-card-title">+&#8377;50<small class="text-body-secondary fw-light">/seat</small></h3>
                        </div>
                    </div>
                </div>
            </div>

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

                <?php
                if ($tRow == null) {
                    $tRow["row_count"] = 10;
                    $tRow["col_count"]  = 3;
                    $tRow["seats_per_col"] = 4;

                    echo "<p>Invalid Request! Showing default data</p>";
                }   ?>

                    <form method="post" action="cpayment.php"> <!-- form start -->
                        <input type="hidden" name="hdnShowId" value="<?= $_GET["sid"] ?>">

                        <?php
                        for ($i = 0; $i < $tRow["row_count"]; $i++) {   ?>

                            <div class="row"> <!-- row start -->
                                <?php
                                for ($j = 0; $j < $tRow["col_count"]; $j++) {   ?>

                                    <div class="col"> <!-- col start -->
                                        <?php
                                        for ($k = 0; $k < $tRow["seats_per_col"]; $k++) {
                                            $sRow = $seatArray[$seatIndex];
                                            if ( $seatIndex < count($seatArray)-1 ) { 
                                                $seatIndex++; 
                                            };

                                            if (0 == 0) {   ?> <!-- seat is available -->
                                                <div class="seat">
                                                    <?= $sRow["seat_code"] ?>
                                                    <input type="checkbox" name="chkSeatId[]" value="<?= $sRow["seat_id"] ?>" id="">
                                                </div>
                                            <?php
                                            } else {  ?> <!-- seat is not available -->
                                                <div class="seat occupied">
                                                    <input type="checkbox" disabled name="chkSeatId[]" value="<?= $sRow["seat_id"] ?>" id="">
                                                </div>
                                        <?php
                                            }
                                        }   ?>
                                    </div>
                                <?php
                                }   ?>
                            </div> <!-- row end -->
                            <?php 
                        }   ?>
                    
                    <p class="text">
                        You have selected <span id="count">0</span> seats for the total price of Rs. <span id="total">0</span>
                    </p>
                    
                    <div class="mt-5 text-center">
                        <button class="btn profile-button" type="sumbit">
                            Book my seat(s)
                        </button>
                    </div>
                
                </form> <!-- form end -->
            </div>

        </section>

    </main>

    <!-- footer -->
    <?php include_once("footer.php") ?>

    <!-- JAVASCRIPT FILES -->
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

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>