<?php
session_start();
include_once("db.php");

echo "<pre>";
var_dump($_POST);
echo "</pre>";

$seatCodes = "";
$totalPrice = 0;
$cRow = null;

if (isset($_SESSION["userId"])) {
    $fetchCustMovie = "SELECT movie_name, CONCAT(first_name, ' ', last_name) AS full_name, contact 
    FROM users, movie
    WHERE user_id = ? AND movie_id = (SELECT movie_id FROM shows WHERE show_id = ?)";

    $stmt = $con->prepare($fetchCustMovie);
    $stmt->bind_param("ii", $_SESSION["userId"], $_POST["hdnShowId"]);

    if ($stmt->execute()) {
        $rs = $stmt->get_result();
        if ($rs->num_rows == 1) {
            $cRow = $rs->fetch_assoc();
        }
    }
} else {
    echo "Login required to perform this action!";
}

if ($cRow == null) {
    $cRow["movie_name"] = "Movie Name";
    $cRow["full_name"] = "Firstname Lastname";
    $cRow["contact"] = "1234567890";
}

if (isset($_POST["hdnShowId"])) {
    $fetchSeats = "SELECT seat_code, seat_type, show_price, regular_seat_fee, luxury_seat_fee 
    FROM seat
    INNER JOIN theatre ON seat.theatre_id = theatre.theatre_id
    INNER JOIN shows ON shows.show_id = ?
    WHERE seat_id IN (?)";

    $stmt = $con->prepare($fetchSeats);
    $stmt->bind_param("ii", $_POST["chkSeatId"], $_POST["hdnShowId"]);
    if ($stmt->execute()) {
        $rs = $stmt->get_result();
        while ($sRow = $rs->fetch_assoc()) {
            $seatCodes .= $sRow["seat_code"] . ", ";

            if ($sRow["seat_type"] == "R") {
                $totalPrice += $sRow["show_price"] + $sRow["regular_seat_fee"];
            }
            else {
                $totalPrice += $sRow["show_price"] + $sRow["luxury_seat_fee"];
            }
        }
    }
}
?>

<html>

<head>
    <title>Checkout</title>

    <script src="https://code.jquery.com/jq\uery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.food-option').click(function() {
                if ($('#yes-option').is(':checked')) {
                    window.location.href = 'index_1.php';
                } else {
                    $('#food-section').hide();
                }
            });
        });
    </script>

    <script>
        $(doucument).ready(function() {
            $('.food-option').click(function() {
                if ($('#yes-option').is(':checked')) {
                    window.location.href = 'index_1.php';
                } else {
                    $
                }
            });
        });
    </script>

    <script>
        function validateForm() {
            var movieName = document.getElementById("cvv").value;
            var customerName = document.getElementById("cardnumber").value;
            var phoneNo = document.getElementById("expiry").value;
            var seatSelected = document.getElementById("cvv").value;
            var price = document.getElementById("price").value;
            if (price == "") {
                alert("Please enter price")
                return false;
            }
            // Check if movie name is empty
            if (movieName == "") {
                alert("Please enter the movie name.");
                return false;
            }

            // Check if customer name is empty
            if (customerName == "") {
                alert("Please enter your name.");
                return false;
            }

            // Check if phone number is empty or not a number
            if (phoneNo == "" || isNaN(phoneNo)) {
                alert("Please enter a valid phone number.");
                return false;
            }

            // Check if seat selected is empty
            if (seatSelected == "") {
                alert("Please select a seat.");
                return false;
            }

            // If all fields are valid, submit the form
            return true;
        }
    </script>

    <style>
        .payment-form {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #3e8e41;
        }

        .error-message {
            color: red;
            font-size: 12px;
        }

        #add-food {
            display: none;
        }

        .show-food {
            display: block;
        }
    </style>

</head>

<div class="payment-form">
    <h2>Payment Form</h2>
    <form method="post" action="payment.php" onsubmit="return validateForm()">
        <label for="cvv">Movie Name:</label>
        <input type="text" id="cvv" name="cvv" value="<?= $cRow["movie_name"] ?>" placeholder="Movie Name">

        <label for="cardnumber">Customer Name:</label>
        <input type="text" id="cardnumber" name="cardnumber" placeholder="Enter your Name" value="<?= $cRow["full_name"] ?>">
        <span id="name-error"></span>

        <label for="expiry">Phone number:</label>
        <input type="text" id="expiry" name="expiry" placeholder="1234567890" value="<?= $cRow["contact"] ?>">
        <span id="expiry-error"></span>

        <label for="cvv">Seat(s) selected:</label>
        <input type="text" id="cvv" name="cvv" placeholder="No. of seats" value="<?= $seatCodes ?>">
        <span id="cvv-error"></span>

        <label for="add-food">Would you like to add food?:</label>
        <input type="radio" id="yes-option" name="option" value="Yes" class="food-option" />Yes
        <input type="radio" id="no-option" name="option" value="No" class="food-option" checked />No
        <br><br>

        <div id="food-section" style="display:none;">
            <label for="food-booked">Food Booked:</label> no of seat selected
            <input type="text" id="food-booked" name="food-booked" value="2" placeholder="Delicious Burger">
            <span id="food-error"></span>
        </div>
        <label for="price">Price:</label>
        <input type="text" id="" name="option" value="<?= $totalPrice ?>" class="" placeholder="Total Price" />

        <input type="submit" value="Pay Now">
    </form>
</div>

</body>

</html>