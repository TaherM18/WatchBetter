<!DOCTYPE html>
        <html>
        <head>
                <title>Seat Management</title>
                <link rel="stylesheet" href="style.css">
                <script>
    function toggleSeat(seat) {
        seat.classList.toggle("selected");
        var seatList = document.getElementById("seat-list");
        var selectedSeats = document.querySelectorAll(".selected");
        var seatValues = [];
        for (var i = 0; i < selectedSeats.length; i++) {
            seatValues.push(selectedSeats[i].textContent);
        }
        seatList.value = seatValues.join(",");
    }
</script>
        </head>
        <body>
            <style>.seat {
    display: inline-block;
    margin: 5px;
    padding: 10px;
    background-color: #ddd;
    border-radius: 5px;
    cursor: pointer;
}

.seat.selected {
    background-color: green;
    color: #fff;
}

        </style>
                <div class="container">
                        <h2>Seat Management</h2>
                        <form action="aseat.php" method="post">
                                <div class="seats">
                                       
                                        

<?php

$numRows = 5;
$numCols = 10;

$selectedSeats = isset($_POST['seats']) ? $_POST['seats'] : [];

echo "<form method='post'>";
for ($row = 1; $row <= $numRows; $row++) {
    for ($col = 1; $col <= $numCols; $col++) {
        $seatName = "Seat " . $row . "-" . $col;
        $isSelected = in_array($seatName, $selectedSeats);
        $class = "seat";
        if ($isSelected) {
            $class .= " selected";
        }
        echo "<div class='$class' onclick='toggleSeat(this)'>";
        echo $seatName;
        echo "</div>";
    }
    echo "<br>";
}
echo "<input type='hidden' name='seats' id='seat-list'>";
echo "<input type='submit' value='Submit'>";
echo "</form>";

?>
                                     

                                </div>
                                <input type="submit" value="Book Now">
                        </form>
                </div>
        </body>
        </html>