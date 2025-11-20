<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield(section: 'title')</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
    <link rel="canonical" href="https://homedefender.net/"/>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="/frontend/my-img/logo/favicon.png">
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

     @if(View::hasSection('meta'))
    @yield('meta')
@elseif(View::hasSection('meta_description'))
    <meta name="description" content="@yield('meta_description')">
@endif
    @yield('structured_data')
    
 <script type="application/ld+json" class="rank-math-schema">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Place",
      "@id": "https://homedefender.net/#place",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Burke",
        "addressRegion": "Virginia",
        "postalCode": "22015",
        "addressCountry": "US"
      }
    },
    {
      "@type": "Organization",
      "@id": "https://homedefender.net/#organization",
      "name": "Home Defender",
      "url": "https://homedefender.net",
      "email": "Info@homedefender.net",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Burke",
        "addressRegion": "Virginia",
        "postalCode": "22015",
        "addressCountry": "US"
      },
      "logo": {
        "@type": "ImageObject",
        "@id": "https://homedefender.net/#logo",
        "url": "https://homedefender.net/frontend/my-img/logo_new.png",
        "caption": "Home Defender",
        "inLanguage": "en-US",
        "width": "450",
        "height": "150"
      },
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "telephone": "+1-888-447-6320",
          "contactType": "sales"
        },
        {
          "@type": "ContactPoint",
          "telephone": "+1-571-500-8149",
          "contactType": "sales"
        }
      ],
      "description": "Home Defender offers reliable smart home security solutions with 24/7 monitoring to protect your family. Get 3 Months of Free Monitoring! Call Now for Details.",
      "legalName": "marketingteamnextus@gmail.com",
      "location": {
        "@id": "https://homedefender.net/contact"
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://homedefender.net/#website",
      "url": "https://homedefender.net",
      "name": "Home Defender",
      "publisher": {
        "@id": "https://homedefender.net/"
      },
      "inLanguage": "en-US",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://homedefender.net/?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "ImageObject",
      "@id": "https://homedefender.net/wp-content/uploads/2020/06/service-01-770x500-1.webp?wsr",
      "url": "https://homedefender.net/wp-content/uploads/2020/06/service-01-770x500-1.webp?wsr",
      "width": "200",
      "height": "200",
      "inLanguage": "en-US"
    },
    {
      "@type": "WebPage",
      "@id": "https://homedefender.net/#webpage",
      "url": "https://homedefender.net/",
      "name": "Home Defender | Affordable Smart Home Security Solutions",
      "datePublished": "2020-05-21T03:20:11+00:00",
      "dateModified": "2025-08-27T18:59:24+00:00",
      "about": {
        "@id": "https://homedefender.net/about"
      },
      "isPartOf": {
        "@id": "https://homedefender.net/"
      },
      "primaryImageOfPage": {
        "@id": "https://homedefender.net/frontend/images/hero-bg-2.jpg"
      },
      "inLanguage": "en-US"
    }
  ]
}
</script>

</head>
<body>


    <!-- Header Start -->
	<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
					<a class="navbar-brand" href="/">
                        <img src="/frontend/my-img/logo/logo-2.png" alt="Logo" style="width:161px; height: 51px; object-fit:contain;">
                    </a>
					<!-- Logo End -->

					<!-- Main Menu Start -->
					<div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="/">Home</a>
                                </li>                                
                                <li class="nav-item"><a class="nav-link" href="/about">About Us</a>
                                <li class="nav-item"><a class="nav-link" href="/blogs">Blogs</a></li>
                                <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>                         
                            </ul>
                        </div>
                        
                        <!-- Header Btn Start -->
                        <div class="header-btn">
                            <a href="tel:1-888-447-6320" class="btn-default">Call Now</a>
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


@if(!Request::is('contact'))
    <!-- Popup Overlay -->
    <div id="promoPopup" class="promo-popup-overlay">
        <div class="promo-popup">
            <!-- Logo Centered -->
            <div class="popup-logo">
                <img src="/frontend/my-img/logo/logo-1.png" alt="Logo">
            </div>
            <span class="close-popup">&times;</span>
            <h2>Get <span style="color:#e60000;">3 Months FREE</span> Monitoring!</h2>
            <p>Call now and secure your home with our exclusive limited-time offer.</p>
            <div class="our-support-btn">
                <a href="tel:1-888-447-6320" class="btn-default">Contact Now</a>
            </div>
        </div>
    </div>
@endif

<script>
    // Show popup after 2 seconds
    setTimeout(function() {
        document.getElementById("promoPopup").style.display = "flex";
    }, 2000);

    // Close Popup
    document.querySelector(".close-popup").onclick = function () {
        document.getElementById("promoPopup").style.display = "none";
    };

    // Close when clicking outside the popup
    window.onclick = function (e) {
        if (e.target == document.getElementById("promoPopup")) {
            document.getElementById("promoPopup").style.display = "none";
        }
    };
</script>



<a href="tel:1-888-447-6320" class="call-now-btn">
    <i class="fa fa-phone"></i> Call Now
</a>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const callBtn = document.querySelector(".call-now-btn");
    const heroSection = document.querySelector(".hero");

    function toggleButton() {
        const heroBottom = heroSection.offsetTop + heroSection.offsetHeight;

        if (window.scrollY > heroBottom - 100) {
            callBtn.classList.add("show");
        } else {
            callBtn.classList.remove("show");
        }
    }

    window.addEventListener("scroll", toggleButton);
});
</script>



<button id="scrollTopBtn">
    <i class="fa fa-arrow-up"></i>
</button>


<script>
    const scrollTopBtn = document.getElementById("scrollTopBtn");

    // Show button when scrolling
    window.addEventListener("scroll", function () {
        if (window.scrollY > 200) {
            scrollTopBtn.style.display = "flex";
        } else {
            scrollTopBtn.style.display = "none";
        }
    });

    // Scroll to top smoothly
    scrollTopBtn.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>


    <!-- Main Footer Start -->
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Main Footer Box Start -->
                    <div class="main-footer-box">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <a href="/">
                                <img src="/frontend/my-img/logo/logo-1.png" alt="The Bookify Logo">
                            </a>
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
                                    <h3><a href="tel:18884476320">+1(888) 447-6320</a></h3>
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
                                    <h3>Jersey City, NJ 07097</h3>
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
                            <p>At <b class="heightlite">Home Defender</b> , we strive to deliver security products and monitoring systems that revolutionize the way people protect, monitor, and safeguard their homes and businesses.</p>
                        </div>
                        <!-- Footer Links End -->

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
                            <li><a href="/blogs">blogs</a></li>
                        </ul>
                    </div>
                    <!-- Footer Links End -->
                </div>

                <div class="col-lg-2 col-md-6">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>Support & Policies</h3>
                        <ul>
                            <li><a href="/contact">Contact Us</a></li>
                            <li><a href="/privacy-policy">Privacy Policy</a></li>
                            <li><a href="/terms-and-condition">Terms & condition</a></li>
                        </ul>
                    </div>
                    <!-- Footer Links End -->
                </div>

                <div class="col-lg-4 col-md-6">
                <!-- Newsletter Form Start -->
                <div class="newsletter-form footer-links">
                    <h3>Follow Us</h3>
                    <p>Stay updated with the latest security trends and offers by subscribing to our newsletter.</p>
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
