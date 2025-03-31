<!DOCTYPE html>
<html lang="en-US" class="js_active  vc_desktop  vc_transform  vc_transform">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="origin-trial" content="A/kargTFyk8MR5ueravczef/wIlTkbVk1qXQesp39nV+xNECPdLBVeYffxrM8TmZT6RArWGQVCJ0LRivD7glcAUAAACQeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZS5jb206NDQzIiwiZmVhdHVyZSI6IkRpc2FibGVUaGlyZFBhcnR5U3RvcmFnZVBhcnRpdGlvbmluZzIiLCJleHBpcnkiOjE3NDIzNDIzOTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <head>
        <style>
            .grid-container {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 30px;
                align-items: center;
                padding: 20px 120px;
            }

            .grid-item {
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .image-content {
                text-align: center;
            }

            .responsive-image {
                max-height: 250px;
                width: 100%;
                object-fit: cover;
                animation: fadeInRight 0.6s ease forwards;
            }

            .text-content {
                text-align: left;
                animation: fadeInLeft 0.6s ease forwards;
            }

            @media (max-width: 768px) {
                .grid-container {
                    grid-template-columns: 1fr;
                    padding: 20px;
                }

                .text-content {
                    text-align: center;
                }
            }

            .service-card {
                height: 75px;
                width: 100%;
                /* Allows flexible width */
                max-width: 250px;
                /* Ensures it doesn't get too big */
                text-align: center;
                padding: 5px;
                border: 1px solid #ddd;
                border-radius: 10px;
                background-color: white;
                color: black;
                box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease, color 0.3s ease, background-color 0.3s ease;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 16px;
                /* Ensures readable text */
                margin: 10px;
            }

            .service-card:hover {
                color: white !important;
                /* Added !important to ensure override */
                background-color: var(--bs-dark);
                transform: scale(1.05);
            }

            /* Selected state */
            .service-card.selected {
                background-color: var(--bs-dark);
                color: white !important;
                /* Added !important to ensure override */
            }

            /* Ensure all text elements inside the card also change color */
            .service-card:hover *,
            .service-card.selected * {
                color: white !important;
            }

            /* If you have any specific text elements like paragraphs or headings */
            .service-card:hover p,
            .service-card:hover h3,
            .service-card.selected p,
            .service-card.selected h3 {
                color: white !important;
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

            .about-container {
                position: relative;
                background-color: var(--bs-dark);
                padding: 1rem;
                min-height: 80%;
                width: 100%;
            }

            .particles-container {
                position: relative;
                z-index: 1;
            }

            #particlesCanvas {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: -1;
            }

            .display-6 {
                color: white;
                text-align: center;
                font-size: 2.5rem;
                margin-bottom: 2rem;
                font-weight: 300;
            }

            .services-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 1.5rem;
                padding: 0 1rem;
                max-width: 1200px;
                margin: 0 auto;
            }

            .service-card {
                background: rgba(255, 255, 255, 0.1);
                border-radius: 10px;
                padding: 1.5rem;
                transition: all 0.3s ease;
                cursor: pointer;
                backdrop-filter: blur(5px);
                border: 1px solid rgba(255, 255, 255, 0.1);
            }

            .service-card:hover {
                transform: translateY(-5px);
                background: rgba(255, 255, 255, 0.15);
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            }

            .service-card h5 {
                color: white;
                margin: 0;
                font-size: 1.1rem;
                font-weight: 500;
            }

            /* Responsive Breakpoints */
            @media (max-width: 768px) {
                .display-6 {
                    font-size: 2rem;
                }

                .services-grid {
                    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                    gap: 1rem;
                }

                .service-card {
                    padding: 1rem;
                }

                .service-card h5 {
                    font-size: 1rem;
                }
            }

            @media (max-width: 480px) {
                .display-6 {
                    font-size: 1.75rem;
                }

                .services-grid {
                    grid-template-columns: 1fr;
                    max-width: 300px;
                }

                .about-container {
                    padding: 1.5rem 0.5rem;
                }
            }

            @keyframes fadeInLeft {
                from {
                    opacity: 0;
                    transform: translateX(-30px);
                }

                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes fadeInRight {
                from {
                    opacity: 0;
                    transform: translateX(30px);
                }

                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes slideUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .about-item-content:hover {
                transform: translateY(-5px);
            }
        </style>
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="5 days">
        <meta charset="utf-8">
        <script type="text/javascript" async="" src="./erp_files/analytics.js.download"></script>
        <script type="text/javascript" async="" src="./erp_files/js"></script>
        <script type="text/javascript" async="" charset="utf-8" src="./erp_files/recaptcha__en.js.download" crossorigin="anonymous" integrity="sha384-3wmc1Bh1cCJW+fASaBmsSdAIwB8jgncUQXdLNwTeFRWYZhdATgEib2Aeg4rtm7Yi"></script>
        <script async="" src="./erp_files/js(1)"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-138972828-1');
        </script>
        <title>Techtrail | Software companies in Mumbai | Software Development Services</title>
        <meta name="description" content="As a mobile application development company we deliver Fast Apps Development of all types. ">
        <meta name="keywords" content="Software development company, software development services, software companies in Mumbai">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="https://www.tech-trail.com/erp-applications.php">

        <!-- Open Meta Data -->
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="TechTrail | ERP Applications | Software Development Services">
        <meta property="og:description" content="Techtrail is a leading software development company in Mumbai providing effective software development services to their clients as per their requirements.">
        <meta property="og:url" content="https://www.tech-trail.com/erp-applications.php">
        <meta property="og:site_name" content="TechTrail | ERP Applications | Software Development Services">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:description" content="Techtrail is a leading software development company in Mumbai providing effective software development services to their clients as per their requirements.">
        <meta name="twitter:title" content="TechTrail | ERP Applications | Software Development Services">

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

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

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
                        <a href="index.php" class="nav-item nav-link ">Home</a>
                        <a href="about.php" class="nav-item nav-link">About us</a>
                        <a href="erp.php" class="nav-item nav-link active">Services</a>
                        <a href="product.php" class="nav-item nav-link">Products</a>
                        <a href="careers.php" class="nav-item nav-link">Careers</a>
                        <a href="contact.php" class="nav-item nav-link">Contact us</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center bg-primary">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


    <!-- Header Start -->
    <!-- <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Service</li>
            </ol>
        </div>
    </div> -->
    <!-- Header End -->
    <div class="about-container">
        <div class="particles-container">
            <canvas id="particlesCanvas"></canvas>
            <h3 class="display-6">Our Services</h3>
            <div class="services-grid">
                <div class="service-card" data-service="erp" onclick="goToNextPage('erp')">
                    <h5>ERP Applications</h5>
                </div>
                <div class="service-card" data-service="technology" onclick="goToNextPage('technology')">
                    <h5>Technology Consulting</h5>
                </div>
                <div class="service-card" data-service="mobiledev" onclick="goToNextPage('mobiledev')">
                    <h5>Mobile Application Development</h5>
                </div>
                <div class="service-card" data-service="webdev" onclick="goToNextPage('webdev')">
                    <h5>Web Development</h5>
                </div>
                <div class="service-card" data-service="analytics" onclick="goToNextPage('analytics')">
                    <h5>Analytics & BI</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Start -->
    <!-- <div class="container-fluid service" style="text-align: center; padding-top: 2%; padding-bottom: 3%;">
        <h3 class="display-6 mb-4" style="color: var(--bs-dark)">Our Services</h3>
        <div class="d-flex justify-content-center overflow-hidden">
            <div class="service-card flex-grow-1 text-center" data-service="erp" onclick="goToNextPage('erp')">
                <h5>ERP Applications</h5>
            </div>
            <div class="service-card flex-grow-1 text-center" data-service="technology" onclick="goToNextPage('technology')">
                <h5>Technology Consulting</h5>
            </div>
            <div class="service-card flex-grow-1 text-center" data-service="mobiledev" onclick="goToNextPage('mobiledev')">
                <h5>Mobile Application Development</h5>
            </div>
            <div class="service-card flex-grow-1 text-center" data-service="webdev" onclick="goToNextPage('webdev')">
                <h5>Web Development</h5>
            </div>
            <div class="service-card flex-grow-1 text-center" data-service="analytics" onclick="goToNextPage('analytics')">
                <h5>Analytics & BI</h5>
            </div>
        </div>
    </div> -->
    <!-- Service End -->
    <div class="container-fluid pt-2 pb-2" style="background-color: #f8f9fa;">
        <div class="container-fluid">
            <div class="grid-container">
                <div class="grid-item text-content">
                    <h4 class="mt-4" style="animation: fadeInLeft 0.6s ease forwards;">Analytics & BI</h4>
                    <p style="color: black; margin-bottom: 15px; animation: fadeInLeft 0.6s ease forwards;">
                        Unlock Business Growth with Advanced Analytics &amp; Business Intelligence
                    </p>
                    <p style="color: black; animation: fadeInLeft 0.6s ease forwards;">
                        Extracting valuable insights from vast amounts of unstructured data is one of the biggest
                        challenges businesses face today. This is where Analytics and Business Intelligence (BI)
                        come into play, transforming raw data into actionable strategies.
                    </p>
                </div>
                <div class="grid-item image-content">
                    <img src="img/abi2.jpg" class="responsive-image" alt="Technology Consulting Image" />
                </div>
            </div>
        </div>

    </div>
    <!-- <div class="container-fluid pt-2 pb-2" style="background-color: #f8f9fa;">
        <div class="container" style="padding-left: 150px;">
            <div class="grid-container">
                <div class="grid-item text-content">
                    <h4 class="mt-4 text-left" style="animation: fadeInLeft 0.6s ease forwards; animation-delay: 0.6s;">Analytics & BI</h4>
                    <p style="text-align: left; color: black; margin-bottom: 15px; animation: fadeInLeft 0.6s ease forwards; animation-delay: 0.6s; opacity: 0;">
                        One of the most complicated work to do in business is to extract the important and useful data from a big pile of unstructured and sometimes, unnecessary information. This is where the role of analytics and business intelligence comes to play.
                    </p>
                    <p style="text-align: left; color: black; animation: fadeInLeft 0.6s ease forwards; animation-delay: 0.9s; opacity: 0;">
                        Your analytics involves collecting, analyzing, reporting, predicting, and offering solutions based on the data available. Business intelligence comes into the picture when you use the analytics to answer relevant questions of your business like - “What has already happened?” and “What will happen next?”. Together with Analytics and BI, you not only know what the challenges are but also get ready to face them.
                    </p>
                </div>
                <div class="grid-item">
                    <img src="img/abi2.jpg" class="grid-image" alt="ERP System Image" />
                </div>
            </div>
        </div>
    </div> -->
    <div class="contaienr-fluid about pt-0 pb-0" style="background-color: rgba(222, 234, 245, 0.95);">
        <div class="particles-container">
            <canvas id="particlesCanvas"></canvas>
            <div class="container fade-in-right" style="position: relative; z-index: 2;">
                <div class="row justify-content-center">
                    <div class="col-md-12 pt-4 pb-4">
                        <div class="content-card" style="
                    background: rgba(255, 255, 255, 0.95);
                    padding: 30px;
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                    margin: 20px 0;
                    opacity: 0;
                    transform: translateY(20px);
                    animation: fadeInUp 0.8s ease forwards;
                ">
                            <h4 style="
                        color: #2c3e50;
                        font-size: 1.5rem;
                        margin-bottom: 25px;
                        border-bottom: 2px solid #3498db;
                        padding-bottom: 15px;
                    ">Our services include Business Analytics:</h4>

                            <div class="benefits-grid" style="
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                        gap: 20px;
                        margin-bottom: 30px;
                    ">
                                <div class="benefit-item" style="
                            padding: 15px;
                            background: rgba(52, 152, 219, 0.1);
                            transition: all 0.3s ease;
                            opacity: 0;
                            animation: fadeInLeft 0.5s ease forwards;
                        ">
                                    <p style="margin: 0;">1. Assessment &amp; Tool Evaluation – Identify the best analytics tools for your needs</p>
                                </div>
                                <div class="benefit-item" style="
                            padding: 15px;
                            
                            background: rgba(46, 204, 113, 0.1);
                            transition: all 0.3s ease;
                            opacity: 0;
                            animation: fadeInLeft 0.5s ease forwards;
                            animation-delay: 0.1s;
                        ">
                                    <p style="margin: 0;">2. Consulting &amp; Roadmap – Develop a data-driven strategy for growth</p>
                                </div>
                                <div class="benefit-item" style="
                            padding: 15px;
                            background: rgba(155, 89, 182, 0.1);
                            transition: all 0.3s ease;
                            opacity: 0;
                            animation: fadeInLeft 0.5s ease forwards;
                            animation-delay: 0.2s;
                        ">
                                    <p style="margin: 0;">3. Data Mining &amp; Analysis – Uncover patterns and insights from complex data</p>
                                </div>
                                <div class="benefit-item" style="
                            padding: 15px;
                            background: rgba(241, 196, 15, 0.1);
                            transition: all 0.3s ease;
                            opacity: 0;
                            animation: fadeInLeft 0.5s ease forwards;
                            animation-delay: 0.3s;
                        ">
                                    <p style="margin: 0;">4. Architecture Design &amp; Development – Build robust analytics frameworks</p>
                                </div>
                                <div class="benefit-item" style="
                            padding: 15px;
                            background: rgba(231, 76, 60, 0.1);
                            transition: all 0.3s ease;
                            opacity: 0;
                            animation: fadeInLeft 0.5s ease forwards;
                            animation-delay: 0.4s;
                        ">
                                    <p style="margin: 0;">5. Dashboards, Interactive Visualizations, Reports &amp; Alerts – Gain real-time business
                                        insights</p>
                                </div>
                                <div class="benefit-item" style="
                            padding: 15px;
                            background: rgba(52, 73, 94, 0.1);
                            transition: all 0.3s ease;
                            opacity: 0;
                            animation: fadeInLeft 0.5s ease forwards;
                            animation-delay: 0.5s;
                        ">
                                    <p style="margin: 0;">6. Data Warehousing &amp; Integration – Ensure seamless data flow across platforms</p>
                                </div>
                                <div class="benefit-item" style="
                            padding: 15px;
                            background: rgba(22, 160, 133, 0.1);
                            transition: all 0.3s ease;
                            opacity: 0;
                            animation: fadeInLeft 0.5s ease forwards;
                            animation-delay: 0.6s;
                        ">
                                    <p style="margin: 0;">7. Migration Services – Upgrade and transition to modern analytics solutions</p>
                                </div>
                            </div>

                            <!-- <div class="conclusion" style="
                        padding: 20px;
                        background: rgba(52, 152, 219, 0.05);
                        border-left: 4px solid #3498db;
                        margin-top: 20px;
                        opacity: 0;
                        animation: fadeInUp 0.8s ease forwards;
                        animation-delay: 0.7s;
                    ">
                                    <p style="margin: 0; line-height: 1.6;">It's really important to find the most optimum ERP system type to fit existing organizational, infrastructure and operational needs. TechTrail helps you in not only selecting the most cost-effective system but also helps in defining the roadmap for its implementation.</p>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="container fade-in-right" style="position: relative; z-index: 2;">
                <div class="row justify-content-center">
                    <div class="col-md-12 pt-4 pb-4">
                        <div class="content-card" style="
                    background: rgba(255, 255, 255, 0.95);
                    padding: 30px;
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                    margin: 20px 0;
                    opacity: 0;
                    transform: translateY(20px);
                    animation: fadeInUp 0.8s ease forwards;
                ">
                            <h4 style="
                        color: #2c3e50;
                        font-size: 1.5rem;
                        margin-bottom: 25px;
                        border-bottom: 2px solid #3498db;
                        padding-bottom: 15px;
                    ">Our services include Business Intelligence (BI):</h4>

                            <div class="benefits-grid" style="
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                        gap: 20px;
                        margin-bottom: 30px;
                    ">
                                <div class="benefit-item" style="
                            padding: 15px;
                            background: rgba(52, 152, 219, 0.1);
                            transition: all 0.3s ease;
                            opacity: 0;
                            animation: fadeInLeft 0.5s ease forwards;
                        ">
                                    <p style="margin: 0;">1. Statistical Analysis – Make informed decisions with in-depth data assessments</p>
                                </div>
                                <div class="benefit-item" style="
                            padding: 15px;
                            
                            background: rgba(46, 204, 113, 0.1);
                            transition: all 0.3s ease;
                            opacity: 0;
                            animation: fadeInLeft 0.5s ease forwards;
                            animation-delay: 0.1s;
                        ">
                                    <p style="margin: 0;">2. Predictive Analytics – Forecast trends and future opportunities</p>
                                </div>
                                <div class="benefit-item" style="
                            padding: 15px;
                            background: rgba(155, 89, 182, 0.1);
                            transition: all 0.3s ease;
                            opacity: 0;
                            animation: fadeInLeft 0.5s ease forwards;
                            animation-delay: 0.2s;
                        ">
                                    <p style="margin: 0;">3. Risk Analytics – Identify and mitigate potential business risks</p>
                                </div>
                                <div class="benefit-item" style="
                            padding: 15px;
                            background: rgba(241, 196, 15, 0.1);
                            transition: all 0.3s ease;
                            opacity: 0;
                            animation: fadeInLeft 0.5s ease forwards;
                            animation-delay: 0.3s;
                        ">
                                    <p style="margin: 0;">4. Performance Management – Track KPIs and enhance operational efficiency</p>
                                </div>
                                <div class="benefit-item" style="
                            padding: 15px;
                            background: rgba(231, 76, 60, 0.1);
                            transition: all 0.3s ease;
                            opacity: 0;
                            animation: fadeInLeft 0.5s ease forwards;
                            animation-delay: 0.4s;
                        ">
                                    <p style="margin: 0;">5. Inventory Optimization – Streamline supply chain and stock management
                                        insights</p>
                                </div>
                            </div>

                            <div class="conclusion" style="
                        padding: 20px;
                        background: rgba(52, 152, 219, 0.05);
                        border-left: 4px solid #3498db;
                        margin-top: 20px;
                        opacity: 0;
                        animation: fadeInUp 0.8s ease forwards;
                        animation-delay: 0.7s;
                    ">
                                <p style="margin: 0; line-height: 1.6;">At TechTrail, we empower businesses with data-driven clarity to stay ahead in an evolving
                                    marketplace. Let’s transform data into smart decisions and strategic success!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container pt-2 pb-2" style="padding-right: 150px;">
        <div class="grid-container">
            <div class="grid-item">
                <img src="img/abi2.jpg" class="grid-image" />
            </div>
            <div class="grid-item text-content">
                <h4 class="mt-4 text-right" style="text-align: right; animation: fadeInRight 0.6s ease forwards; animation-delay: 0.9s;">Why is Analytics & BI Important?</h4>
                <p style="text-align: right; color: black; animation: fadeInRight 0.6s ease forwards; animation-delay: 0.9s;">
                    Analytics & Business Intelligence (BI) are important because they help businesses make data-driven decisions, improve efficiency, and gain a competitive edge. By analyzing data, companies can identify trends, optimize operations, and predict future outcomes. BI tools provide real-time insights, helping organizations enhance performance, reduce risks, and improve customer experiences. With the right analytics, businesses can turn raw data into actionable strategies for growth and success.
                </p>
            </div>
        </div>
    </div>

    <div class="container pt-2 pb-2" style="padding-left: 150px;">
        <div class="grid-container">
            <div class="grid-item text-content">
                <h4 class="mt-4 text-left">Our services include</h4>
                <h5>Business Analytics:</h5>
                <ul class="list-unstyled text-left" style="color:black">
                    <li>1. Assessment and tool evaluation</li>
                    <li>2. Consulting and roadmap</li>
                    <li>3. Data mining and analysis</li>
                    <li>4. Architecture design and development</li>
                    <li>5. Data warehousing and integration</li>
                </ul>
            </div>
            <div class="grid-item">
                <img src="img/abi3.jpg" class="grid-image" />
            </div>
        </div>
    </div>
</div> -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        // Highlight the correct tab
        document.addEventListener("DOMContentLoaded", function() {
            const urlParams = new URLSearchParams(window.location.search);
            const selectedService = urlParams.get("selected");

            if (selectedService) {
                document.querySelectorAll(".service-card").forEach(card => {
                    if (card.getAttribute("data-service") === selectedService) {
                        card.classList.add("selected");
                    }
                });
            }
        });

        function goToNextPage(service) {
            window.location.href = `${service}.php?selected=${service}`;
        }
    </script>
    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: false,

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const canvas = document.getElementById("particlesCanvas");
        const ctx = canvas.getContext("2d");
        const container = canvas.parentElement;

        // Particle configuration
        const numberOfParticles = 180;
        const connectionDistance = 90;
        const mouseRadius = 120;

        function resizeCanvas() {
            // Get container dimensions instead of window dimensions
            const rect = container.getBoundingClientRect();
            canvas.width = rect.width;
            canvas.height = rect.height;
        }

        // Initial resize
        resizeCanvas();

        // Resize on window resize
        window.addEventListener("resize", resizeCanvas);

        let mouse = {
            x: null,
            y: null,
            radius: mouseRadius
        };

        // Update mouse position relative to container
        container.addEventListener("mousemove", function(event) {
            const rect = container.getBoundingClientRect();
            mouse.x = event.clientX - rect.left;
            mouse.y = event.clientY - rect.top;
        });

        // Reset mouse position when leaving container
        container.addEventListener("mouseleave", function() {
            mouse.x = null;
            mouse.y = null;
        });

        class Particle {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 2 + 1;
                this.baseX = this.x;
                this.baseY = this.y;
                this.density = (Math.random() * 30) + 1;
                this.speedX = (Math.random() - 0.5) * 0.5;
                this.speedY = (Math.random() - 0.5) * 0.5;
                this.opacity = Math.random() * 0.5 + 0.2;
            }

            draw() {
                ctx.fillStyle = `rgba(255, 255, 255, ${this.opacity}`;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.closePath();
                ctx.fill();
            }

            update() {
                // Normal movement
                this.x += this.speedX;
                this.y += this.speedY;

                // Container boundaries
                if (this.x < 0 || this.x > canvas.width) {
                    this.speedX *= -1;
                }
                if (this.y < 0 || this.y > canvas.height) {
                    this.speedY *= -1;
                }

                // Mouse interaction
                if (mouse.x != null && mouse.y != null) {
                    let dx = mouse.x - this.x;
                    let dy = mouse.y - this.y;
                    let distance = Math.sqrt(dx * dx + dy * dy);

                    if (distance < mouse.radius) {
                        const angle = Math.atan2(dy, dx);
                        this.x -= Math.cos(angle) * 3;
                        this.y -= Math.sin(angle) * 3;
                    }
                }

                // Keep particles within bounds
                this.x = Math.max(0, Math.min(this.x, canvas.width));
                this.y = Math.max(0, Math.min(this.y, canvas.height));
            }
        }

        const particlesArray = [];

        function init() {
            particlesArray.length = 0;
            for (let i = 0; i < numberOfParticles; i++) {
                particlesArray.push(new Particle());
            }
        }

        function connect() {
            for (let a = 0; a < particlesArray.length; a++) {
                for (let b = a; b < particlesArray.length; b++) {
                    let dx = particlesArray[a].x - particlesArray[b].x;
                    let dy = particlesArray[a].y - particlesArray[b].y;
                    let distance = Math.sqrt(dx * dx + dy * dy);

                    if (distance < connectionDistance) {
                        let opacity = 1 - (distance / connectionDistance);
                        ctx.strokeStyle = `rgba(255, 255, 255, ${opacity * 0.2})`;
                        ctx.lineWidth = 1;
                        ctx.beginPath();
                        ctx.moveTo(particlesArray[a].x, particlesArray[a].y);
                        ctx.lineTo(particlesArray[b].x, particlesArray[b].y);
                        ctx.stroke();
                    }
                }
            }
        }

        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            particlesArray.forEach((particle) => {
                particle.draw();
                particle.update();
            });

            connect();
            requestAnimationFrame(animate);
        }

        // Initialize and start animation
        init();
        animate();
    </script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>