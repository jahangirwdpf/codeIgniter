<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../public/assetF/images/favicon.png" type="image/gif" />
  <title>Bachelor Point</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../public/assetF/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- lightbox Gallery-->
  <link rel="stylesheet" href="../public/assetF/css/ekko-lightbox.css" />

  <!-- font awesome style -->
  <link href="../public/assetF/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../public/assetF/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../public/assetF/css/responsive.css" rel="stylesheet" />
</head>
<body>
<!-- header section strats -->
<header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.html">
          <span style="color: #3A3F58";>
            Bachelor Point
          </span>
        </a>
        <div class="" id="">

          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="./">Home</a>
                <a href="about">About</a>
                <a href="gallery">Gallery</a>
                <a href="contact">Contact</a>
                <a href="">Service</a>
                <a href="">Blog</a>
                <a href="login">Login</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->
    <?= $this->renderSection('content')?>
</body>
<!-- jQery -->
<script src="../public/assetF/js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="../public/assetF/js/bootstrap.js"></script>
  <!-- lightbox Gallery-->
  <script src="../public/assetF/js/ekko-lightbox.min.js"></script>
  <!-- custom js -->
  <script src="../public/assetF/js/custom.js"></script>
</html>

