<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techtrail | Software companies in Mumbai | Software Development Services</title>
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
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            /* Two equal columns */
            gap: 30px;
            /* Adds space between elements */
            align-items: center;
            padding: 20px 150px;
            /* Adjusts spacing */
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

        /* Responsive Design for Smaller Screens */
        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: 1fr;
                /* Single column layout */
                padding: 20px;
            }

            .text-content {
                text-align: center;
            }
        }

        .service-card {
            height: 75px;
            width: 400px;
            text-align: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: white;

            /* Default background */
            color: black;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, color 0.3s, background-color 0.3s;
            cursor: pointer;
        }

        .service-card:hover {
            color: var(--bs-primary);
            /* Primary color on hover */
            background-color: var(--bs-primary);
            transform: scale(1.05);
        }

        /* Selected state */
        .service-card.selected {
            background-color: var(--bs-primary);
            /* Primary background when selected */
            color: white;
            /* White text */
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

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            /* min-height: 100vh; */
        }

        .about {
            position: relative;
            height: 100%;
            padding: 3rem 0;
            background-color: var(--bs-dark);
        }

        .about-container {
            position: relative;
            height: 180px;
            padding: 3rem 0;
            background-color: var(--bs-dark);
        }

        .particles-container {
            position: relative;
            width: 100%;
            height: 100%;
            /* Set your desired height */
            overflow: hidden;
        }

        #particlesCanvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .about-item-content {
            background: rgba(255, 255, 255, 0.95);

            padding: 2rem;
            height: 100%;
        }

        p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 1rem;
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
</head>

<body>
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
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About us</a>
                        <a href="service.php" class="nav-item nav-link active">Services</a>
                        <a href="product.php" class="nav-item nav-link">Products</a>
                        <a href="contact.php" class="nav-item nav-link">Contact us</a>
                    </div>
                </div>

            </nav>
        </div>
    </div>
    <!-- Carousel Start -->
    <!-- <div class="header-carousel owl-carousel">
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container-fluid">
                    <img src="img/IT2.jpg"></img>
                    <div class="overlay-text position-absolute custom-position text-white p-3" style="width: 30%;">
                        <h3 class="display-6 mb-4" style="color: white;">Welcome to Techtrail</h3>
                        <p class="mb-0" style="text-align: center">TechTrail Technologies is a private limited company established in 2014 headquartered in Pune, India.
                            TechTrail Technologies has successfully build a team of passionate people who always thrives to deliver enterprise software solutions aligned with customer needs.
                            Gradually having grown by expertise and timely services in this field, we provide the quality software with robust security and scalability.
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
    <div class="contaienr-fluid about-container pt-2 pb-2">
        <div class="particles-container">
            <canvas id="particlesCanvas"></canvas>
            <h3 class="display-6 mb-4" style="color:white;text-align:center">Our Services</h3>
            <div class="row justify-content-center g-4" style="text-align: center;">
                <div class="col-md-2 col-sm-6 d-flex">
                    <div class="service-card" data-service="erp" onclick="goToNextPage('erp')">
                        <h5>ERP Applications</h5>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 d-flex">
                    <div class="service-card" data-service="technology" onclick="goToNextPage('technology')">
                        <h5>Technology Consulting</h5>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 d-flex">
                    <div class="service-card" data-service="mobiledev" onclick="goToNextPage('mobiledev')">
                        <h5>Mobile Application Development</h5>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 d-flex">
                    <div class="service-card" data-service="webdev" onclick="goToNextPage('webdev')">
                        <h5>Web Development</h5>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 d-flex">
                    <div class="service-card" data-service="analytics" onclick="goToNextPage('analytics')">
                        <h5>Analytics & BI</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-2 pb-2" style="background-color: #f8f9fa;">
        <div class="container-fluid">
            <div class="grid-container">
                <div class="grid-item text-content">
                    <h4 class="mt-4" style="animation: fadeInLeft 0.6s ease forwards;">ERP Applications</h4>
                    <p style="color: black; margin-bottom: 15px; animation: fadeInLeft 0.6s ease forwards;">
                        Improve your business performance with our right ERP system.
                    </p>
                    <p style="color: black; animation: fadeInLeft 0.6s ease forwards;">
                        As the business evolves, handling and maintaining an effective connection between the complex
                        functional departments can be challenging. An Enterprise Resource Planning (ERP) system can be used
                        by organizations who want to maintain their business functions in an integrated system.
                    </p>
                </div>
                <div class="grid-item image-content">
                    <img src="img/erp1.jpg" alt="ERP System Image" class="responsive-image">
                </div>
            </div>
        </div>

    </div>
    <!-- <div class="container-fluid service" style="text-align: center;padding-top:2%;padding-bottom:3%; background: url('img/service.png') no-repeat center center/cover"> -->
    <!-- <div class="container-fluid service" style="text-align: center; padding-top: 2%; padding-bottom: 3%; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/service.png') no-repeat center center/cover;">
        <h3 class="display-6 mb-4" style="color:white">Our Services</h3>
        <div class="row justify-content-center g-4" style="text-align: center;">
            <div class="col-md-2 col-sm-6 d-flex">
                <div class="service-card" data-service="erp" onclick="goToNextPage('erp')">
                    <h5>ERP Applications</h5>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 d-flex">
                <div class="service-card" data-service="technology" onclick="goToNextPage('technology')">
                    <h5>Technology Consulting</h5>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 d-flex">
                <div class="service-card" data-service="mobiledev" onclick="goToNextPage('mobiledev')">
                    <h5>Mobile Application Development</h5>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 d-flex">
                <div class="service-card" data-service="webdev" onclick="goToNextPage('webdev')">
                    <h5>Web Development</h5>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 d-flex">
                <div class="service-card" data-service="analytics" onclick="goToNextPage('analytics')">
                    <h5>Analytics & BI</h5>
                </div>
            </div>
        </div>

    </div> -->
    <!-- <div class="container-fluid about" style="background-color: lightblue; padding: 40px 0;">
        <div class="container">
            <div class="row" style="display: flex; align-items: stretch;">
                <div class="col-md-6 pt-0" style="display: flex;">
                    <div class="about-item-content fade-in-left" style="
                    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
                    background: white;
                    opacity: 0;
                    animation: fadeInLeft 1s ease forwards;
                    transition: transform 0.3s ease;
                    justify-content: center;
                    width: 100%;
                    height: 100%;
                ">
                        <h3 style="
                        color: #333;
                        margin-bottom: 15px;
                        animation: slideUp 0.6s ease forwards;
                        animation-delay: 0.3s;
                        opacity: 0;
                    ">ERP Applications</h3>
                        <p style="
                        color: black;
                        margin-bottom: 15px;
                        animation: slideUp 0.6s ease forwards;
                        animation-delay: 0.6s;
                        opacity: 0;
                    ">Improve your business performance With our right ERP system</p>
                        <p style="
                        color: black;
                        animation: slideUp 0.6s ease forwards;
                        animation-delay: 0.9s;
                        opacity: 0;
                    ">As the business evolves, handling and maintaining an effective line of connecting between the complex functional departments can be challenging. Enterprise resource planning (ERP) system can be used by the organisations who want to maintain their business functions in an integrated system.</p>
                    </div>
                </div>
                <div class="col-md-6 pt-0" style="display: flex;">
                    <div class="about-item-content fade-in-right" style="
                    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
                    background: white;
                    opacity: 0;
                    animation: fadeInRight 1s ease forwards;
                    animation-delay: 0.3s;
                    transition: transform 0.3s ease;
                    width: 100%;
                    height: 100%;
                    justify-content: center;
                ">
                        <img src="/api/placeholder/600/400" alt="ERP Image" style="
                        width: 100%;
                        height: auto;
                        max-height: 360px;
                        object-fit: cover;
                        border-radius: 4px;
                    ">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="container-fluid py-5" style="background-color: #f8f9fa;">
        <!-- <div class="container">
            <h4 class="mt-4 text-center">ERP Applications</h4>
            <p style="  text-align: left;
                        color:black;
                        margin-bottom: 15px;
                        animation: slideUp 0.6s ease forwards;
                        animation-delay: 0.6s;
                        opacity: 0;
                    ">Improve your business performance With our right ERP system</p>
            <p style=" text-align: center;
                        color: black;
                        animation: slideUp 0.6s ease forwards;
                        animation-delay: 0.9s;
                        opacity: 0;
                    ">As the business evolves, handling and maintaining an effective line of connecting between the complex functional departments can be challenging. Enterprise resource planning (ERP) system can be used by the organisations who want to maintain their business functions in an integrated system.</p>
            <h4 class="mt-4 text-center" style="text-align: right">Why is ERP Important?</h4>
            <p style="text-align: right; color: black;">
                ERP systems unify essential business processes into a single integrated system, allowing organizations to run efficiently, improve collaboration, and enhance decision-making. It helps reduce errors, optimize resource allocation, and ensure real-time access to key business data.
            </p>
            <h4 class="mt-4 text-center">Benefits of ERP</h4>
            <ul class="list-unstyled text-center" style="color:black">
                <li>✔ Improved efficiency and productivity</li>
                <li>✔ Better data accuracy and reporting</li>
                <li>✔ Enhanced customer service</li>
                <li>✔ Streamlined financial and inventory management</li>
                <li>✔ Scalability to support business growth</li>
            </ul>

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
                    ">Our collection of functional and technical experts will help you with implementing ERP in your business:</h4>

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
                                        <p style="margin: 0;">1. To integrate systems across multiple locations for better management</p>
                                    </div>
                                    <div class="benefit-item" style="
                            padding: 15px;
                            
                            background: rgba(46, 204, 113, 0.1);
                            transition: all 0.3s ease;
                            opacity: 0;
                            animation: fadeInLeft 0.5s ease forwards;
                            animation-delay: 0.1s;
                        ">
                                        <p style="margin: 0;">2. To position your company for growth by enhancing efficiency</p>
                                    </div>
                                    <div class="benefit-item" style="
                            padding: 15px;
                            background: rgba(155, 89, 182, 0.1);
                            transition: all 0.3s ease;
                            opacity: 0;
                            animation: fadeInLeft 0.5s ease forwards;
                            animation-delay: 0.2s;
                        ">
                                        <p style="margin: 0;">3. To replace an old ERP or legacy system</p>
                                    </div>
                                    <div class="benefit-item" style="
                            padding: 15px;
                            background: rgba(241, 196, 15, 0.1);
                            transition: all 0.3s ease;
                            opacity: 0;
                            animation: fadeInLeft 0.5s ease forwards;
                            animation-delay: 0.3s;
                        ">
                                        <p style="margin: 0;">4. To serve customers in a better way</p>
                                    </div>
                                    <div class="benefit-item" style="
                            padding: 15px;
                            background: rgba(231, 76, 60, 0.1);
                            transition: all 0.3s ease;
                            opacity: 0;
                            animation: fadeInLeft 0.5s ease forwards;
                            animation-delay: 0.4s;
                        ">
                                        <p style="margin: 0;">5. To ensure reporting compliance</p>
                                    </div>
                                    <div class="benefit-item" style="
                            padding: 15px;
                            background: rgba(52, 73, 94, 0.1);
                            transition: all 0.3s ease;
                            opacity: 0;
                            animation: fadeInLeft 0.5s ease forwards;
                            animation-delay: 0.5s;
                        ">
                                        <p style="margin: 0;">6. To make your employees' jobs easier</p>
                                    </div>
                                    <div class="benefit-item" style="
                            padding: 15px;
                            background: rgba(22, 160, 133, 0.1);
                            transition: all 0.3s ease;
                            opacity: 0;
                            animation: fadeInLeft 0.5s ease forwards;
                            animation-delay: 0.6s;
                        ">
                                        <p style="margin: 0;">7. To reduce working capital</p>
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
                                    <p style="margin: 0; line-height: 1.6;">It's really important to find the most optimum ERP system type to fit existing organizational, infrastructure and operational needs. TechTrail helps you in not only selecting the most cost-effective system but also helps in defining the roadmap for its implementation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="container-fluid py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <h3 class="display-6 mb-4 text-center">What is ERP?</h3>
            <p style="text-align: center; color: #333;">
                Enterprise Resource Planning (ERP) is a type of software that organizations use to manage their daily business activities such as accounting, procurement, project management, risk management, and supply chain operations. A complete ERP suite also includes enterprise performance management, helping businesses plan, budget, and forecast financial results.
            </p>
            <h4 class="mt-4 text-center">Why is ERP Important?</h4>
            <p style="text-align: center; color: #333;">
                ERP systems unify essential business processes into a single integrated system, allowing organizations to run efficiently, improve collaboration, and enhance decision-making. It helps reduce errors, optimize resource allocation, and ensure real-time access to key business data.
            </p>
            <h4 class="mt-4 text-center">Benefits of ERP</h4>
            <ul class="list-unstyled text-center">
                <li>✔ Improved efficiency and productivity</li>
                <li>✔ Better data accuracy and reporting</li>
                <li>✔ Enhanced customer service</li>
                <li>✔ Streamlined financial and inventory management</li>
                <li>✔ Scalability to support business growth</li>
            </ul>
        </div>
    </div> -->

        <!-- <div class="contaienr-fluid about pt-0 pb-0">
        <div class="particles-container">
            <canvas id="particlesCanvas"></canvas>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pt-5">
                        <div class="about-item-content">
                            <h3>ERP Applications</h3>
                            <p style="color:black">Improve your business performance With our right ERP system</p>
                            <p style="color:black">As the business evolves, handling and maintaining an effective line of connecting between the complex functional departments can be challenging. Enterprise resource planning (ERP) system can be used by the organisations who want to maintain their business functions in an integrated system.</p>
                        </div>
                    </div>
                    <div class="col-md-6 pt-5">
                        <div class="about-item-content">
                            <img src="/api/placeholder/600/400" alt="ERP Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

        <!-- <div class="contaienr-fluid about pt-0 pb-0">
        <div class="particles-container">
            <canvas id="particlesCanvas"></canvas>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pt-5">
                        <div class="about-item-content">
                            <h3>ERP Applications</h3>
                            <p style="color:black">Improve your business performance With our right ERP system</p>
                            <p style="color:black">As the business evolves, handling and maintaining an effective line of connecting between the complex functional departments can be challenging. Enterprise resource planning (ERP) system can be used by the organisations who want to maintain their business functions in an integrated system.</p>
                        </div>
                    </div>
                    <div class="col-md-6 pt-5">
                        <div class="about-item-content">
                            <img src="/api/placeholder/600/400" alt="ERP Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

        <!-- Footer Start -->
        <div class="container-fluid footer wow fadeIn" data-wow-delay="0.2s">
            <div class="container pt-3 pb-4 text-center">
                <div class="row justify-content-center">
                    <!-- Company Info -->
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-item">
                            <a href="index.php" class="p-0">
                                <h3 class="text-white"><i class="fab fa-slack me-3"></i> LifeSure</h3>
                            </a>
                            <p class="text-white mb-4">Dolor amet sit justo amet elitr clita ipsum elitr est. Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
                            <div class="footer-btn d-flex justify-content-center">
                                <a class="btn btn-md-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-md-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-md-square rounded-circle me-2" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-md-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Useful Links -->
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Useful Links</h4>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a></li>
                                <li><a href="#"><i class="fas fa-angle-right me-2"></i> Features</a></li>
                                <li><a href="#"><i class="fas fa-angle-right me-2"></i> Services</a></li>
                                <li><a href="#"><i class="fas fa-angle-right me-2"></i> Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Instagram Section -->
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-item">
                            <h4 class="mb-4 text-white">Instagram</h4>
                            <div class="row g-2">
                                <!-- Loop through 6 Instagram images -->
                                <?php for ($i = 1; $i <= 6; $i++) { ?>
                                    <div class="col-4">
                                        <div class="footer-instagram rounded position-relative">
                                            <img src="img/instagram-footer-<?= $i ?>.jpg" class="img-fluid w-100" alt="">
                                            <div class="footer-search-icon position-absolute top-50 start-50 translate-middle">
                                                <a href="img/instagram-footer-<?= $i ?>.jpg" data-lightbox="footerInstagram-<?= $i ?>">
                                                    <i class="fas fa-link text-white"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="pt-4 mt-4 border-top border-white">
                    <div class="row g-4 text-center">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="btn-xl-square bg-primary text-white rounded p-4 me-3">
                                    <i class="fas fa-map-marker-alt fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="text-white">Address</h5>
                                    <p class="mb-0">204, Rajvilas Heights, Near Aditya Shagun Mall, Bavdhan, Pune 411021 India.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="btn-xl-square bg-primary text-white rounded p-4 me-3">
                                    <i class="fas fa-envelope fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="text-white">Mail Us</h5>
                                    <p class="mb-0">sales@tech-trail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="btn-xl-square bg-primary text-white rounded p-4 me-3">
                                    <i class="fa fa-phone-alt fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="text-white">Telephone</h5>
                                    <p class="mb-0">+91 9325529914</p>
                                </div>
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
                        Design and Developed by <a href="">Nikhil Satpute</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
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
</body>

</html>