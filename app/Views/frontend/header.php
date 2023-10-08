<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="icon" href="<?= base_url() ?>assetF/images/favicon.png" type="image/gif" /> 
  <title>Bachelor Point</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assetF/css/bootstrap.css" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- font awesome style -->
  <link href="<?= base_url() ?>assetF/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?= base_url() ?>assetF/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?= base_url() ?>assetF/css/responsive.css" rel="stylesheet" />
</head>
<body>
  <!-- header section strats -->
  <header class="header_section innerpage_header">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.html">
          <span>
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

  <!-- jQery -->
  <script src="<?= base_url() ?>assetF/js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="<?= base_url() ?>assetF/js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="<?= base_url() ?>assetF/js/custom.js"></script>
</body>
</html>