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

    <!-- CSS FILES -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
                
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-festava-live.css" rel="stylesheet">
        
    <!--
 Watch Better

https://templatemo.com/tm-583-festava-live


-->
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

        <section class="hero-section" id="section_1">
            <div class="section-overlay"></div>

            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">

                    <div class="col-12 mt-auto mb-5 text-center">
                        <small>Watch Better Presents</small>

                        <h1 class="text-white mb-5">Watch Better</h1>

                        <a class="btn custom-btn smoothscroll" href="#section_2">Let's begin</a>
                    </div>

                    <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">

                        <!-- <div class="location-wrap mx-auto py-3 py-lg-0">
                            <h5 class="text-white">
                                <i class="custom-icon bi-geo-alt me-2"></i>
                                PVR Center, India
                            </h5>
                        </div> -->

                        <div class="social-share">
                            <ul class="social-icon d-flex align-items-center justify-content-center">
                                <span class="text-white me-3">Share:</span>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-facebook"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-whatsapp"></span>
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

            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="video/pexels-2022395.mp4" type="video/mp4">
                </video>
            </div>
        </section>


        <section class="about-section section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                        <div class="services-info">
                            <h2 class="text-white mb-4">About Watch Better</h2>

                            <p class="text-white">Located on the picturesque terrace,Cinema brings you to the heart of Surat. This cinema experience is the perfect way to enjoy a cult-classic under the stars.

                                We are the only cinema experience in Surat that lets you bring your own food & beverages! So pack your picnic baskets with you order in from cinema food center while you are at the screening.</p>

                            <h6 class="text-white mt-4">Once Experience</h6>

                            <p class="text-white">Well, watching a movie in a totally deserted theatre, seated apart from your family, is surely an unusual experience.</p>

                            <h6 class="text-white mt-4">Whole Mornning & Night Watch Better </h6>

                            <p class="text-white">Please tell your friends about our website. Thank you.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="about-text-wrap">
                            <img src="https://boxofficeworldwide.com/wp-content/uploads/2023/04/maxresdefault.jpg" class="about-image img-fluid">

                            <div class="about-text-info d-flex">
                                <div class="d-flex">
                                    <i class="about-text-icon bi-person"></i>
                                </div>


                                <div class="ms-4">
                                    <h3>Watch Better</h3>

                                    <p class="mb-0">your amazing Watch Better experience with us</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="artists-section section-padding" id="section_3">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-12">
                        <div class="col-6">
                            <h2 class="mb-4">Latest Releases </h2>
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

                    <div class="col-lg-3 col-12">
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
                            <img class="card-img-top" src="data:image/jpeg;base64,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" alt="Drishyam 2">
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

                        <!-- <div class="card mb-4" style="width: 15rem;">
                            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/c/c3/Pathaan_film_poster.jpg" alt="Pathan">
                            <div class="card-body">
                                <h5 class="card-title">Pathaan</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="ticket.php">
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
                        </div> -->
                    </div>

                    <div class="col-lg-3 col-12">
                        <div class="card mb-4" style="width: 14rem;">
                            <img class="card-img-top" src="data:image/jpeg;base64,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" alt="Pathan">
                            <div class="card-body">
                                <h5 class="card-title">Bhool Bhulaiya 2</h5>
                                <p class="card-text">A standalone sequel to Bhool Bhulaiyaa (2007), the film stars Tabu, Kartik Aaryan, and Kiara Advani. </p>
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
                            <img class="card-img-top" src="https://th.bing.com/th/id/OIP.z9-TdVP9O3b4aR5PDCK1RgAAAA?w=125&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="Pathan">
                            <div class="card-body">
                                <h5 class="card-title">Brahmastra</h5>
                                <p class="card-text"> Shiva is a 2022 Indian fantasy action-adventure film written and directed by Ayan Mukerji and produced by Karan Johar</p>
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

                        <!-- <div class="card mb-4" style="width: 15rem;">
                            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/c/c3/Pathaan_film_poster.jpg" alt="Pathan">
                            <div class="card-body">
                                <h5 class="card-title">Pathaan</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="ticket.php">
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
                        </div> -->
                    </div>

                    <div class="col-lg-3 col-12">
                        <div class="card mb-4" style="width: 14rem;">
                            <img class="card-img-top" src="https://assets.gadgets360cdn.com/pricee/assets/product/202203/Bhediya-poster_1648053259.jpg" alt="Pathan">
                            <div class="card-body">
                                <h5 class="card-title">Bhediya</h5>
                                <p class="card-text">Bhediya (transl. Wolf) is a 2022 Indian Hindi-language comedy horror film directed by Amar Kaushik</p>
<a href="seat_1.php?name=Bhediya&conno=8799478161&cname=Zeenal Bhalodiya&seats=3">
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
                            <img class="card-img-top" src="data:image/jpeg;base64,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" alt="Pathan">
                            <div class="card-body">
                                <h5 class="card-title">Adipurush</h5>
                                <p class="card-text">Adipurush is an hindi-language movie and upcoming Indian mythological film based on the Sanskrit epic Ramayana.</p>
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

                        <!-- <div class="card mb-4" style="width: 15rem;">
                            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/c/c3/Pathaan_film_poster.jpg" alt="Pathan">
                            <div class="card-body">
                                <h5 class="card-title">Pathaan</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="ticket.php">
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
                        </div> -->
                    </div>

                    <div class="col-lg-3 col-12">
                        <div class="card mb-4" style="width: 14rem;">
                            <img class="card-img-top" src="https://th.bing.com/th/id/R.a1dcfc323f25b9d9c6fe3680d71612ad?rik=Bv8bRnx0ldq3jw&riu=http%3a%2f%2fmedia.kellermandesign.com%2f2018%2f01%2fThe-Circus-1928-Charlie-Chaplin-theatrical-onesheet-eng.jpg&ehk=SULhcJM%2f0xusXDIPD1EfIc6eTBXpH2v3ME9qMe2w%2b%2bk%3d&risl=&pid=ImgRaw&r=0" alt="Pathan">
                            <div class="card-body">
                                <h5 class="card-title">Circus</h5>
                                <p class="card-text">Cirkus is a 2022 Indian Hindi-language period comedy film directed and produced by Rohit Shetty.</p>
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

                        <div class="card mb-4" style="width: 15rem;">
                            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/c/c3/Pathaan_film_poster.jpg" alt="Pathan">
                            <div class="card-body">
                                <h5 class="card-title">Pathaan</h5>
                                <p class="card-text">Pathaan is an action thriller film and hindi scripting,directed by Siddharth Anand from a story by Anand.</p>
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

                        <!-- <div class="card mb-4" style="width: 15rem;">
                            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/c/c3/Pathaan_film_poster.jpg" alt="Pathan">
                            <div class="card-body">
                                <h5 class="card-title">Pathaan</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="ticket.php">
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
                        </div> -->
                    </div>

        </section>

        <section class="schedule-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-12 text-center" background-color="light">
                        <h2 class="text-white mb-4">Movies Schedule</h1>

                            <div class="table-responsive">
                                <table class="schedule-table table table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">Days</th>

                                            <th scope="col">Sunday</th>

                                            <th scope="col">Monday</th>

                                            <th scope="col">Tuesday</th>

                                            <th scope="col">Wednesday</th>

                                            <th scope="col">Thrusday</th>

                                            <th scope="col">Friday</th>

                                            <th scope="col">Satuday</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <th><h3>Sunday</h3></th>

                                            <td>
                                                <h3>Brahmastra</h3>

                                                <p class="mb-2">5:00 - 7:00 PM</p>

                                                <div class="section-overlay"></div>
                                            </td>

                                            <td style="background-color: #F3DCD4"></td>

                                            <td>
                                                <h3>Drishyam 2</h3>

                                                <p class="mb-2">7:00 - 11:00 PM</p>

                                                <div class="section-overlay"></div>
                                            </td>
                                        </tr>

                                        <!-- <tr>
                                            <th scope="row">Monday</th>

                                            <td style="background-color: #ECC9C7"></td>

                                            <td>
                                                <h3>Bhool Bhulaiya 2</h3>

                                                <p class="mb-2">6:30 - 9:30 PM</p>
                                            </td>

                                            <td style="background-color: #D9E3DA"></td>
                                        </tr>

                                        
                                        <tr>
                                            <th scope="row">Tuesday</th>

                                            <td style="background-color: #ECC9C7"></td>

                                            <td>
                                                <h3>Bhool Bhulaiya 2</h3>

                                                <p class="mb-2">6:30 - 9:30 PM</p>
                                            </td>

                                            <td style="background-color: #D9E3DA"></td>
                                        </tr> --> 

                                        <!-- <tr>
                                            <th scope="row">Wednesday</th>

                                            <td>
                                                <h3>Avtaar 2</h3>

                                                <p class="mb-2">4:30 - 7:30 PM</p>
                                                <div class="section-overlay"></div>
                                            </td>

                                            <td style="background-color: #D1CFC0"></td>

                                            <td>
                                                <h3>Pathan</h3>

                                                <p class="mb-2">6:00 - 10:00 PM</p>

                                            </td>
                                        </tr> -->
                                        <!-- <tr>
                                            <th scope="row">Thrusday</th>

                                            <td>
                                                <h3>Brahmastra</h3>

                                                <p class="mb-2">5:00 - 7:00 PM</p>

                                                <div class="section-overlay"></div>
                                            </td>

                                            <td style="background-color: #F3DCD4"></td>

                                            <td>
                                                <h3>Drishyam 2</h3>

                                                <p class="mb-2">7:00 - 11:00 PM</p>

                                                <div class="section-overlay"></div>
                                            </td>
                                        </tr> -->

                                        <tr>
                                            <th scope="row">Friday</th>

                                            <td style="background-color: #ECC9C7"></td>

                                            <td>
                                                <h3>Bhool Bhulaiya 2</h3>

                                                <p class="mb-2">6:30 - 9:30 PM</p>
                                            </td>

                                            <td style="background-color: #D9E3DA"></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Saturday 1</th>

                                            <td>
                                                <h3>Brahmastra</h3>

                                                <p class="mb-2">5:00 - 7:00 PM</p>

                                                <div class="section-overlay"></div>
                                            </td>

                                            <td style="background-color: #F3DCD4"></td>

                                            <td>
                                                <h3>Drishyam 2</h3>

                                                <p class="mb-2">7:00 - 11:00 PM</p>

                                                <div class="section-overlay"></div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- <section class="pricing-section section-padding section-bg" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 mx-auto">
                        <h2 class="text-center mb-4">Top Movies Ticket Booking </h2>
                    </div>


                    <div class="col-lg-3 col-12">
                        <div class="card mb-4" style="width: 15rem;">
                            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/c/c3/Pathaan_film_poster.jpg" alt="Pathan">
                            <div class="card-body">
                                <h5 class="card-title">Pathaan</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="ticket.php">
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
                    </div>

                    <div class="col-lg-3 col-12">
                        <div class="card mb-4" style="width: 15rem;">
                            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/c/c3/Pathaan_film_poster.jpg" alt="Pathan">
                            <div class="card-body">
                                <h5 class="card-title">Pathaan</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="ticket.php">
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
                    </div>

                    <div class="col-lg-3 col-12">
                        <div class="card mb-4" style="width: 15rem;">
                            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/c/c3/Pathaan_film_poster.jpg" alt="Pathan">
                            <div class="card-body">
                                <h5 class="card-title">Pathaan</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="ticket.php">
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
                    </div>

                    <div class="col-lg-3 col-12">
                        <div class="card mb-4" style="width: 15rem;">
                            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/c/c3/Pathaan_film_poster.jpg" alt="Pathan">
                            <div class="card-body">
                                <h5 class="card-title">Pathaan</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="ticket.php">
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
                    </div>
                </div>
            </div>
        </section>  -->


        <section class="contact-section section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-center mb-4">Any Problem? Let's talk</h2>

                        <nav class="d-flex justify-content-center">
                            <div class="nav nav-tabs align-items-baseline justify-content-center" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-ContactForm-tab" data-bs-toggle="tab" data-bs-target="#nav-ContactForm" type="button" role="tab" aria-controls="nav-ContactForm" aria-selected="false">
                                    <h5>Contact Form</h5>
                                </button>

                                <button class="nav-link" id="nav-ContactMap-tab" data-bs-toggle="tab" data-bs-target="#nav-ContactMap" type="button" role="tab" aria-controls="nav-ContactMap" aria-selected="false">
                                    <h5>Google Maps</h5>
                                </button>
                            </div>
                        </nav>

                        <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel" aria-labelledby="nav-ContactForm-tab">
                                <form class="custom-form contact-form mb-5 mb-lg-0" action="#" method="post" role="form">
                                    <div class="contact-form-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="text" name="contact-name" id="contact-name" class="form-control" placeholder="Full name" required>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-12">
                                                <input type="email" name="contact-email" id="contact-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                                            </div>
                                        </div>


                                        <textarea name="contact-message" rows="5" class="form-control" id="contact-message" placeholder="Message"></textarea>

                                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                            <button type="submit" class="form-control">Send message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="nav-ContactMap" role="tabpanel" aria-labelledby="nav-ContactMap-tab">
                                <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29974.469402870927!2d120.94861466021855!3d14.106066818082482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd777b1ab54c8f%3A0x6ecc514451ce2be8!2sTagaytay%2C%20Cavite%2C%20Philippines!5e1!3m2!1sen!2smy!4v1670344209509!5m2!1sen!2smy" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <!-- You can easily copy the embed code from Google Maps -> Share -> Embed a map // -->
                            </div>
                        </div>
                    </div>

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

                        <!-- <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Pricing</a>
                        </li> -->

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

                    <a class="link-fx-1 color-contrast-higher mt-3" href="#">
                        <span>Our Maps</span>
                        <svg class="icon" class="nav-link" id="nav-ContactMap-tab" data-bs-toggle="tab" data-bs-target="#nav-ContactMap" viewBox="0 0 32 32" aria-hidden="true">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="16" cy="16" r="15.5"></circle>
                                <line x1="10" y1="18" x2="16" y2="12"></line>
                                <line x1="16" y1="12" x2="22" y2="18"></line>
                            </g>
                        </svg>
                    </a>
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