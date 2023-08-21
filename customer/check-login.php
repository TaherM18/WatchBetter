<?php
include_once("db.php");

if (isset($_POST['btnLogin'])) {
    // Pre-Processing
    //$txtEmail = stripslashes($_POST['txtEmail']);    // removes backslashes
    $txtEmail = mysqli_real_escape_string($con, stripslashes($_POST['txtEmail']));
    // $txtPass = stripslashes($_POST['txtPass']);
    $txtPass = mysqli_real_escape_string($con, stripslashes($_POST['txtPass']));

    // Check if user exist in the database
    $userType = "C";
    $query = "SELECT user_id FROM users WHERE user_type = ? AND email_id = ? AND password = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("sss", $userType, $txtEmail, $txtPass);
    
    if ( $stmt->execute() ) {
        $rs = $stmt->get_result();

        if ($rs->num_rows == 1) {
            $row = $rs->fetch_array();
            $_SESSION['userId'] = $row[0];

            if (isset($_POST['chkRemember'])) {
                setcookie("cEmail", $email, time() + 60 * 60);
                setcookie("cPass", $password, time() + 60 * 60);
            }
            header("Location: home.php");
        }
        else {  ?>
            <div class='form'>
                <h3 class='text-white'role='alert'>Incorrect email/password.</h3><br/>
                <p class='small fw-bold mt-2 pt-1 mb-0' style='color :#22577E'>Click to <a href='login.php'>Login</a> Again</p>
            </div>
            <?php
        }
    }
    else {
        echo "There was an error executing the query";
    }
}
