<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DOT.NET - Digital Agency Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-white position-relative">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="index.html" class="navbar-brand text-secondary">
                <h1 class="display-4 text-uppercase">VEDATRIX</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0 pr-3 border-right">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Services</a>
                    <a href="price.html" class="nav-item nav-link">Prices</a>
                    <a href="project.html" class="nav-item nav-link">Projects</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="team.html" class="dropdown-item">Meat The Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-none d-lg-flex align-items-center pl-4">
                    <i class="fa fa-2x fa-mobile-alt text-primary mr-3"></i>
                    <div>
                        <h6 class="text-body text-uppercase mb-1"><small>Call Anytime</small></h6>
                        <h6 class="m-0">+91 9901568368</h6>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 px-0" style="margin-bottom: 90px;">
        <div class="row mx-0 align-items-center">
            <div class="col-lg-6 px-md-5 text-center text-lg-left">
                <h1 class="display-2 text-uppercase mb-3">Web Designing and Development Company</h1>
                <p class="text-dark mb-4">We are industry leading web designing and 
                    development company in Bidar
                </p>
                <a href="" class="btn btn-dark text-uppercase mt-1 py-3 px-5">Learn More</a>
            </div>
            <div class="col-lg-6 px-0 text-right">
                <img class="img-fluid mt-5 mt-lg-0" src="img/header.png" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <?= $this->renderSection('content') ?>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 mt-n2 text-white display-4">DOT.NET</h1>
                </a>
                <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
                <h6 class="text-uppercase text-white py-2">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-white mb-4">Get In Touch</h4>
                <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
                <p><i class="fa fa-map-marker-alt text-white mr-2"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt text-white mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope text-white mr-2"></i>info@example.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-white mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Home</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>About Us</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Our Services</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Pricing Plan</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Meet The Team</a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-white mb-4">Newsletter</h4>
                <p class="mb-4">Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
                <div class="w-100 mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary text-uppercase px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
                <i>Lorem sit sed elitr sed kasd et</i>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
        <p class="mb-2 text-center text-white-50">&copy; <a href="#">Your Site Name</a>. All Rights Reserved.</p>
        <p class="m-0 text-center text-white-50">Designed by <a href="https://htmlcodex.com">HTML Codex</a></p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

