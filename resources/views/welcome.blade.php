<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balayan Smasher Hub</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url(images/imageslogo.jpg) ;
            background-size: cover;
        }

        /* Header */
        header {
            background: #2e8b57; /* green header */
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 30px;
        }

        header img.logo {
            height: 50px;
        }

        nav {
            flex: 1;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .search-box {
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
        }

        /* Banner */
        .banner {
            position: relative;
            width: 100%;
            height: 90vh;
            background: url("/images/bsh.png") no-repeat center center/cover;
        }

        .banner-text {
            position: absolute;
            bottom: 40px;
            left: 40px;
            font-size: 2.5rem;
            font-weight: bold;
            color: white;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
        }
    </style>
</head>
<body>
    <header>
        <!-- Logo -->
        <img src="images/imageslogo.jpg" alt="Logo" class="logo">

        <!-- Navigation -->
        <nav>
            <a href="#">MEN</a>
            <a href="#">WOMEN</a>
            <a href="#">KIDS</a>
            <a href="#">SHOES</a>
            <a href="#">BRANDS</a>
        </nav>

        <!-- Search + Icons -->
        <div class="header-actions">
            <input type="text" class="search-box" placeholder="Search...">
            <span>🛒</span>
            <span>🔔</span>
            <a href="#" style="color:white;">Sign In</a>
        </div>
    </header>

    <!-- Banner Section -->
    <div class="banner">
        <div class="banner-text">Gear Up, Game On</div>
    </div>

    <script>
        // Example: JS for search box focus
        document.querySelector(".search-box").addEventListener("focus", function(){
            this.style.borderColor = "#2e8b57";
        });
    </script>
</body>
</html>
