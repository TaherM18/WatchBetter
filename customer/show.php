<?php
session_start();
// include_once("auth_session.php");
include_once("db.php");
$fetchMovieTheatre = "SELECT movie_name, theatre_name FROM movie, theatre WHERE movie_id = ? AND theatre_id = ?";
$stmt = $con->prepare($fetchMovieTheatre);
$movieId = base64_decode($_GET["mid"]);
$theatreId = base64_decode($_GET["tid"]);
$stmt->bind_param("ii", $movieId, $theatreId);
if ($stmt->execute()) {
    $rs = $stmt->get_result();
    if ($rs->num_rows == 1) {
        $row = $rs->fetch_array();
        $movieName = $row[0];
        $theatreName = $row[1];
    } else {
        $movieName = "selected movie";
        $theatreName = "selected theatre";
    }
}
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

    <!--    Watch Better https://templatemo.com/tm-583-festava-live -->
</head>

<body>
    <!-- header -->
    <?php include_once("header.php"); ?>

    <main>

        <section class="artists-section section-padding" id="section_3">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-12">
                        <div class="col-6">
                            <h2 class="mb-4">Shows Available for <?= $movieName ?> in <?= $theatreName ?></h2>
                        </div>
                        <div class="col-6">
                            <form action="" method="post">
                                <div class="input-group">
                                    <div class="form-outline">
                                        <input id="search-focus" type="search" id="form1" placeholder="Search" class="form-control" required />
                                    </div>
                                    <button type="button" class="btn btn-outline-primary mb-5">Search</button>
                                </div>
                            </form>
                            <script>
                                const searchFocus = document.getElementById('search-focus');
                                const keys = [{
                                        keyCode: 'AltLeft',
                                        isTriggered: false
                                    },
                                    {
                                        keyCode: 'ControlLeft',
                                        isTriggered: false
                                    },
                                ];

                                window.addEventListener('keydown', (e) => {
                                    keys.forEach((obj) => {
                                        if (obj.keyCode === e.code) {
                                            obj.isTriggered = true;
                                        }
                                    });

                                    const shortcutTriggered = keys.filter((obj) => obj.isTriggered).length === keys.length;

                                    if (shortcutTriggered) {
                                        searchFocus.focus();
                                    }
                                });

                                window.addEventListener('keyup', (e) => {
                                    keys.forEach((obj) => {
                                        if (obj.keyCode === e.code) {
                                            obj.isTriggered = false;
                                        }
                                    });
                                });
                            </script>
                        </div>
                    </div>

                    <?php
                    if (isset($_GET["mid"]) && isset($_GET["tid"])) {
                        if (isset($_SESSION["userId"])) {
                            $fetchShows = "SELECT show_id, show_price, hosted_at 
                            FROM shows
                            WHERE movie_id = " . base64_decode($_GET['mid']) . " AND theatre_id = " .
                                base64_decode($_GET['tid']) . " AND hosted_at > NOW()
                            ORDER BY hosted_at";

                            $rs = $con->query($fetchShows);

                            if ($rs->num_rows > 0) {
                                while ($row = $rs->fetch_assoc()) {
                                    $date = date_create($row["hosted_at"]);
                                    $formattedDate = date_format($date, "D, d, H:i a"); ?>
                                    <a href="seat.php?mid=<?= $_GET['mid'] . '&tid=' . $_GET['tid'] . '&sid=' . base64_encode($row['show_id']); ?>">
                                        <button type="button" class="btn btn-primary position-relative">
                                            <?= $formattedDate ?>
                                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                &#8377; <?= $row["show_price"] ?>
                                                <!-- <span class="visually-hidden">unread messages</span> -->
                                            </span>
                                        </button>
                                    </a>
                                    <?php
                                }
                            } else {
                                echo "No shows available for selected movie in selected theatre";
                            }
                        } else {
                            echo "Login required for this action!";
                        }
                    } else {
                        echo "Invalid request!";
                        exit;
                    }
                    ?>
                </div>

        </section>

    </main>

    <!-- footer -->
    <?php include_once("footer.php"); ?>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>