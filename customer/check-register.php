<?php
include_once("db.php");

require('db.php');
// When form submitted, insert values into the database.

if (isset($_REQUEST['email'])) {

    $firstName = $_POST["fName"];
    $lastName = $_POST["lName"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $cityId = $_POST["city"];

    $query = "INSERT INTO users (first_name, last_name, user_type, contact, email_id, password, city_id)
    VALUES (?,?,?,?,?,?,?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ssssssi", $firstName, $lastName, $userType, $contact, $email, $pass, $cityId);
    if ($stmt->execute()) {
        echo "<div class='form'>
                <h3 class='text-white' role='alert'>You are registered successfully.</h3><br/>
                <p class='small fw-bold mt-2 pt-1 mb-0' style='color :#22577E'>Already have an account? <a href='login.php'class='link-danger'>Login</a></p>
            </div>";
    } else {
        echo "<div class='form'>
                <h3 class='text-warning'role='alert'>Required fields are missing.</h3><br/>
                <p class='link'>Click here to <a href='register.php'>Registration</a> again.</p>
            </div>";
    }
} else {
    echo "Invalid Request!";
}
