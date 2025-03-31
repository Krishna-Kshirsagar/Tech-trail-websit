<!DOCTYPE html>
<html lang="en-US" class="js_active  vc_desktop  vc_transform  vc_transform">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head>
        <style>
            .custom-position {
                top: 20%;
                /* Moves the text 30% from the top */
                right: 10%;
                /* Moves the text 10% from the right */
                position: absolute;
                /* Ensures correct positioning */
            }

            .overlay-text {
                padding: 15px;
                border-radius: 10px;
            }

            .slick-slide {
                margin: 0px 20px;
            }

            .slick-slide img {
                width: 100%;
            }

            .slick-slider {
                position: relative;
                display: block;
                box-sizing: border-box;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                -webkit-touch-callout: none;
                -khtml-user-select: none;
                -ms-touch-action: pan-y;
                touch-action: pan-y;
                -webkit-tap-highlight-color: transparent;
            }

            .slick-list {
                position: relative;
                display: block;
                overflow: hidden;
                margin: 0;
                padding: 0;
            }

            .slick-list:focus {
                outline: none;
            }

            .slick-list.dragging {
                cursor: pointer;
                cursor: hand;
            }

            .slick-slider .slick-track,
            .slick-slider .slick-list {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            .slick-track {
                position: relative;
                top: 0;
                left: 0;
                display: block;
            }

            .slick-track:before,
            .slick-track:after {
                display: table;
                content: '';
            }

            .slick-track:after {
                clear: both;
            }

            .slick-loading .slick-track {
                visibility: hidden;
            }

            .slick-slide {
                display: none;
                float: left;
                height: 100%;
                min-height: 1px;
            }

            [dir='rtl'] .slick-slide {
                float: right;
            }

            .slick-slide img {
                display: block;
            }

            .slick-slide.slick-loading img {
                display: none;
            }

            .slick-slide.dragging img {
                pointer-events: none;
            }

            .slick-initialized .slick-slide {
                display: block;
            }

            .slick-loading .slick-slide {
                visibility: hidden;
            }

            .slick-vertical .slick-slide {
                display: block;
                height: auto;
                border: 1px solid transparent;
            }

            .slick-arrow.slick-hidden {
                display: none;
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="5 days">
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-138972828-1');
        </script>
        <title>Techtrail | Software companies in Mumbai | Software Development Services</title>
        <meta name="description" content="Techtrail is a leading software development company in Mumbai providing effective software development services to their clients as per their requirements. ">
        <meta name="keywords" content="Software development company, software development services, software companies in Mumbai">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="https://www.tech-trail.com/index.php">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Techtrail | Software companies in Mumbai | Software Development Services">
        <meta property="og:description" content="Techtrail is a leading software development company in Mumbai providing effective software development services to their clients as per their requirements. software companies in Mumbai">
        <meta property="og:url" content="https://www.tech-trail.com/index.php">
        <meta property="og:site_name" content="Techtrail | Software companies in Mumbai | Software Development Services">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:description" content="Techtrail is a leading software development company in Mumbai providing effective software development services to their clients as per their requirements. software companies in Mumbai">
        <meta name="twitter:title" content="Techtrail | Software companies in Mumbai | Software Development Services">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="lib/animate/animate.min.css" />
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

<body>
    <?php
    if (isset($_SESSION['success'])) {
        echo '<div class="alert alert-success">' . $_SESSION['success'] . '</div>';
        unset($_SESSION['success']);
    }
    if (isset($_SESSION['error'])) {
        echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
        unset($_SESSION['error']);
    }
    ?>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <!-- <div class="container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block">
        <div class="container">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <div class="border-end border-primary pe-3">
                            <a href="#" class="text-muted small"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                        </div>
                        <div class="ps-3">
                            <a href="mailto:example@gmail.com" class="text-muted small"><i class="fas fa-envelope text-primary me-2"></i>sales@tech-trail.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex justify-content-end">
                        <div class="d-flex">
                            <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="btn p-0 text-primary me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="dropdown ms-3">
                                <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i class="fas fa-globe-europe text-primary me-2"></i> English</small></a>
                                <div class="dropdown-menu rounded">
                                    <a href="#" class="dropdown-item">English</a>
                                    <a href="#" class="dropdown-item">Bangla</a>
                                    <a href="#" class="dropdown-item">French</a>
                                    <a href="#" class="dropdown-item">Spanish</a>
                                    <a href="#" class="dropdown-item">Arabic</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="https://www.tech-trail.com/index.php" class="navbar-brand p-0">
                    <!-- <h1 class="text-primary mb-0"><i class="fab fa-slack me-2"></i> LifeSure</h1> -->
                    <span><img src="img/logo.png" alt="Logo"></span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-0 mx-lg-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About us</a>
                        <a href="erp.php" class="nav-item nav-link">Services</a>
                        <a href="product.php" class="nav-item nav-link ">Products</a>
                        <a href="careers.php" class="nav-item nav-link">Careers</a>
                        <a href="contact.php" class="nav-item nav-link">Contact us</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Carousel Start -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/IT2.jpg" alt="TechTrail Technology" class="d-block" style="width:100%">
                <div class="overlay-text position-absolute custom-position text-white p-3" style="width: 30%;text-align: center">
                    <h3 class="display-6 mb-4" style="color: white;">Welcome to Techtrail</h3>
                    <p class="mb-0" style="text-align: center">TechTrail Technologies, a private limited company founded in 2014 and headquartered in
                        Pune, India, is committed to delivering cutting-edge enterprise software solutions tailored to
                        customer needs. Over the years, we have built a dynamic team of passionate professionals
                        dedicated to innovation, excellence, and reliability. With a strong foundation in expertise and
                        a track record of timely service, we ensure the delivery of high-quality software solutions that
                        are secure, scalable, and built to drive business success.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/IT image.jpg" alt="TechTrail Technology" class="d-block" style="width:100%">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <!-- <div class="header-carousel owl-carousel">
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container-fluid">
                    <img src="img/IT2.jpg"></img>
                    <div class="overlay-text position-absolute custom-position text-white p-3" style="width: 30%;">
                        <h3 class="display-6 mb-4" style="color: white;">Welcome to Techtrail</h3>
                        <p class="mb-0" style="text-align: center">TechTrail Technologies, a private limited company founded in 2014 and headquartered in
                            Pune, India, is committed to delivering cutting-edge enterprise software solutions tailored to
                            customer needs. Over the years, we have built a dynamic team of passionate professionals
                            dedicated to innovation, excellence, and reliability. With a strong foundation in expertise and
                            a track record of timely service, we ensure the delivery of high-quality software solutions that
                            are secure, scalable, and built to drive business success.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container-fluid pl-0 pr-0">
                    <img src="img/IT image.jpg"></img>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Carousel End -->


    <!-- Feature Start -->
    <div class="container-fluid feature pt-3 pb-3" d-flex style="background-color: lightblue;">
        <div class="container pt-2 pb-5" style="background-color: lightblue;">
            <div class="text-center mx-auto pb-3 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Features</h4>
                <h3 class="display-6 mb-4">What we do</h3>
                <!-- <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p> -->
            </div>
            <div class="row justify-content-center align-items-center g-3">
                <div class="col-md-4 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon p-4 mb-4">
                            <img class="fa fa-dollar-sign fa-3x" src="img/design.png" alt="design">
                        </div>
                        <h4 class="mb-4">SOFTWARE DEVELOPMENT SERVICES</h4>
                        <p>We understand and deliver the needed support.</p>
                        <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                        <ul>
                            <li>ERP Development</li>
                            <li>Custom Web Application</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon p-4 mb-4">
                            <img src="img/consulting.png" alt="consulting">
                        </div>
                        <h4 class="mb-4">CONSULTING</h4>
                        <p>We help organizations in consulting the right technology and development to optimize time and efficiency.</p>
                        <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                        <ul>
                            <li>Technology</li>
                            <li>Analytics &amp; BI</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon p-4 mb-4">
                            <img class="fa fa-dollar-sign fa-3x" src="img/development.png" alt="design">
                        </div>
                        <h4 class="mb-4">APPLICATION DEVELOPMENT</h4>
                        <p>We specialize in Android, iOS, Windows app development.</p>
                        <ul>
                            <li>Cloud Enabled Applications</li>
                            <li>Mobile App Development</li>
                        </ul>
                        <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                    </div>
                </div>
                <!-- <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fa fa-headphones fa-3x"></i>
                            </div>
                            <h4 class="mb-4">24/7 Fast Support</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea hic laborum odit pariatur...
                            </p>
                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
    <!-- Feature End -->
    <div class="outer-container" style="
    background-color: black;
    padding: 20px;
">
        <div class="container-fluid feature" style="
    background-image: url('img/Bulb-removebg.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: black;
    padding: 80px 0;
    width: 100%;
    min-height: 100vh;
    position: relative;
">
            <div class="overlay" style="
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    "></div>
            <div class="container position-relative">
                <!-- Heading Section -->
                <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h3 class="display-6 mb-4">Why to choose us</h3>
                </div>

                <!-- Grid Section -->
                <div class="row justify-content-center">
                    <!-- Left Column -->
                    <div class="col-md-4 mb-4">
                        <div class="feature-box text-center p-4 bg-white shadow-sm rounded-lg wow bounceInLeft mt-4" data-wow-delay="0.2s" style="border-radius: 10px;">
                            <div class="icon mb-3">
                                <img src="img/skill.png" alt="Expertise" class="img-fluid" style="max-width: 80px;">
                            </div>
                            <h3 class="title mb-3">Expertise</h3>
                            <p>Our founders bring 30+ years of expertise in software design and development, driving innovation, efficiency, and scalable solutions for businesses worldwide.</p>
                        </div>
                        <div class="feature-box text-center p-4 bg-white shadow-sm rounded-lg wow bounceInLeft mt-4" data-wow-delay="0.4s" style="border-radius: 10px;">
                            <div class="icon mb-3">
                                <img src="img/portfolio.png" alt="Professional Approach" class="img-fluid" style="max-width: 80px;">
                            </div>
                            <h3 class="title mb-3">Professional Approach</h3>
                            <p>Our strength lies in our systematic and professional approach to delivering a diverse range
                                of products and services across multiple domains. With a focus on quality, innovation, and
                                efficiency, we ensure solutions that meet industry standards and exceed customer
                                expectations.</p>
                        </div>
                    </div>
                    <!-- Delivery on Time Box -->
                    <!-- <div class="feature-box text-center p-4 bg-white shadow-sm rounded-lg wow bounceInLeft mt-4" data-wow-delay="0.6s">
                    <div class="icon mb-3">
                        <img src="img/delivery-on-time.png" alt="Delivery on Time" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <h3 class="title mb-3">Delivery on Time</h3>
                    <p>We respect our customer’s time and ensure all commitments are fulfilled within the agreed timeframe.</p>
                </div> -->
                    <!-- </div> -->

                    <!-- Center Column (Image) -->
                    <!-- <div class="col-md-4 mb-4 text-center">
                    <div class="wow bounceInUp" data-wow-delay="0.8s">
                        <img src="img/home15-mobile1.png" alt="Why Choose Us" class="img-fluid ">
                    </div>
                </div> -->
                    <!-- Empty Column for Space -->
                    <div class="col-md-4"></div>
                    <!-- Right Column -->
                    <div class="col-md-4 mb-4">
                        <div class="feature-box text-center p-4 bg-white shadow-sm rounded-lg wow bounceInRight mt-4" data-wow-delay="0.2s" style="border-radius: 10px;">
                            <div class="icon mb-3">
                                <img src="img/new-idea.png" alt="Innovation" class="img-fluid" style="max-width: 80px;">
                            </div>
                            <h3 class="title mb-3">Delivery on time</h3>
                            <p>We respect our customers' time and deliver with precision and reliability, ensuring every project meets expectations and is completed within the agreed timeframe.</p>
                        </div>
                        <div class="feature-box text-center p-4 bg-white shadow-sm rounded-lg wow bounceInRight mt-4" data-wow-delay="0.4s" style="border-radius: 10px;">
                            <div class="icon mb-3">
                                <img src="img/customer.png" alt="Customer-centric Approach" class="img-fluid" style="max-width: 80px;">
                            </div>
                            <h3 class="title mb-3">Customer-centric Approach</h3>
                            <p>Our success is driven by our commitment to creating exceptional customer experiences. We
                                believe that understanding real-world challenges is the key to delivering effective, innovative
                                software solutions that make a meaningful impact.</p>
                        </div>
                    </div>
                    <!-- Agile Method Box -->
                    <!-- <div class="feature-box text-center p-4 bg-white shadow-sm rounded-lg wow bounceInRight mt-4" data-wow-delay="0.6s">
                        <div class="icon mb-3">
                        <img src="img/road-perspective.png" alt="Agile Method" class="img-fluid" style="max-width: 80px;">
                        </div>
                        <h3 class="title mb-3">Agile Method</h3>
                        <p>Our agile method involves clients in our development lifecycle, ensuring better results and satisfaction.</p>
                        </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- About Start -->
    <!-- <div class="container-fluid bg-light about pb-5">
        <div class="container pb-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-item-content bg-white rounded p-5 h-100">
                        <h4 class="text-primary">ABOUT TECHTRAIL</h4>
                        <h1 class="display-4 mb-4">High Range of Exploring</h1>
                        <p>TechTrail Technologies is a private limited company established in 2014 and headquartered in Pune, India. Since its inception, the company has been committed to providing high-quality software solutions and has become a trusted name in the industry.
                        </p>
                        <p>The company has successfully built a team of passionate individuals who are dedicated to delivering enterprise software solutions that are carefully aligned with customer needs. This team works tirelessly to ensure that each project meets the highest standards.
                        </p>
                        <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>We can save your money.</p>
                        <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Production or trading of good</p>
                        <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Our life insurance is flexible</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Information</a>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-white rounded p-5 h-100">
                        <div class="row g-4 justify-content-center">
                            <div class="col-12">
                                <div class="rounded bg-light">
                                    <img src="img/about-1.png" class="img-fluid rounded w-100" alt="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">129</span>
                                        <span class="h1 fw-bold text-primary">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Insurance Policies</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">99</span>
                                        <span class="h1 fw-bold text-primary">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Awards WON</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">556</span>
                                        <span class="h1 fw-bold text-primary">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Skilled Agents</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">967</span>
                                        <span class="h1 fw-bold text-primary">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Team Members</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-fluid service" style="background-color: var(--bs-dark);">
        <div class="container-fluid pt-3 pb-3">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Services</h4>
                <h3 class="display-6 mb-4" style="color:white">We Provide Best Services</h3>
                <!-- <h1 class="display-4 mb-4">We Provide Best Services</h1> -->
                <p class="mb-0" style="color:white">At TechTrail Technology, we offer a wide range of innovative services tailored to help businesses thrive in the digital era. Our Enterprise Resource Planning (ERP) solutions streamline operations, ensuring seamless integration of business functions for enhanced efficiency and scalability. With Technology Consulting, we help businesses choose the right tech stack, balancing innovation and efficiency for future-ready solutions. Our Mobile Application Development services create fast, user-friendly, and scalable apps that keep your business at your customers' fingertips. We specialize in Web Development, building responsive, high-performance websites that enhance credibility and drive engagement. Additionally, our Analytics & Business Intelligence (BI) solutions transform raw data into actionable insights, empowering businesses to make informed decisions with confidence. At TechTrail, we are committed to delivering excellence through cutting-edge technology and strategic innovation.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-2 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/erp.jpeg" class="img-fluid rounded-top w-100" alt="" style="height: 200px; object-fit: cover;">
                            <div class="service-icon p-3">
                                <i class="fa fa-users fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="erp.php" class="d-inline-block h4 mb-4">ERP Applications</a>
                                <p class="mb-4">An ERP system seamlessly streamlines business operations, ensuring efficiency and growth.</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="erp.php">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/consult.jpeg" class="img-fluid rounded-top w-100" alt="" style="height: 200px; object-fit: cover;">
                            <div class="service-icon p-3">
                                <i class="fa fa-hospital fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="technology.php" class="d-inline-block h4 mb-4">Technology Consulting</a>
                                <p class="mb-4">TechTrail helps you choose the right tech for smart, efficient, future-ready solutions.</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="technology.php">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/appdev.jpeg" class="img-fluid rounded-top w-100" alt="" style="height: 200px; object-fit: cover;">
                            <div class="service-icon p-3">
                                <i class="fa fa-car fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="mobiledev.php" class="d-inline-block h4 mb-4">Mobile Application Development</a>
                                <p class="mb-4">Our mobile apps are fast, user-friendly, and scalable for seamless customer access.</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="mobiledev.php">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/web.jpeg" class="img-fluid rounded-top w-100" alt="" style="height: 200px; object-fit: cover;">
                            <div class="service-icon p-3">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="webdev.php" class="d-inline-block h4 mb-4">Web Development</a>
                                <p class="mb-4">A strong website boosts engagement, credibility, and converts visitors into customers.</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="webdev.php">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/bi.jpeg" class="img-fluid rounded-top " alt="Image Description" style="height: 200px; object-fit: cover;">

                            <div class="service-icon p-3">
                                <i class="fa fa-users fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="analytics.php" class="d-inline-block h4 mb-4">Analytics &amp; BI</a>
                                <p class="mb-4">Analytics and BI turn raw data into actionable insights, driving smart decisions and sustainable growth.</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="analytics.php">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- FAQs Start -->
    <!-- <div class="container-fluid faq-section bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="h-100">
                        <div class="mb-5">
                            <h4 class="text-primary">Some Important FAQ's</h4>
                            <h1 class="display-4 mb-0">Common Frequently Asked Questions</h1>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Q: What happens during Freshers' Week?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show active" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body rounded">
                                        A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Q: What is the transfer application process?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Q: Why should I attend community college?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                    <img src="img/carousel-2.png" class="img-fluid w-100" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- FAQs End -->

    <!-- Blog Start -->
    <!-- <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">From Blog</h4>
                <h1 class="display-4 mb-4">News And Updates</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-1.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="blog-categiry py-2 px-4">
                                <span>Business</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025</div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Which allows you to pay down insurance bills</a>
                            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href="#" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-2.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="blog-categiry py-2 px-4">
                                <span>Business</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025</div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Leverage agile frameworks to provide</a>
                            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href="#" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-3.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="blog-categiry py-2 px-4">
                                <span>Business</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 30 Dec 2025</div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span> 6 Comments</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Leverage agile frameworks to provide</a>
                            <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                            <a href="#" class="btn p-0">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Blog End -->

    <!-- Team Start -->
    <!-- <div class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Team</h4>
                <h1 class="display-4 mb-4">Meet Our Expert Team Members</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-1.jpg" class="img-fluid rounded-top w-100" alt="">
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-title p-4">
                            <h4 class="mb-0">David James</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-2.jpg" class="img-fluid rounded-top w-100" alt="">
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-title p-4">
                            <h4 class="mb-0">David James</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-3.jpg" class="img-fluid rounded-top w-100" alt="">
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-title p-4">
                            <h4 class="mb-0">David James</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-4.jpg" class="img-fluid rounded-top w-100" alt="">
                            <div class="team-icon">
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-pill mb-0" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-title p-4">
                            <h4 class="mb-0">David James</h4>
                            <p class="mb-0">Profession</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial pt-4 pb-3" style="background-color: lightblue;">
        <div class="container pb-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Testimonial</h4>
                <h3 class="display-6 mb-4">What Our Customers Are Saying</h3>
                <!-- <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                </p> -->
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                <!-- <div class="testimonial-item bg-light rounded border shadow-sm">
                    <div class="row g-0">
                        <div class="col-6 col-lg-6 col-xl-6">
                            <div class="h-100">
                                <img src="img/testimonial-1.jpg" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-xl-9">
                            <div class="d-flex flex-column my-auto text-start p-4">
                                <h4 class="text-dark mb-0">Ajay</h4>
                                <p class="mb-3">cargotiator.com</p>
                                <div class="d-flex text-primary mb-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="mb-0">"I was looking for a development partner earlier this year and was thrilled to find that Pankaj had started his own consulting company. After months of design and development, we successfully launched www.cargotiator.com in July, with excellent results. I highly recommend Pankaj and Tech-Trail as a development partner. Thanks!"</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="testimonial-item bg-light rounded border shadow-sm">
                    <div class="testimonial-content p-4">
                        <div class="testimonial-grid">
                            <div class="testimonial-info">
                                <div class="header-grid" style="
                                    display: grid;
                                    grid-template-columns: 1fr auto;
                                    gap: 1rem;
                                    align-items: center;
                                    margin-bottom: 1rem;
                                ">
                                    <div>
                                        <h4 class="text-dark mb-0">Ajay</h4>
                                        <p class="mb-3">cargotiator.com</p>
                                    </div>
                                    <div style="
                        display: flex;
                        justify-content: flex-end;
                        align-items: center;
                        width: 150px;
                    ">
                                        <img src="img/partner_logo-31.png" alt="Partner Logo" style="
                            width: 100%;
                            height: auto;
                            object-fit: contain;
                        ">
                                    </div>
                                </div>

                                <div class="d-flex text-primary mb-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star "></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>

                                <p class="mb-0">"I was looking for a development partner earlier this year and was thrilled to find that Pankaj had started his own consulting company. After months of design and development, we successfully launched www.cargotiator.com in July, with excellent results. I highly recommend Pankaj and Tech-Trail as a development partner. Thanks!"</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="testimonial-item bg-light rounded border shadow-sm">
                    <div class="row g-0">
                        <div class="col-6  col-lg-6 col-xl-6">
                            <div class="h-100">
                                <img src="img/testimonial-2.jpg" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                            </div>
                        </div>
                        <div class="col-8 col-lg-8 col-xl-9">
                            <div class="d-flex flex-column my-auto text-start p-4">
                                <h4 class="text-dark mb-0">Amit Jain</h4>
                                <p class="mb-3">Managing Partner &amp; Co-founder at StartupBay</p>
                                <div class="d-flex text-primary mb-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                                <p class="mb-0">"We needed a team that could think like an insider to develop the StartupBay website, and TechTrail was the ideal choice. Their team brought together creativity, technical expertise, and maintained active engagement throughout the development process. Their dedication and seamless collaboration ensured a successful project outcome."
                                </p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="testimonial-item bg-light rounded border shadow-sm">
                    <div class="testimonial-content p-4">
                        <div class="testimonial-grid">
                            <div class="testimonial-info">
                                <div class="header-grid" style="
                                    display: grid;
                                    grid-template-columns: 1fr auto;
                                    gap: 1rem;
                                    align-items: center;
                                    margin-bottom: 1rem;
                                ">
                                    <div>
                                        <h4 class="text-dark mb-0">Amit Jain</h4>
                                        <p class="mb-3">Managing Partner &amp; Co-founder at StartupBay</p>
                                    </div>
                                    <div style="
                        display: flex;
                        justify-content: flex-end;
                        align-items: center;
                        width: 150px;
                    ">
                                        <img src="img/partner_logo-61.png" alt="Partner Logo" style="
                            width: 100%;
                            height: auto;
                            object-fit: contain;
                        ">
                                    </div>
                                </div>

                                <div class="d-flex text-primary mb-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>

                                <p class="mb-0">"We needed a team that could think like an insider to develop the StartupBay website, and TechTrail was the ideal choice. Their team brought together creativity, technical expertise, and maintained active engagement throughout the development process. Their dedication and seamless collaboration ensured a successful project outcome."</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded border shadow-sm">
                    <div class="testimonial-content p-4">
                        <div class="testimonial-grid">
                            <div class="testimonial-info">
                                <div class="header-grid" style="
                                    display: grid;
                                    grid-template-columns: 1fr auto;
                                    gap: 1rem;
                                    align-items: center;
                                    margin-bottom: 1rem;
                                ">
                                    <div>
                                        <h4 class="text-dark mb-0">Bhagyashree Sailwal</h4>
                                        <p class="mb-3">Manager (Marketing & Operations) at www.jopasu.com</p>
                                    </div>
                                    <div style="
                        display: flex;
                        justify-content: flex-end;
                        align-items: center;
                        width: 150px;
                    ">
                                        <img src="img/partner_logo-71.png" alt="Partner Logo" style="
                            width: 100%;
                            height: auto;
                            object-fit: contain;
                        ">
                                    </div>
                                </div>

                                <div class="d-flex text-primary mb-3">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>

                                <p class="mb-0">"TechTrail has proven to be a professional mobile app developer and service provider from the beginning. Their proactive approach, technical expertise, and attention to detail stood out. They provided valuable suggestions to improve our solution both architecturally and functionally."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <div class="container-fluid">
        <div class="container pt-2 pb-2" style="text-align: center;background-color:white">
            <h3 class="display-6 mb-4">Our Partners</h3>
            <section class="customer-logos slider">
                <div class="slide"><img src="img/partner_logo-21.png" alt="Tech-Trail"></div>
                <div class="slide"><img src="img/partner_logo-31.png" alt="Tech-Trail"></div>
                <div class="slide"><img src="img/partner_logo-71.png" alt="Tech-Trail"></div>
                <div class="slide"><img src="img/partner_logo-61.png" alt="Tech-Trail"></div>
                <div class="slide"><img src="img/partner_logo-51.png" alt="Tech-Trail"></div>
                <div class="slide"><img src="img/partner_logo-41.png" alt="Tech-Trail"></div>
                <!-- <div class="slide"><img src="img/partner_logo-21.png" alt="Tech-Trail"></div> -->
            </section>
        </div>
    </div>
    <!-- Footer Start -->
    <div class="container-fluid footer wow fadeIn" data-wow-delay="0.2s">
        <div class="row ">
            <div class="col-md-4 col-lg-4 pt-4">
                <div class="footer-item" style="padding-left: 30px;">
                    <h4 class="text-white mb-4">Useful Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="index.php"><i class="fas fa-angle-right me-2"></i> Home</a></li>
                        <li><a href="about.php"><i class="fas fa-angle-right me-2"></i> About Us</a></li>
                        <li><a href="erp.php"><i class="fas fa-angle-right me-2"></i> Services</a></li>
                        <li><a href="product.php"><i class="fas fa-angle-right me-2"></i> Products</a></li>
                        <li><a href="careers.php"><i class="fas fa-angle-right me-2"></i> Careers</a></li>
                        <li><a href="contact.php"><i class="fas fa-angle-right me-2"></i> Contact</a></li>
                    </ul>
                </div>
            </div>

            <!-- Useful Links -->
            <div class="col-md-4 col-lg-4 pt-4">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Services</h4>
                    <ul class="list-unstyled">
                        <li><a href="erp.php"><i class="fas fa-angle-right me-2"></i> ERP Applications</a></li>
                        <li><a href="technology.php"><i class="fas fa-angle-right me-2"></i> Technology Consulting</a></li>
                        <li><a href="mobiledev.php"><i class="fas fa-angle-right me-2"></i> Mobile Application Development</a></li>
                        <li><a href="webdev.php"><i class="fas fa-angle-right me-2"></i> Web Development</a></li>
                        <li><a href="analytics.php"><i class="fas fa-angle-right me-2"></i> Analytics & BI</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-md-4 col-lg-4 pt-4 pb-2">
                <div class="footer-item">
                    <div class="d-flex  mb-3">
                        <div class="btn-xl-square bg-primary text-white rounded p-3 me-3">
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                        </div>
                        <div>
                            <p style="text-align:left">204, Rajvilas Heights, Near Aditya Shagun Mall, Bavdhan, Pune 411021, India.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="btn-xl-square bg-primary text-white rounded p-3 me-3">
                            <i class="fas fa-envelope fa-2x"></i>
                        </div>
                        <div>
                            <p class="mb-0">sales@tech-trail.com</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="btn-xl-square bg-primary text-white rounded p-3 me-3">
                            <i class="fa fa-phone-alt fa-2x"></i>
                        </div>
                        <div>
                            <p class="mb-0">+91 9325529914</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-end mb-md-0">
                    <span class="text-body"><a href="https://www.tech-trail.com/" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>TechTrail</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-start text-body">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Design and Developed by <a href="">Nikhil Satpute</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>