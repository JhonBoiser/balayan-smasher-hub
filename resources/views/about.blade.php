<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balayan Smasher Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --nike-black: #111111;
            --nike-gray: #757575;
            --nike-light-gray: #f5f5f5;
            --nike-white: #ffffff;
            --nike-accent: #ff6b00;
            --nike-green: #0cad3aff
        }

        html,
        body {
            height: 100%;
            margin: 0;
            font-family: 'Helvetica Neue', Arial, sans-serif;
        }

        #search {
            background-color: var(--nike-green);
            border: none;
            color: white;
        }

        #search:hover {
            background-color: #f5f5f5ff;
            color: black;
        }

        #carouselWithControls {
            height: 100vh;
        }

        #carouselWithControls .carousel-inner,
        #carouselWithControls .carousel-item {
            height: 100%;
        }

        #carouselWithControls .carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
            display: block;
        }

        .navbar {
            position: absolute;
            top: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.95);
            z-index: 10;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            border-radius: 50%;
            height: 40px;
            width: 40px;
            object-fit: cover;
        }

        .navbar .nav-link,
        .navbar .btn,
        .navbar .bi {
            color: var(--nike-black);
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .navbar .nav-link {
            position: relative;
            margin: 0 10px;
        }

        .navbar .nav-link::after {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            left: 0;
            bottom: -5px;
            background-color: var(--nike-green);
            transition: width 0.3s ease;
        }

        .navbar .nav-link:hover {
            color: var(--nike-green);
            transform: scale(1.05);
        }

        .navbar .nav-link:hover::after {
            width: 100%;
            background-color: var(--nike-green);
        }

        .navbar .form-control::placeholder {
            color: #ccc;
        }

        .navbar .navbar-search input {
            width: 200px;
            border-radius: 20px;
            padding: 5px 15px;
            border: 1px solid #ddd;
        }

        .navbar .navbar-search button {
            margin-left: 5px;
            border-radius: 20px;
        }

        .carousel-fixed-text {
            position: absolute;
            bottom: 20px;
            left: 20px;
            z-index: 5;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .carousel-fixed-text h1 {
            font-size: 3rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            transition: all 0.3s ease;
        }

        .carousel-fixed-text:hover h1 {
            color: var(--nike-accent);
            transform: scale(1.05);
        }

        .mega-menu {
            position: absolute;
            top: 60px;
            left: 0;
            width: 100%;
            background: #fff;
            display: none;
            padding: 20px 40px;
            z-index: 999;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            max-height: 70vh;
            overflow-y: auto;
            /* Add animation properties */
            animation: popUp 0.4s ease-out forwards;
            transform-origin: top center;
        }

        .mega-menu h6 {
            font-weight: bold;
            margin-bottom: 10px;
            color: var(--nike-black);
        }

        .mega-menu a {
            text-decoration: none;
            color: #333;
            font-size: 14px;
            display: inline-block;
            /* Change to inline-block */
            padding: 5px 0;
            transition: all 0.3s ease;
            position: relative;

        }

        .mega-menu a::after {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--nike-green);
            transition: width 0.3s ease;
        }

        .mega-menu a:hover {
            color: var(--nike-green);
            transform: scale(1.05);
        }

        .mega-menu a:hover::after {
            width: 100%;
            /* This will now match the text length */
        }

        /* Login Modal Styles */
        .modal-content {
            border-radius: 8px;
            border: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            border-bottom: none;
            padding: 20px 30px 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .modal-logo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .modal-title {
            font-weight: bold;
            font-size: 1.5rem;
            text-align: center;
            width: 100%;
        }

        .modal-subtitle {
            text-align: center;
            font-size: 0.9rem;
            color: var(--nike-gray);
            margin-bottom: 20px;
            line-height: 1.4;
        }

        .modal-body {
            padding: 10px 30px 30px;
        }

        .form-label {
            font-weight: 500;
            margin-bottom: 8px;
            color: #333;
        }

        .form-control {
            border-radius: 4px;
            padding: 10px 12px;
            border: 1px solid #ddd;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: var(--nike-green);
            box-shadow: 0 0 0 0.2rem rgba(12, 173, 58, 0.25);
        }

        .btn-login {
            background-color: var(--nike-green);
            border: none;
            color: white;
            font-weight: 500;
            padding: 10px;
            width: 100%;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .btn-login:hover {
            background-color: #0a9c32;
        }

        .form-check-label {
            font-size: 0.9rem;
        }

        .forgot-password {
            color: var(--nike-green);
            text-decoration: none;
            font-size: 0.9rem;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .signup-link {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
        }

        .signup-link a {
            color: var(--nike-green);
            text-decoration: none;
            font-weight: 500;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }

        /* Sign Up Modal Specific Styles */
        .signup-header {
            text-align: center;
            margin-bottom: 5px;
        }

        .signup-subtitle {
            text-align: center;
            font-size: 0.85rem;
            color: var(--nike-gray);
            margin-bottom: 25px;
            line-height: 1.4;
        }

        .dob-input-container {
            position: relative;
        }

        .dob-input-container::after {
            content: "📅";
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.1rem;
            pointer-events: none;
        }

        /* Fix for mobile view */
        @media (max-width: 991px) {
            .mega-menu {
                position: relative;
                top: 0;
                max-height: none;
                padding: 15px;
            }

            .navbar .navbar-search input {
                width: 150px;
            }
        }

        /* Active nav link styling */
        .nav-link.active {
            color: var(--nike-accent) !important;
        }

        .nav-link.active::after {
            width: 100% !important;
            background-color: var(--nike-accent) !important;
        }

        /* Animation keyframes for pop-up effect */
        @keyframes popUp {
            0% {
                opacity: 0;
                transform: translateY(-100%);
            }

            70% {
                transform: translateY(5%);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Fixed navbar button hover effects */
        .navbar .btn-outline-dark {
            color: var(--nike-black);
            border-color: var(--nike-black);
            transition: all 0.3s ease;
        }

        .navbar .btn-outline-dark:hover {
            background-color: var(--nike-green);
            border-color: var(--nike-green);
            color: white !important;
            transform: scale(1.05);
        }

        .navbar .btn-outline-dark:hover .bi {
            color: white !important;
        }

        .navbar .btn-outline-dark .bi {
            color: var(--nike-black);
            transition: color 0.3s ease;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/imageslogo.jpg" alt="Shop Logo">
            </a>
            <!-- Toggle button for small screens -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#" id="menLink">Men</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" id="womenLink">Women</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" id="kidsLink">Kids</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" id="shoesLink">Shoes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" id="sportsLink">Sports</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" id="brandLink">Brand</a></li>
                </ul>

                <div class="d-flex align-items-center flex-wrap">
                    <form class="d-flex me-2 navbar-search" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search products" aria-label="Search">
                        <button class="btn btn-primary" id="search" type="submit">Search</button>
                    </form>
                    <div class="navbar-buttons d-flex align-items-center flex-wrap">
                        <button class="btn btn-outline-dark me-2 mb-1" type="button"><i class="bi bi-bell"></i></button>
                        <button class="btn btn-outline-dark me-2 mb-1" type="button"><i class="bi bi-cart"></i></button>
                        <button class="btn btn-outline-dark mb-1" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="images/imageslogo.jpg" alt="Balayan Smasher Logo" class="modal-logo">
                    <h5 class="modal-title" id="loginModalLabel">Sign in to Balayan Smasher</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Email Address">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Keep me signed in</label>
                        </div>
                        <button type="submit" class="btn btn-login mb-3">Sign In</button>
                        <div class="text-center">
                            <a href="#" class="forgot-password">Forgot your password?</a>
                        </div>
                        <div class="signup-link">
                            Not a member? <a href="#" data-bs-toggle="modal" data-bs-target="#signupModal" data-bs-dismiss="modal">Join now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Sign Up Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="images/imageslogo.jpg" alt="Balayan Smasher Logo" class="modal-logo">
                    <h5 class="modal-title" id="signupModalLabel">Sign up for Balayan Smasher</h5>
                    <p class="signup-subtitle">Sign in for Balayan Smasher emails to see<br>event contents, news and exclusive promos</p>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="signupEmail" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="signupEmail" placeholder="Email Address">
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Username">
                            </div>
                            <div class="col-md-6">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <div class="dob-input-container">
                                    <input type="text" class="form-control" id="dob" placeholder="08/20/2022">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Address">
                        </div>
                        <div class="mb-3">
                            <label for="signupPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="signupPassword" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-login">SIGN UP</button>
                        </div>
                        <div class="text-center small">
                            By signing up, you agree to Balayan Smasher's <a href="#" class="text-decoration-none">Privacy Policy</a> and <a href="#" class="text-decoration-none">Terms of Use</a>.
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Mega Menus -->
    <!-- Men Mega Menu -->
    <div id="menGrid" class="mega-menu">
        <div class="container">
            <div class="row">
                <!-- Featured -->
                <div class="col-md-3">
                    <h6>Featured</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Best Sellers</a></li>
                        <li><a href="#">On Sale</a></li>
                    </ul>
                </div>
                <!-- Clothing -->
                <div class="col-md-3">
                    <h6>Clothing</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Jersey</a></li>
                        <li><a href="#">Polo Shirts</a></li>
                        <li><a href="#">Jackets</a></li>
                        <li><a href="#">Shorts</a></li>
                        <li><a href="#">Socks</a></li>
                    </ul>
                </div>
                <!-- Shop by Sports -->
                <div class="col-md-3">
                    <h6>Shop by Sports</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Basketball</a></li>
                        <li><a href="#">Badminton</a></li>
                        <li><a href="#">Baseball</a></li>
                        <li><a href="#">Tennis</a></li>
                        <li><a href="#">Swimming</a></li>
                        <li><a href="#">Football</a></li>
                    </ul>
                </div>
                <!-- Accessories -->
                <div class="col-md-3">
                    <h6>Accessories & Equipment</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Helmets</a></li>
                        <li><a href="#">Goggles</a></li>
                        <li><a href="#">Water Bottles</a></li>
                        <li><a href="#">Bags</a></li>
                        <li><a href="#">Rackets</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Women Mega Menu -->
    <div id="womenGrid" class="mega-menu">
        <div class="container">
            <div class="row">
                <!-- Featured -->
                <div class="col-md-3">
                    <h6>Featured</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Best Sellers</a></li>
                        <li><a href="#">On Sale</a></li>
                    </ul>
                </div>
                <!-- Clothing -->
                <div class="col-md-3">
                    <h6>Clothing</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Sports Bras</a></li>
                        <li><a href="#">Leggings</a></li>
                        <li><a href="#">Tank Tops</a></li>
                        <li><a href="#">Shorts</a></li>
                        <li><a href="#">Jackets</a></li>
                    </ul>
                </div>
                <!-- Shop by Sports -->
                <div class="col-md-3">
                    <h6>Shop by Sports</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Yoga</a></li>
                        <li><a href="#">Running</a></li>
                        <li><a href="#">Tennis</a></li>
                        <li><a href="#">Swimming</a></li>
                        <li><a href="#">Gym & Training</a></li>
                    </ul>
                </div>
                <!-- Accessories -->
                <div class="col-md-3">
                    <h6>Accessories</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Headbands</a></li>
                        <li><a href="#">Yoga Mats</a></li>
                        <li><a href="#">Water Bottles</a></li>
                        <li><a href="#">Bags</a></li>
                        <li><a href="#">Hair Accessories</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Kids Mega Menu -->
    <div id="kidsGrid" class="mega-menu">
        <div class="container">
            <div class="row">
                <!-- Featured -->
                <div class="col-md-3">
                    <h6>Featured</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Best Sellers</a></li>
                        <li><a href="#">On Sale</a></li>
                    </ul>
                </div>
                <!-- Clothing -->
                <div class="col-md-3">
                    <h6>Clothing</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">T-Shirts</a></li>
                        <li><a href="#">Shorts</a></li>
                        <li><a href="#">Jackets</a></li>
                        <li><a href="#">Socks</a></li>
                        <li><a href="#">Swimwear</a></li>
                    </ul>
                </div>
                <!-- Shop by Sports -->
                <div class="col-md-3">
                    <h6>Shop by Sports</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Soccer</a></li>
                        <li><a href="#">Basketball</a></li>
                        <li><a href="#">Swimming</a></li>
                        <li><a href="#">Dance</a></li>
                        <li><a href="#">Gymnastics</a></li>
                    </ul>
                </div>
                <!-- Accessories -->
                <div class="col-md-3">
                    <h6>Accessories</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Backpacks</a></li>
                        <li><a href="#">Water Bottles</a></li>
                        <li><a href="#">Hats</a></li>
                        <li><a href="#">Balls</a></li>
                        <li><a href="#">Protective Gear</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Shoes Mega Menu -->
    <div id="shoesGrid" class="mega-menu">
        <div class="container">
            <div class="row">
                <!-- Featured -->
                <div class="col-md-3">
                    <h6>Featured</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Best Sellers</a></li>
                        <li><a href="#">On Sale</a></li>
                    </ul>
                </div>
                <!-- By Sport -->
                <div class="col-md-3">
                    <h6>By Sport</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Running</a></li>
                        <li><a href="#">Basketball</a></li>
                        <li><a href="#">Soccer</a></li>
                        <li><a href="#">Tennis</a></li>
                        <li><a href="#">Training</a></li>
                    </ul>
                </div>
                <!-- By Type -->
                <div class="col-md-3">
                    <h6>By Type</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Athletic</a></li>
                        <li><a href="#">Sandals</a></li>
                        <li><a href="#">Cleats</a></li>
                        <li><a href="#">Slip-ons</a></li>
                    </ul>
                </div>
                <!-- Accessories -->
                <div class="col-md-3">
                    <h6>Shoe Care</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Shoe Cleaners</a></li>
                        <li><a href="#">Shoe Laces</a></li>
                        <li><a href="#">Insoles</a></li>
                        <li><a href="#">Shoe Bags</a></li>
                        <li><a href="#">Storage</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Sports Mega Menu -->
    <div id="sportsGrid" class="mega-menu">
        <div class="container">
            <div class="row">
                <!-- Featured -->
                <div class="col-md-3">
                    <h6>Featured</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Best Sellers</a></li>
                        <li><a href="#">On Sale</a></li>
                    </ul>
                </div>
                <!-- Team Sports -->
                <div class="col-md-3">
                    <h6>Team Sports</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Basketball</a></li>
                        <li><a href="#">Soccer</a></li>
                        <li><a href="#">Baseball</a></li>
                        <li><a href="#">Volleyball</a></li>
                        <li><a href="#">Football</a></li>
                    </ul>
                </div>
                <!-- Individual Sports -->
                <div class="col-md-3">
                    <h6>Individual Sports</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Tennis</a></li>
                        <li><a href="#">Badminton</a></li>
                        <li><a href="#">Swimming</a></li>
                        <li><a href="#">Running</a></li>
                        <li><a href="#">Golf</a></li>
                    </ul>
                </div>
                <!-- Equipment -->
                <div class="col-md-3">
                    <h6>Equipment</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Balls</a></li>
                        <li><a href="#">Rackets</a></li>
                        <li><a href="#">Nets</a></li>
                        <li><a href="#">Goals</a></li>
                        <li><a href="#">Training Aids</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Brand Mega Menu -->
    <div id="brandGrid" class="mega-menu">
        <div class="container">
            <div class="row">
                <!-- Featured -->
                <div class="col-md-3">
                    <h6>Featured</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Best Sellers</a></li>
                        <li><a href="#">On Sale</a></li>
                    </ul>
                </div>
                <!-- Popular Brands -->
                <div class="col-md-3">
                    <h6>Popular Brands</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Nike</a></li>
                        <li><a href="#">Adidas</a></li>
                        <li><a href="#">Under Armour</a></li>
                        <li><a href="#">Puma</a></li>
                        <li><a href="#">Reebok</a></li>
                    </ul>
                </div>
                <!-- Sports Brands -->
                <div class="col-md-3">
                    <h6>Sports Brands</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Wilson</a></li>
                        <li><a href="#">Spalding</a></li>
                        <li><a href="#">Mikasa</a></li>
                        <li><a href="#">Molten</a></li>
                        <li><a href="#">Yonex</a></li>
                    </ul>
                </div>
                <!-- Accessory Brands -->
                <div class="col-md-3">
                    <h6>Accessory Brands</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Gatorade</a></li>
                        <li><a href="#">CamelBak</a></li>
                        <li><a href="#">Speedo</a></li>
                        <li><a href="#">Oakley</a></li>
                        <li><a href="#">Nike</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel -->
    <div id="carouselWithControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://scontent.fmnl4-6.fna.fbcdn.net/v/t39.30808-6/528606912_122164303472392515_5841549823835529491_n.jpg?stp=cp6_dst-jpg_tt6&_nc_cat=109&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeFFAWIZnSqRpTbPixURpsqDSns-POsxGJxKez486zEYnGvMfF8VCSg8kEGVEN1howQ6hdsh2RDECho6-0LTrY5S&_nc_ohc=poHtimc2iGUQ7kNvwEIIMAp&_nc_oc=Adlz1xuc17CliQtiXIgEFjfzFrkSrXEsO5ApP6kUr8LXhsCAS1M5pHQlk-i9pIfhRal_4HXQ8pFWVvnXIYEnRBzr&_nc_zt=23&_nc_ht=scontent.fmnl4-6.fna&_nc_gid=QlTnjreu_0U1R88ux0PkgQ&oh=00_AfZuOblxR7hIIUuHJV5982K87H19eF3NBU3bEvNOG1NL1g&oe=68E3D3CA" class="d-block w-100" alt="slide 1">
            </div>
            <div class="carousel-item">
                <img src="https://scontent.fmnl4-2.fna.fbcdn.net/v/t39.30808-6/528596440_122164303460392515_8277941324246145087_n.jpg?stp=cp6_dst-jpg_tt6&_nc_cat=101&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeFXqBwj0tY1RXQWW7WJa430jOpjAIOSxp6M6mMAg5LGnkAUlR66XvWdLaNf5-6VUDdMHKepPaS2HsOjHcreBxCs&_nc_ohc=hTQ38Yy1trsQ7kNvwE2MQMH&_nc_oc=AdnINgM34M2ll0tsaeDWJk-h2esbZJUsg8uTUrE_ynmVeTr9jKiPMBtBlwZPpaqht-DpLD1p8pQXKlYwQinozp-o&_nc_zt=23&_nc_ht=scontent.fmnl4-2.fna&_nc_gid=L70z39wME-40swWoSnS2Gg&oh=00_AfaAV283GBTc6UH4rCtotdswxEmMT5FoBIptMEB_gnO_ag&oe=68E3FC97" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="https://scontent.fmnl4-6.fna.fbcdn.net/v/t39.30808-6/528838596_122164303412392515_4812172137027919004_n.jpg?stp=cp6_dst-jpg_tt6&_nc_cat=107&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeHty2JmJsi1CBUcREKzExen35sO0CxiM8zfmw7QLGIzzLsEg7j40FodPrDDRvyxsRkA-tOlRg0GjjKqEdpkoueY&_nc_ohc=-HfTWhRxPHQQ7kNvwGi45qH&_nc_oc=Adm96p7rWplRBnCvTyHs1dTDtovDHnRoTxb24erQEAJNuETrU3PjeLh5D1Eo82uLywxB_nlc1K-ipHf4UZzEUBE9&_nc_zt=23&_nc_ht=scontent.fmnl4-6.fna&_nc_gid=nOhVtvCvylqMQHk8MGiXOQ&oh=00_AfZcOcqPIJ7YmQFdXOzF11prvc4at9TgbvCzwWHJqp0hxQ&oe=68E4041D" class="d-block w-100" alt="Slide 3">
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselWithControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselWithControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>

        <div class="carousel-fixed-text">
            <h1>Gear Up, Game On</h1>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
        // Get all navigation links and mega menus
        const navLinks = {
            menLink: document.getElementById('menLink'),
            womenLink: document.getElementById('womenLink'),
            kidsLink: document.getElementById('kidsLink'),
            shoesLink: document.getElementById('shoesLink'),
            sportsLink: document.getElementById('sportsLink'),
            brandLink: document.getElementById('brandLink')
        };

        const megaMenus = {
            menGrid: document.getElementById('menGrid'),
            womenGrid: document.getElementById('womenGrid'),
            kidsGrid: document.getElementById('kidsGrid'),
            shoesGrid: document.getElementById('shoesGrid'),
            sportsGrid: document.getElementById('sportsGrid'),
            brandGrid: document.getElementById('brandGrid')
        };

        const navbar = document.querySelector('.navbar');
        const navbarCollapse = document.getElementById('navbarNav');

        // Function to adjust mega menu position
        function adjustMegaMenuHeight() {
            const navbarHeight = navbar.offsetHeight;
            Object.values(megaMenus).forEach(menu => {
                menu.style.top = navbarHeight + 'px';
            });
        }

        // Function to close all mega menus
        function closeAllMegaMenus() {
            Object.values(megaMenus).forEach(menu => {
                menu.style.display = 'none';
            });
            Object.values(navLinks).forEach(link => {
                link.classList.remove('active');
                link.classList.remove('clicked');
            });
        }

        // Function to toggle a specific mega menu
        function toggleMegaMenu(linkId, menuId) {
            const isVisible = megaMenus[menuId].style.display === 'block';

            // Close all menus first
            closeAllMegaMenus();

            // If the clicked menu wasn't visible, show it
            if (!isVisible) {
                megaMenus[menuId].style.display = 'block';
                navLinks[linkId].classList.add('active');
                navLinks[linkId].classList.add('clicked');
                adjustMegaMenuHeight();

                // Remove the clicked class after animation completes
                setTimeout(() => {
                    navLinks[linkId].classList.remove('clicked');
                }, 300);
            }
        }

        // Add event listeners to all navigation links
        Object.keys(navLinks).forEach(linkId => {
            const menuId = linkId.replace('Link', 'Grid');
            navLinks[linkId].addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                toggleMegaMenu(linkId, menuId);
            });
        });

        // Close mega menus when clicking outside
        document.addEventListener('click', function(event) {
            let isClickInsideMegaMenu = false;
            Object.values(megaMenus).forEach(menu => {
                if (menu.contains(event.target)) {
                    isClickInsideMegaMenu = true;
                }
            });

            let isClickInsideNavLink = false;
            Object.values(navLinks).forEach(link => {
                if (link.contains(event.target)) {
                    isClickInsideNavLink = true;
                }
            });

            if (!isClickInsideMegaMenu && !isClickInsideNavLink) {
                closeAllMegaMenus();
            }
        });

        // Adjust menu position on window resize and load
        window.addEventListener('resize', adjustMegaMenuHeight);
        window.addEventListener('load', adjustMegaMenuHeight);

        // Adjust menu position when navbar is toggled (mobile)
        navbarCollapse.addEventListener('shown.bs.collapse', adjustMegaMenuHeight);
        navbarCollapse.addEventListener('hidden.bs.collapse', adjustMegaMenuHeight);

        // Close on window resize for mobile
        window.addEventListener('resize', function() {
            if (window.innerWidth < 992) {
                closeAllMegaMenus();
            }
        });
    </script>
</body>

</html>