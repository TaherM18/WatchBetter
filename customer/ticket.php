<?php

include("auth_session.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Watch Better</title>
    <script src="https://fonts.googleapis.com/css?family=Montserrat&display=swap"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"></script>

    <!-- CSS FILES -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
                
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-festava-live.css" rel="stylesheet">    <style>
        body {
            font-family: "Montserrat", sans-serif;
            min-height: 100vh;
            align-items: center;
            justify-content: center;
            flex-direction: column;
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
            justify-content: center;
            align-items: center;
        }

        .seat {
            background-color: #444451;
            height: 12px;
            width: 15px;
            margin: 3px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .selected {
            background-color: #00802b;
        }

        .occupied {
            background-color: #cc0000;
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

        .seat:not(.occupied):hover {
            cursor: pointer;
            transform: scale(1.2);
        }

        .showcase .seat:not(.occupied):hover {
            cursor: default;
            transform: scale(1);
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
            background: #80aaff;
            transform: rotateX(-45deg);
            box-shadow: 0 3px 10px rgba(255, 255, 255, 0.7);
        }

        p.text {
            margin: 40px 0;
        }

        p.text span {
            color: #80aaff;
            font-weight: 600;
            box-sizing: content-box;
        }

        .credits a {
            color: #fff;
        }
    </style>
</head>

<body>

    <main>
        <header class="site-header">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-12 col-12 d-flex flex-wrap">
                            <p class="d-flex me-4 mb-0">
                                <i class="bi-person custom-icon me-2"></i>
                                <strong class="text-dark">Welcome to Watch Better</strong>
                            </p>
                        </div>

                    </div>
                </div>
        </header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="Home.php">
                    <img src="" class="navbar-brand-image img-fluid">
                    <span class="navbar-brand-text">
                        Watch Better
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Movies</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Schedule</a>
                        </li>
                        <!-- 
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Pricing</a>
                        </li> -->

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_6">Contact</a>
                        </li>
                              <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn custom-btn custom-border-btn text-light" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['custname']; ?></a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li class="dropdown-header">
                                    <h6>
                                        <img src="" width="40px" height="40px" alt="Profile" class="rounded-circle"><?php echo $_SESSION['custname']; ?>
                                    </h6>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                                        <i class="bi bi-person"></i>&emsp;
                                        <span>My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                                        <i class="bi bi-gear"></i>&emsp;
                                        <span>Account Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="pages-faq.php">
                                        <i class="bi bi-question-circle"></i>&emsp;
                                        <span>Need Help?</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="logout.php">
                                        <i class="bi bi-box-arrow-right"></i>&emsp;
                                        <span>Sign Out</span>
                                    </a>
                                </li>

                            </ul><!-- End Profile Dropdown Items -->
                        </li><!-- End Profile Nav -->
                    </ul>
                </div>
            </div>
        </nav>
        <section class="ticket-section section-padding">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-10 mx-auto">
                        <form class="custom-form ticket-form mb-5 mb-lg-0" action="#" method="post" role="form">
                            <h2 class="text-center mb-4">Seat Form</h2>
                            <br>
                            <div class="ticket-form-body">
                                <!-- <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="ticket-form-name" id="ticket-form-name"
                                            class="form-control" placeholder="Full name" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="email" name="ticket-form-email" id="ticket-form-email"
                                            pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address"
                                            required>
                                    </div>
                                </div>

                                <input type="tel" class="form-control" name="ticket-form-phone"
                                    placeholder="Ph 085-456-7890" pattern="[0-9]{10}" required=""> -->

                                <h6>Select Seats</h6><br>
                                <div class="movie-container">
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
                                        You have selected <span id="count">0</span> seats for the total price of Rs.
                                        <span id="total">0</span>
                                    </p>
                                </div>
                            </div>

                            <!-- 
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-check form-control">
                                            <input class="form-check-input" type="radio" name="TicketForm" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Silver Rs. 120
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-check form-check-radio form-control">
                                            <input class="form-check-input" type="radio" name="TicketForm" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Standard $240
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <input type="number" name="ticket-form-number" id="ticket-form-number" class="form-control" placeholder="Number of Tickets" required>

                                <textarea name="ticket-form-message" rows="3" class="form-control" id="ticket-form-message" placeholder="Additional Request"></textarea> -->

                            <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                <a href="cpayment.php" type="submit"
                                    class="form-control btn btn-warning text-white">Book Tickets</a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="site-footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="text-white mb-lg-0">Watch Better</h2>
                    </div>

                    <div class="col-lg-6 col-12 d-flex justify-content-lg-end align-items-center">
                        <ul class="social-icon d-flex justify-content-lg-end">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-whatsapp"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-facebook"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-4 pb-2">
                    <h5 class="site-footer-title mb-3">Links</h5>

                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Home</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">About</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Movies</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Schedule</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Pricing</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <h5 class="site-footer-title mb-3">Have a question?</h5>

                    <p class="text-white d-flex mb-1">
                        <a href="tel: +91 87994 78161" class="site-footer-link">
                            +91 87994 78161
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <a href="mailto:bhalodiyazeenal@gmail.com" class="site-footer-link">
                            bhalodiyazeenal@gmail.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                    <h5 class="site-footer-title mb-3">Location</h5>

                    <p class="text-white d-flex mt-3 mb-2">
                        Varachha,Suart,Gujarat</p>

                    <!-- <a class="link-fx-1 color-contrast-higher mt-3" href="#">
                        <span>Our Maps</span>
                        <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="16" cy="16" r="15.5"></circle>
                                <line x1="10" y1="18" x2="16" y2="12"></line>
                                <line x1="16" y1="12" x2="22" y2="18"></line>
                            </g>
                        </svg>
                    </a> -->
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 mt-lg-5">
                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Terms &amp; Conditions</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Privacy Policy</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Your Feedback</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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