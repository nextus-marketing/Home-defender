<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="description" content="">
    <title>@yield(section: 'title')</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="/frontend/images/favicon.png">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="/frontend/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="/frontend/css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css">
	<!-- Font Awesome Icon Css-->
	<link href="/frontend/css/all.min.css" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="/frontend/css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="/frontend/css/magnific-popup.css">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="/frontend/css/mousecursor.css">
	<!-- Main Custom Css -->
	<link href="/frontend/css/custom.css" rel="stylesheet" media="screen">
    <!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="/frontend/css/my.css">
</head>
<body>

    <!-- Preloader Start -->
	<!-- <div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="/frontend/images/loader.svg" alt=""></div>
		</div>
	</div> -->
	<!-- Preloader End -->

    <!-- Header Start -->
	<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
					<a class="navbar-brand" href="/">
                        <img src="/frontend/my-img/logo_new.png" alt="Logo" style="width:161px; height: 51px; object-fit:contain;">
                    </a>
					<!-- Logo End -->

					<!-- Main Menu Start -->
					<div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="/">Home</a>
                                </li>                                
                                <li class="nav-item"><a class="nav-link" href="/about">About Us</a>
                                <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>                         
                            </ul>
                        </div>
                        
                        <!-- Header Btn Start -->
                        <div class="header-btn">
                            <a href="/contact" class="btn-default">get a quote</a>
                        </div>
                        <!-- Header Btn End -->
					</div>
					<!-- Main Menu End -->
					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->

@yield(section: 'content')

    <!-- Main Footer Start -->
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Main Footer Box Start -->
                    <div class="main-footer-box">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="/frontend/images/footer-logo.svg" alt="">
                        </div>
                        <!-- Footer Logo End -->
                        
                        <!-- Footer Contact Details Start -->
                        <div class="footer-contact-details">
                            <!-- Footer Contact Item Start -->
                            <div class="footer-contact-item">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-phone.svg" alt="">
                                </div>
                                <div class="footer-contact-item-content">
                                    <p>phone number</p>
                                    <h3><a href="tel:1-888-447-6320">+(1) 888 447 6320</a></h3>
                                </div>
                            </div>
                            <!-- Footer Contact Item End -->

                            <!-- Footer Contact Item Start -->
                            <div class="footer-contact-item">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-mail.svg" alt="">
                                </div>
                                <div class="footer-contact-item-content">
                                    <p>email address</p>
                                    <h3><a href="mailto:info@homedefender.net">info@homedefender.net</a></h3>
                                </div>
                            </div>
                            <!-- Footer Contact Item End -->

                            <!-- Footer Contact Item Start -->
                            <div class="footer-contact-item">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-location.svg" alt="">
                                </div>
                                <div class="footer-contact-item-content">
                                    <p>location</p>
                                    <h3> Burke VA, 22015</h3>
                                </div>
                            </div>
                            <!-- Footer Contact Item End -->
                        </div>
                        <!-- Footer Contact Details End --> 
                    </div>
                    <!-- Main Footer Box End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Links Start -->
                        <div class="footer-links">
                            <h3>About Solutions</h3>
                            <p>At <b>Home Defender</b> , we strive to deliver security products and monitoring systems that revolutionize the way people protect, monitor, and safeguard their homes and businesses.</p>
                        </div>
                        <!-- Footer Links End -->

                        <!-- Footer Social Links Start -->
                        <div class="footer-social-links">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>                                    								
                            </ul>
                        </div>
                        <!-- Footer Social Links End -->
                    </div>
                    <!-- About Footer End -->               
                </div>

                <div class="col-lg-2 col-md-6">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>Quick link</h3>
                        <ul>
                            <li><a href="/">home</a></li>
                            <li><a href="/about">about us</a></li>
                            <li><a href="/services">services</a></li>
                            <li><a href="/blog">blog</a></li>
                        </ul>
                    </div>
                    <!-- Footer Links End -->
                </div>

                <div class="col-lg-2 col-md-6">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>Support & Policies</h3>
                        <ul>
                            <li><a href="#0">Contact Us</a></li>
                            <li><a href="#0">Privacy Policy</a></li>
                            <li><a href="#0">Terms & condition</a></li>
                        </ul>
                    </div>
                    <!-- Footer Links End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Newsletter Form Start -->
                    <div class="newsletter-form footer-links">
                        <h3>Subscribe</h3>
                        <p>Stay updated with the latest security trends offers by subscribing to our newsletter.</p>
                        <form id="newsletterForm" action="#" method="POST">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="mail" placeholder="Enter Your Email" required="">
                                <button type="submit" class="newsletter-btn"><i class="fa-regular fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- Newsletter Form End -->
                </div>
            </div>
        </div>

        <!-- Footer Copyright Start -->
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Footer Copyright Text Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright © 2025 All Rights Reserved.</p>
                        </div>
                        <!-- Footer Copyright Text End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copyright End -->
    </footer>
    <!-- Main Footer End -->

    <!-- Jquery Library File -->
    <script src="/frontend/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="/frontend/js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="/frontend/js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="/frontend/js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="/frontend/js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="/frontend/js/jquery.waypoints.min.js"></script>
    <script src="/frontend/js/jquery.counterup.min.js"></script>
    <!-- Isotop js file -->
	<script src="/frontend/js/isotope.min.js"></script>
    <!-- Magnific js file -->
    <script src="/frontend/js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="/frontend/js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="/frontend/js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="/frontend/js/gsap.min.js"></script>
    <script src="/frontend/js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="/frontend/js/SplitText.js"></script>
    <script src="/frontend/js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="/frontend/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="/frontend/js/wow.min.js"></script>
    <!-- Main Custom js file -->
    <script src="/frontend/js/function.js"></script>
</body>
</html>