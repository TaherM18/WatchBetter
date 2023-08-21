<?php
session_start();
// include_once("auth_session.php");
include_once("db.php");
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
                            <h2 class="mb-4">Theatres Available</h2>
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
                    if (isset($_GET["mid"])) {
                        if (isset($_SESSION["userId"])) {
                            $fetchTheatres = "SELECT theatre.theatre_id, theatre_name, theatre_img, theatre_address, AVG(rating) AS avg_rating 
                            FROM theatre
                            INNER JOIN theatre_rating ON theatre.theatre_id = theatre_rating.theatre_id
                            INNER JOIN shows ON shows.theatre_id = theatre.theatre_id
                            WHERE shows.movie_id = " . base64_decode($_GET['mid']) . " AND city_id = (SELECT city_id FROM users WHERE user_id = " . $_SESSION["userId"] . ")
                            GROUP BY theatre.theatre_id";
                        } else {
                            $fetchTheatres = "SELECT theatre.theatre_id, theatre_name, theatre_img, theatre_address, AVG(rating) AS avg_rating 
                            FROM theatre
                            INNER JOIN theatre_rating ON theatre.theatre_id = theatre_rating.theatre_id
                            INNER JOIN shows ON shows.theatre_id = theatre.theatre_id
                            WHERE shows.movie_id = " . base64_decode($_GET['mid']) .
                            " GROUP BY theatre.theatre_id";
                        }
                    } else {
                        echo "Invalid request!";
                        exit;
                    }

                    $rs = $con->query($fetchTheatres);
                    if ($rs->num_rows > 0) {
                        while ($row = $rs->fetch_assoc()) { ?>
                            <div class="col-lg-3 col-12">

                                <div class="card mb-4" style="width: 14rem;">
                                    <img class="card-img-top" src="<?= $row["theatre_img"] ?>" alt="Poster">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $row["theatre_name"] ?></h5>
                                        <p class="card-text"><?= $row["theatre_address"] ?></p>
                                        <a href="show.php?mid=<?= $_GET['mid'] . '&tid=' . $row['theatre_id']; ?>">
                                            <span>Select Show</span>
                                            <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="16" cy="16" r="15.5"></circle>
                                                    <line x1="10" y1="18" x2="16" y2="12"></line>
                                                    <line x1="16" y1="12" x2="22" y2="18"></line>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <?php if ($row = $rs->fetch_assoc()) { ?>

                                    <div class="card mb-4" style="width: 14rem;">
                                        <img class="card-img-top" src="<?= $row["theatre_img"] ?>" alt="Poster">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $row["theatre_name"] ?></h5>
                                            <p class="card-text"><?= $row["theatre_address"] ?></p>
                                            <a href="show.php?mid=<?= $_GET['mid'] . '&tid=' . $row['theatre_id']; ?>">
                                                <span>Select Show</span>
                                                <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                                        <circle cx="16" cy="16" r="15.5"></circle>
                                                        <line x1="10" y1="18" x2="16" y2="12"></line>
                                                        <line x1="16" y1="12" x2="22" y2="18"></line>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                    <?php
                        }
                    } else {
                        echo "No theatres available for this movie";
                    }
                    ?>

                    <!-- <div class="col-lg-3 col-12">

                        <div class="card mb-4" style="width: 14rem;">
                            <img class="card-img-top" src="https://th.bing.com/th/id/OIP.Jd36DvP4CKdtC3ROOoE2hAHaLH?pid=ImgDet&rs=1" alt="Pathan">
                            <div class="card-body">
                                <h5 class="card-title">Avtaar 2</h5>
                                <p class="card-text">Avatar:The Way of Water is a 2022 American epic film directed and produced by James Cameron.</p>
                                <a href="seat_1.php">
                                    <span>Buy Ticket</span>
                                    <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="16" cy="16" r="15.5"></circle>
                                            <line x1="10" y1="18" x2="16" y2="12"></line>
                                            <line x1="16" y1="12" x2="22" y2="18"></line>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="card mb-4" style="width: 14rem;">
                            <img class="card-img-top" src="" alt="Drishyam 2">

                            <div class="card-body">
                                <h5 class="card-title">Drishyam 2</h5>
                                <p class="card-text">A sequel to their 2013 film Drishyam and the second installment to the series, the film stars Mohanlal, Meena, Ansiba Hassan, Esther Anil.</p>
                                <a href="seat_1.php">
                                    <span>Buy Ticket</span>
                                    <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="16" cy="16" r="15.5"></circle>
                                            <line x1="10" y1="18" x2="16" y2="12"></line>
                                            <line x1="16" y1="12" x2="22" y2="18"></line>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div> -->
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