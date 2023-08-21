<?php 
session_start();

?>

<html><head><title></title></head>
    <script src="https://code.jquery.com/jq\uery-3.6.0.min.js"></script>
    <script>  $(document).ready(function() {
        $('.food-option').click(function() {
        if ($('#yes-option').is(':checked')) {
        window.location.href = 'index_1.php';
        } else {
        $('#food-section').hide();
        }
        });
        });</script>      
    <script>
        $(doucument).ready(function(){
        $('.food-option').click(function(){
        if ($('#yes-option').is(':checked')){
        window.location.href = 'index_1.php';
        } else {
        $
        }
        }
        }
    </script>
    <script>
        function validateForm() {
        var movieName = document.getElementById("cvv").value;
        var customerName = document.getElementById("cardnumber").value;
        var phoneNo = document.getElementById("expiry").value;
        var seatSelected = document.getElementById("cvv").value;
        var price = document.getElementById("price").value;
        if (price == ""){
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
    <div class="payment-form">
        <h2>Payment Form</h2>
        <form method="post" action="payment.php" onsubmit="return validateForm()">
            <label for="cvv">Movie Name:</label>
            <input type="text" id="cvv" name="cvv" value="<?php  if(isset($_SESSION['mov_name'])){echo $_SESSION['mov_name'];}else echo''; ?>"  placeholder="Movie Name">

            <label for="cardnumber">Customer Name:</label>
            <input type="text" id="cardnumber" name="cardnumber" placeholder="Enter your Name" value="<?php  if(isset($_SESSION['cno'])){echo $_SESSION['cno'];}else echo''; ?>">
            <span id="name-error"></span>

            <label for="expiry">Phone number:</label>
            <input type="text" id="expiry" name="expiry" placeholder="1234567890" value="<?php  if(isset($_SESSION['cname'])){echo $_SESSION['cname'];}else echo''; ?>">
            <span id="expiry-error"></span>

            <label for="cvv">Seat selected:</label>
            <input type="text" id="cvv" name="cvv"  placeholder="No. of seats" value="<?php  if(isset($_SESSION['seats'])){echo $_SESSION['seats'];}else echo''; ?>">
            <span id="cvv-error"></span>

            <label for="add-food">Would you like to add food?:</label>
            <input type="radio" id="yes-option" name="option" value="Yes" class="food-option" />Yes
            <input type="radio" id="no-option" name="option" value="No" class="food-option" checked />No
            <br><br>

            <div id="food-section" style="display:none;">
                <label for="food-booked">Food Booked:</label> no of seat selected
                <input type="text" id="food-booked" name="food-booked" value="2" placeholder="Delecious Burger">
                <span id="food-error"></span>
            </div>
            <label for="price">Price:</label>
            <input type="text" id="" name="option" value="" class="" placeholder="enter price" />

            <input type="submit" value="Pay Now">
        </form>
    </div>
    <?php
    $price = 12345.6789;
    $formatted_price = number_format($price, 2, '.', ',');
    echo $formatted_price;  // Output: 12,345.68
    ?>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "wb";

// Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
// Your SQL query
    $sql = "SELECT m_name,seat_no FROM movies";
    $result = $conn->query($sql);

    $movie_names = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $movie_names[] = $row["name"];
        }
    }
// Close the connection
    $conn->close();
    ?>
</body>
</html>