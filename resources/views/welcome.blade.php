<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Balayan Smasher Hub</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .navbar {
      background-color: #18c261ff;
    }
    .navbar .nav-link,
    .navbar .navbar-brand,
    .navbar .btn {
      color: #fff !important;
      font-weight: bold;
      transition: all 0.3s ease;
    }
    .navbar .nav-link:hover {
      color: #000 !important;
      transform: scale(1.1);
    }
    .navbar .btn:hover {
      background-color: #fff !important;
      color: #18c261ff !important;
      transform: scale(1.1);
    }
    .banner {
      position: relative;
      width: 100%;
      height: 90vh;
      background: url("{{ asset('images/bsh.png') }}") no-repeat center center/cover;
    }
    .banner-text {
      position: absolute;
      bottom: 70px;
      left: 40px;
      font-size: 2.5rem;
      font-weight: bold;
      color: white;
      text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
      transition: transform 0.4s ease, color 0.4s ease;
    }
    .banner-text:hover {
      transform: scale(1.05);
      color: #18c261ff;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="{{ asset('images/imageslogo.jpg') }}" alt="Logo" style="height:50px; margin-top: 2px;">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="#">MEN</a></li>
          <li class="nav-item"><a class="nav-link" href="#">WOMEN</a></li>
          <li class="nav-item"><a class="nav-link" href="#">KIDS</a></li>
          <li class="nav-item"><a class="nav-link" href="#">SHOES</a></li>
          <li class="nav-item"><a class="nav-link" href="#">BRANDS</a></li>
        </ul>

        <form class="d-flex align-items-center gap-3">
          <input class="form-control rounded-pill" type="search" placeholder="Search..." aria-label="Search">
          <span style="cursor:pointer; transition:0.3s;" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'">🛒</span>
          <span style="cursor:pointer; transition:0.3s;" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'">🔔</span>
          <a href="#" class="btn btn-outline-light btn-sm">Sign In</a>
        </form>
      </div>
    </div>
  </nav>

  <div class="banner">
    <div class="banner-text">Gear Up, Game On</div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
