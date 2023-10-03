<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url("public/assets/css/bootstrap.min.css");?>" rel="stylesheet";>
    <title>CodeIgniter Project</title>
</head>
<body>
    <div class="container-fluid bg-white p-0">
    <!-- Header Start -->
    <div class="container-fluid px-0" style="background-color: #003D59;">
        <div class="row gx-0">
            <div class="col-lg-5 d-none d-lg-block">
                <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 text-uppercase" style="font-size: 35px; color: #FE9E3B; font-weight: bold;">Bachelor Point</h1>
                </a>
            </div>
            <div class="col-lg-7">
                <div class="row gx-0 bg-white d-none d-lg-flex">
                    <div class="col-lg-8 px-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center py-2 me-4" style="font-size: 15px; font-weight: bold;">
                            <i class="fa fa-envelope me-2" style="font-size: 15px; font-weight: bold; color: #FE9E3B;">
                            <p class="mb-0">jahangirwdpf@gmail.com</p>
                            </i>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2" style="font-size: 15px; font-weight: bold;">
                            <i class="fa fa-phone-alt me-2" style="font-size: 15px; font-weight: bold; color: #FE9E3B;">
                            <p class="mb-0">+88 017272-80318</p>
                            </i>
                        </div>
                    </div>
                    <div class="col-lg-4 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-2">
                            <a class="me-3" style="font-size: 15px; font-weight: bold; color: #FE9E3B;" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="me-3" style="font-size: 15px; font-weight: bold; color: #FE9E3B;" href=""><i class="fab fa-twitter"></i></a>
                            <a class="me-3" style="font-size: 15px; font-weight: bold; color: #FE9E3B;" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="me-3" style="font-size: 15px; font-weight: bold; color: #FE9E3B;" href=""><i class="fab fa-instagram"></i></a>
                            <a class="" style="font-size: 15px; font-weight: bold; color: #FE9E3B;" href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg navbar-dark px-3 p-lg-0" style="color: #003D59;">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 text-uppercase" style="font-size: 30px; color: #FE9E3B; font-weight: bold;">Green Cordial School</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a routerLink="/" class="nav-item nav-link active" style="font-weight: bold;">Home</a>
                            <a routerLink="" class="nav-item nav-link" style="font-weight: bold;">About US</a>
                            <a routerLink="/" class="nav-item nav-link" style="font-weight: bold;">Academic</a>
                            <a routerLink="/" class="nav-item nav-link" style="font-weight: bold;">Gallary</a>
                            <div class="nav-item dropdown">
                                <a routerLink="/" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="font-weight: bold;">Panel Login</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a routerLink="form" class="dropdown-item">Admin Login</a>
                                    <a routerLink="form-teacher" class="dropdown-item">Teachers Login</a>
                                    <a routerLink="form-st" class="dropdown-item">Student Login</a>
                                </div>
                            </div>
                            <a routerLink="add" class="nav-item nav-link" style="font-weight: bold;">Online Apply</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    
    <?= $this->renderSection('content')?>
</body>
<script src= "<?= base_url("public/assets/js/bootstrap.bundle.min.js");?>"></script>
</html>

