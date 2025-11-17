@extends('layouts.frontend')
@section('title') Home Defender | Affordable Smart Home Security Solutions @endsection
@section('content')
<style>
   .why-choose-us {
    padding: 10px 0;
}
.our-support.about-support {
    background: transparent;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
}
.our-testimonials {
    padding: 10px 0;
}
</style>
    <!-- Hero Section Start -->
    <div class="hero dark-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">welcome to home defender</h3>
                            <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">We Are Your Solutions</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Creating a smart Surveillance for the present and future</p>
                        </div>
                        <div class="hero-body wow fadeInUp" data-wow-delay="0.6s">
                            <div class="hero-btn">
                                <a href="tel:1-888-447-6320" class="btn-default">Contact Us</a>
                            </div>
                            <!-- Hero Button End -->

                            <!-- Video Play Button Start -->
                            <div class="hero-body wow fadeInUp" data-wow-delay="0.6s">
                                <div class="hero-btn">
                                <a href="/contact" class="btn-default">Send Enquiry</a>
                            </div>
                            </div>
                            <!-- Video Play Button End -->
                        </div>
                        <!-- Hero Content Body End -->
                    </div>
                    <!-- Hero Content Box End -->
                </div>

                <div class="col-lg-6">
                    <div class="hero-image">
                        <figure>
                            <img src="/frontend/images/hero-image.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <style>
   .call-now-btn {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    transition: 0.4s ease;
}

.call-now-btn.show {
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
}

    </style>

    <!-- Best Service Section Start -->
    <div class="best-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Best Service Box Start -->
                    <div class="best-services-box">
                        <!-- Best Service Item Start -->
                        <div class="best-service-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-best-service-1.svg" alt="">
                            </div>
                            <div class="best-service-item-content">
                                <h3>Premium Indoor Cameras</h3>
                            </div>
                        </div>
                        <!-- Best Service Item End -->

                        <!-- Best Service Item Start -->
                        <div class="best-service-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-best-service-2.svg" alt="">
                            </div>
                            <div class="best-service-item-content">
                                <h3>24/7 Quick Alarms Response</h3>
                            </div>
                        </div>
                        <!-- Best Service Item End -->

                        <!-- Best Service Item Start -->
                        <div class="best-service-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-best-service-3.svg" alt="">
                            </div>
                            <div class="best-service-item-content">
                                <h3>Amazing Security Systems</h3>
                            </div>
                        </div>
                        <!-- Best Service Item End -->
                    </div>
                    <!-- Best Service Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Best Service Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">We Provides</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>When you need, </span> better security installation</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="why-choose-box">
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-why-choose-1.svg" alt="">
                            </div>
                            <div class="why-choose-item-content">
                                <h3><span class="heightlite">Video Surveillance</span>
                                    Reliable and Proven</h3>
                                <p>We provide the best latest technology of equipment and our staff are available in 24/7 at clients call.</p>
                            </div>
                        </div>
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-why-choose-2.svg" alt="">
                            </div>
                            <div class="why-choose-item-content">
                                <h3><span class="heightlite">Security Professional</span>
                                Experts and Staff</h3>
                                <p> We provide the best latest technology of equipment and our staff are available in 24/7 at clients call.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="why-choose-image">
                        <figure>
                            <img src="/frontend/images/why-choose-image.png" alt="">
                        </figure>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="why-choose-box">
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-why-choose-3.svg" alt="">
                            </div>
                            <div class="why-choose-item-content">
                                <h3><span class="heightlite">Security Professional</span>
                                Experts and Staff</h3>
                                <p>We provide the best latest technology of equipment and our staff are available in 24/7 at clients call.</p>
                            </div>
                        </div>
                        <div class="why-choose-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-why-choose-4.svg" alt="">
                            </div>
                            <div class="why-choose-item-content">
                                <h3><span class="heightlite">Our Security Service</span>
                                24/7 Support</h3>
                                <p>We provide the best latest technology of equipment and our staff are available in 24/7 at clients call.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- What We Do Section Start -->
    <div class="what-we-do dark-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- What We Do Content Start -->
                    <div class="what-we-do-content">
                        <!-- Section Title Start -->
                        <div class="section-title section-title-center">
                            <h3 class="wow fadeInUp">what we do</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>Delivering trusted </span>security and surveillance</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">At our core, we are dedicated to delivering trusted security and surveillance solutions that provide peace of mind for homes and businesses alike. Our expertise spans from the installation of advanced CCTV systems.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.6s">We understand that every property is unique, which is why we offer tailored solutions designed to meet your specific needs. Our state-of-the-art technology ensures high-definition video, reliable performance, and seamless connectivity, empowering you to monitor and protect your property at all times.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Need Help Box Start -->
                        <div class="about-need-help wow fadeInUp" data-wow-delay="0.8s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-need-help.svg" alt="">
                            </div>
                            <div class="need-help-content">
                                <p>Call for Any Kind Of Services</p>
                                <h3><a href="tel:+15714501674">+(1) 571 - 450 - 1674</a></h3>
                            </div>
                        </div>
                        <!-- About Need Help Box End -->
                    </div>
                    <!-- What We Do Content End -->                    
                </div>

                <div class="col-lg-6">
                    <!-- What We Counter Image Start -->
                    <div class="what-we-counter-image">                       
                        <!-- What We Counter Box Start -->
                        <div class="what-we-counter-box">
                            <!-- What We Counter Item Start -->
                            <div class="what-we-counter-item">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-what-we-counter-1.svg" alt="">
                                </div>
                                <div class="what-we-counter-item-content">
                                    <h3><span class="counter">450</span>+</h3>
                                    <p>Give development of security for home and offices complexity</p>
                                </div>
                            </div>
                            <!-- What We Counter Item End -->

                            <!-- What We Counter Item Start -->
                            <div class="what-we-counter-item">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-what-we-counter-2.svg" alt="">
                                </div>
                                <div class="what-we-counter-item-content">
                                    <h3><span class="counter">875</span>+</h3>
                                    <p>We are ready to give you security service in reasonable price</p>
                                </div>
                            </div>
                            <!-- What We Counter Item End -->
                        </div>
                        <!-- What We Counter Box End -->

                        <!-- What We Image Start -->
                        <div class="what-we-image">
                            <figure>
                                <img src="/frontend/images/what-we-image.jpg" alt="">
                            </figure>
                        </div>
                        <!-- What We Image End -->
                    </div>
                    <!-- What We Counter Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- What We Do Section End -->


    <!-- Our Services Section Start -->
    <div class="our-services">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">What We Provide</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>We Provide Awesome </span> Expert Security Service</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp">
                        <div class="service-image">
                            <a href="#0" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/frontend/my-img/private-security.jpg" alt="">
                                </figure>
                            </a>                            
                        </div>
                        <div class="service-body">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-service-item-1.svg" alt="">
                            </div>        
                            <div class="service-content">
                                <h3><a href="#0">Private Security</a></h3>
                                <p>Give the best quality of security systems and facility of latest technology for the people get security.</p>
                            </div>                  
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-image">
                            <a href="#0" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/frontend/my-img/bank.jpg" alt="">
                                </figure>
                            </a>                            
                        </div>
                        <div class="service-body">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-service-item-2.svg" alt="">
                            </div>        
                            <div class="service-content">
                                <h3><a href="#0">Banking Sector</a></h3>
                                <p>Give the best quality of security systems and facility of latest technology for the people get security.</p>
                            </div>                      
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-image">
                            <a href="#0" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/frontend/my-img/school.jpg" alt="">
                                </figure>
                            </a>                            
                        </div>
                        <div class="service-body">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-service-item-3.svg" alt="">
                            </div>        
                            <div class="service-content">
                                <h3><a href="#0">Education Institute</a></h3>
                                <p>Give the best quality of security systems and facility of latest technology for the people get security.</p>
                            </div>                       
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="1.2s">
                        <p><span>Free</span>
                        </br>
                        Let's make something great work together.<a href="/contact">get a quote</a></p>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <!-- Our Services Section End -->


    <!-- Our Support Section Start -->
    <div class="our-support about-support">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="our-support-images">
                        <div class="our-support-image box-1">
                            <figure class="image-anime reveal">
                                <img src="/frontend/images/support-image-1.jpg" alt="">
                            </figure>
                        </div>
                        <div class="our-support-image box-2">
                            <figure class="image-anime reveal">
                                <img src="/frontend/images/support-image-2.jpg" alt="">
                            </figure>
                        </div>
                        <div class="our-support-circle">
                            <a href="/contact"><img src="/frontend/images/contact-now-circle-2.svg" alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="our-support-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Let's Explore</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>Performance That </span>Stands Apart </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Our dedicated technical support team is available around the clock to ensure your security systems operate flawlessly.</p>
                        </div>
                        <div class="our-support-body wow fadeInUp" data-wow-delay="0.6s">
                            <div class="support-item" >
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-support-item-1.svg" alt="">
                                </div>
                                <div class="support-item-content">
                                    <h3>Quality</h3>
                                    <p>Unparalleled performance and reliability, the ultimate monitoring solution.</p>
                                </div>
                            </div>
                            <div class="support-item" >
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-support-item-2.svg" alt="">
                                </div>
                                <div class="support-item-content">
                                    <h3>Reliability</h3>
                                    <p>Unleash unparalleled reliability with our security & monitoring product.</p>
                                </div>
                            </div>
                            <div class="support-item" >
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-support-item-2.svg" alt="">
                                </div>
                                <div class="support-item-content">
                                    <h3>Unmatched Performance</h3>
                                    <p>Delivering seamless protection and real-time surveillance like never before.</p>
                                </div>
                            </div>
                        </div>
                        <div class="our-support-btn wow fadeInUp" data-wow-delay="0.8s">
                            <a href="/contact" class="btn-default">contact now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Support Section End -->


    <!-- CTA Box Section Start -->
    <div class="cta-box dark-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="cta-box-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact us</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>Get Connected to  </span>Home Defender Experts Near You!</h2>
                        </div>
                        <div class="cta-box-body wow fadeInUp" data-wow-delay="0.6s">
                            <div class="cta-box-item">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-phone.svg" alt="">
                                </div>
                                <div class="cta-box-item-content">
                                    <p>Smart Security,Best Engineers</p>
                                    <h3><a href="tel:1-888-447-6320">+(1) 888 447 6320</a></h3>
                                </div>
                            </div>
                            <div class="cta-box-item">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-phone.svg" alt="">
                                </div>
                                <div class="cta-box-item-content">
                                    <p>Safe & Trusted Company</p>
                                    <h3><a href="tel:1-888-447-6320">+(1) 888 447 6320</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="cta-box-image">
                        <img src="/frontend/images/cta-box-image.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Box Section End -->


    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us /frontend/Images Start -->
                    <div class="about-us-images">
                        <!-- About Image 1 Start -->
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="/frontend/my-img/monitoring.jpg" alt="">
                            </figure>
    
                        </div>
                        <!-- About Image 1 End -->
               
                    </div>
                    <!-- About Us /frontend/Images End -->
                </div>

                <div class="col-lg-6">
                    <!-- Hero Content Box Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">We Provide</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>Latest Monitoring </span> Systems</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">We provide a latest and modern technology of security equipment. Our focus on give best security systems. Always helping experts for your security.</p>
                        </div>
                        <!-- Section Title End -->
                        </div>
                        <!-- About Experience Box End -->

                        <!-- About Us Body Start -->
                        <div class="about-us-body wow fadeInUp" data-wow-delay="0.8s">
                            <!-- About Contact Box Start -->
                            <div class="about-contact-box">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-about-contact.svg" alt="">
                                </div>
                                <div class="about-contact-box-content">
                                    <p>Call Directly 24/7</p>
                                    <h3><a href="tel:1-888-447-6320">+(1) 888- 447 6320</a></h3>
                                </div>
                            </div>
                            <!-- About Contact Box End -->

                            <!-- About Contact Button Start -->
                            <div class="about-us-btn">
                                <a href="tel:1-888-447-6320" class="btn-default">Call Now</a>
                            </div>
                            <!-- About Contact Button End -->
                        </div>
                        <!-- About Us Body End -->
                    </div>
                    <!-- Hero Content Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->


    <!-- Our Feature Section Start -->
    <div class="our-feature dark-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our Partners</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>Get Free
                        </span>Consultancy</h2>
                    </div>
                </div>

                <div class="col-lg-6 col-md-4">
                    <div class="contact-now-circle">
                        <a href="#0"><img src="/frontend/images/contact-now-circle.svg" alt=""></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="our-feature-box">
                        <div class="feature-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="/frontend/my-img/client-01.png" alt="">
                            </div>
                        </div>
                        <div class="feature-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="/frontend/my-img/client-03.webp" alt="">
                            </div>
                        </div>
                        <div class="feature-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="/frontend/my-img/client-04.webp" alt="">
                            </div>
                        </div>
                        <div class="feature-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="/frontend/my-img/client-05.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Feature Section End -->

    <!-- Our Commitment Section Start -->
    <div class="our-commitment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us /frontend/Images Start -->
                    <div class="about-us-images">
                        <!-- About Image 1 Start -->
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="/frontend/my-img/compresive.jpg" alt="">
                            </figure>
    
                        </div>
                        <!-- About Image 1 End -->
               
                    </div>
                    <!-- About Us /frontend/Images End -->
                </div>

                <div class="col-lg-6">
                    <div class="our-commitment-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Our Commitment</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>Comprehensive Home Security </span> for Every Homeowner</h2>
                        </div>
                    </div>
                   
                    <div class="commitment-list wow fadeInUp" data-wow-delay="0.6s">
                        <ul>
                            <li>Smart Doorbell Cameras</li>
                            <li>Door & Window Sensors</li>
                            <li>Comprehensive Security Systems</li>
                            <li>24/7 Monitoring & Emergency Response</li>
                            <li>Affordable Solutions for Every Budget</li>
                        </ul>
                    </div>
                    <div class="about-us-btn" style="margin-top: 30px;">
                        <a href="tel:1-888-447-6320" class="btn-default">Call Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Commitment Section End -->

    <!-- CTA Box Section Start -->
    <div class="cta-box dark-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="cta-box-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact us</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Tailored<span> Home Security Solutions </span></h2>
                            <p>From doorbell cameras to full home security systems, Prime Home Safety offers a wide range of services to keep your home safe and secure. Our network of trusted professionals ensures high-quality installations and ongoing support.</p>
                        </div>
                        <div class="cta-box-body wow fadeInUp" data-wow-delay="0.6s">
                            <div class="cta-box-item">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-phone.svg" alt="">
                                </div>
                                <div class="cta-box-item-content">
                                    <p>Contact Us</p>
                                    <h3><a href="tel:1-888-447-6320">+(1) 888 447 6320</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="cta-box-image">
                        <img src="/frontend/my-img/security-person.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Box Section End -->
<div class="page-services">
    <div class="container">
        <div class="row justify-content-center">
        
            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp">
                    <div class="service-image">
                        <a href="#0" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="/frontend/images/service-image-1.jpg" alt="">
                            </figure>
                        </a>
                    </div>

                    <div class="service-body">
                        <div class="service-content">
                            <h3><a href="#0">Home Security Systems Installation</a></h3>
                            <p>Comprehensive protection for your home with advanced security systems.</p>
                        </div>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-image">
                        <a href="#0" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="/frontend/my-img/door-bell.jpg" alt="">
                            </figure>
                        </a>
                    </div>

                    <div class="service-body">
                        <div class="service-content">
                            <h3><a href="#0">Smart Doorbell Camera Installation</a></h3>
                            <p>Monitor your front door from anywhere with our state-of-the-art doorbell cameras.</p>
                        </div>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-image">
                        <a href="#0" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="/frontend/my-img/sensors.jpg" alt="">
                            </figure>
                        </a>
                    </div>

                    <div class="service-body">
                        <div class="service-content">
                            <h3><a href="#0">Door & Window Sensors</a></h3>
                            <p>Enhance your home security with reliable door and window sensors.</p>
                        </div>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-image">
                        <a href="#0" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="/frontend/my-img/watching.jpg" alt="">
                            </figure>
                        </a>
                    </div>

                    <div class="service-body">
                        <div class="service-content">
                            <h3><a href="#0">24/7 Monitoring Services</a></h3>
                            <p>Round-the-clock monitoring to keep your home safe at all times.</p>
                        </div>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-image">
                        <a href="#0" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="/frontend/my-img/home-integration.jpg" alt="">
                            </figure>
                        </a>
                    </div>

                    <div class="service-body">
                        <div class="service-content">
                            <h3><a href="#0">Smart Home Integration</a></h3>
                            <p>We provide professional CCTV installation services offering high-quality cameras.</p>
                        </div>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

        </div>
    </div>
</div>

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-us-images">
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="/frontend/images/about-img-1.jpg" alt="">
                            </figure>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-us-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">We Provide</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>Secure Your Home with </span> Expert-Backed Protection</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">We provide a latest and modern technology of security equipment. Our focus on give best security systems. Always helping experts for your security.</p>
                        </div>
                        <div class="commitment-list wow fadeInUp" data-wow-delay="0.6s">
                        <ul>
                            <li>New Homeowners</li>
                            <li>Relocating Homeowners</li>
                            <li>Second Homeowners</li>
                            <li>Upgrading Existing Security</li>
                        </ul>
                    </div>
                    </br>
                        </div>
                        <div class="about-us-btn" style="margin-top:20px;">
                            <a href="tel:1-888-447-6320" class="btn-default">Call Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

<!-- Our Testimonials Section Start -->
<!-- Our Testimonials Section Start -->
<div class="our-testimonials pt-5">
    <div class="container">

        <!-- SECTION TITLE -->
        <div class="row section-row">
            <div class="col-lg-12">
                <div class="section-title section-title-center">
                    <h3 class="wow fadeInUp">Resources</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                        Get Connected to <span>Home Defender Experts Near You!</span>
                    </h2>
                </div>
            </div>
        </div>

        <!-- BLOCK 1 -->
        <div class="about-us">
            <div class="container">
                <div class="row align-items-center">

                    <!-- CONTENT LEFT -->
                    <div class="col-lg-6">
                        <div class="about-us-content">
                            <div class="section-title">
                                <h3 class="wow fadeInUp">We Provide</h3>
                                <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                                    <span>Essential Security</span>
                                </h2>
                                <p class="wow fadeInUp" data-wow-delay="0.4s">
                                    Want to protect what you care about most – your family and your home? Our Essential Home Security package is professionally installed security that you can arm and disarm from anywhere and is backed up by award-winning, 24/7 monitoring.
                                </p>
                            </div>
                            <div class="about-us-btn" style="margin-top:20px;">
                                <a href="tel:1-888-447-6320" class="btn-default">Call Now</a>
                            </div>
</br>
                        </div>
                    </div>

                    <!-- IMAGE RIGHT -->
                    <div class="col-lg-6">
                        <div class="about-us-images">
                            <div class="about-img-1">
                                <figure class="image-anime reveal">
                                    <img src="/frontend/my-img/essential-security.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- BLOCK 2 -->
        <div class="about-us">
            <div class="container">
                <div class="row align-items-center">

                    <!-- IMAGE LEFT -->
                    <div class="col-lg-6">
                        <div class="about-us-images">
                            <div class="about-img-1">
                                <figure class="image-anime reveal">
                                    <img src="/frontend/my-img/smart-home.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <!-- CONTENT RIGHT -->
                    <div class="col-lg-6">
                        <div class="about-us-content">
                            <div class="section-title">
                                <h3 class="wow fadeInUp">We Provide</h3>
                                <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                                    <span>Home Automation</span>
                                </h2>
                                <p class="wow fadeInUp" data-wow-delay="0.4s">
                                    Want to keep an eye on your home? Our Home Automation package introduces video to your security solution. Know what’s happening inside or outside your home with all features of the Essential Security package.
                                </p>
                            </div>
                        </div>
                        <div class="about-us-btn" style="margin-top:20px;">
                            <a href="tel:1-888-447-6320" class="btn-default">Call Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- BLOCK 3 -->
        <div class="about-us">
            <div class="container">
                <div class="row align-items-center">

                    <!-- CONTENT LEFT -->
                    <div class="col-lg-6">
                        <div class="about-us-content">
                            <div class="section-title">
                                <h3 class="wow fadeInUp">We Provide</h3>
                                <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                                    <span>Connected Home</span>
                                </h2>
                                <p class="wow fadeInUp" data-wow-delay="0.4s">
                                    Ready to get really smart? The Connected Home package protects your home and adds next-level convenience with video, energy management, and remote access control features.
                                </p>
                            </div>

                            <div class="about-us-btn" style="margin-top:20px;">
                                <a href="tel:1-888-447-6320" class="btn-default">Call Now</a>
                            </div>
</br>
                        </div>
                    </div>

                    <!-- IMAGE RIGHT -->
                    <div class="col-lg-6">
                        <div class="about-us-images">
                            <div class="about-img-1">
                                <figure class="image-anime reveal">
                                    <img src="/frontend/my-img/home.avif" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- Our Testimonials Section End -->

    

    <!-- Our Testimonials Section Start -->
    <div class="our-testimonials">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        <h3 class="wow fadeInUp">testimonials</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">We are <span>Trusted 15+   </span>Countries Worldwide</h2>
                    </div>
                </div>               
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Slide Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-author-box">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="/frontend/images/author-1.jpg" alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>Emily Carter</h3>
                                                    <p>Chicago, Illinois</p>
                                                </div>  
                                            </div>        
                                            <div class="testimonial-quote">
                                                <img src="/frontend/images/testimonial-quote.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>                                   
                                        </div>                              
                                        <div class="testimonial-content">
                                            <p>"The team at Secured Home Security provided excellent service from start to finish. They guided me through every step, from choosing the right package to the installation process. Their professionalism and attention to detail were impressive, making the whole experience smooth and hassle-free."</p>
                                        </div>                              
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-author-box">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="/frontend/images/author-2.jpg" alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>Michael Anderson</h3>
                                                    <p>Los Angeles, California</p>
                                                </div>  
                                            </div>        
                                            <div class="testimonial-quote">
                                                <img src="/frontend/images/testimonial-quote.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>                                   
                                        </div>                                   
                                        <div class="testimonial-content">
                                            <p>"Secured Home Security has completely transformed the safety of our home. The system is
                                                incredibly reliable and easy to use, giving us peace of mind 24/7. The smart features are top-notch, and I
                                                love the convenience of controlling everything from my phone. Highly recommend it to anyone looking for a solid security solution!"</p>
                                        </div>                              
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-author-box">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="/frontend/images/author-3.jpg" alt="">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>Sarah Johnson</h3>
                                                    <p>Dallas, Texas</p>
                                                </div>  
                                            </div>        
                                            <div class="testimonial-quote">
                                                <img src="/frontend/images/testimonial-quote.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>                                   
                                        </div>                           
                                        <div class="testimonial-content">
                                            <p>"The support from Secured Home Security has been outstanding! Whenever I had questions or needed help with
                                                the system, their team was always quick to respond and incredibly helpful. It’s reassuring to know that they are just a call away whenever I need assistance. Exceptional customer support!"</p>
                                        </div>                              
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                            <div class="testimonial-btn">
                                <div class="testimonial-button-prev"></div>
                                <div class="testimonial-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Slide End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonials Section End -->

        <div class="about-us">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-us-images">
                            <div class="about-img-1">
                                <figure class="image-anime reveal">
                                    <img src="/frontend/my-img/home-solution.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-us-content">
                            <div class="section-title">
                                <h3 class="wow fadeInUp">We Provide</h3>
                                <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>Home security solutions </span> </h2>
                                <p class="wow fadeInUp" data-wow-delay="0.4s">Securing the things you treasure most — like your family, home and valuables.
                                </br>
                                </br>
                                    Your family. Your home. Everything you own. You can’t always be there to protect what you care about most. But with Secured Home Security, you’ll benefit from multiple monitoring centers that ensure that help is always near and a single app to control all of your connected devices.
                                </br>
                                </br>
                                    From monitored burglar and fire alarms, to video, smart lights, locks, doorbell cameras and thermostats…even personal emergency response…enjoy comfort and convenience knowing your home and loved ones are protected.
                                </br>
                                </br>
                                    Choose Secured Home Security and check off one less thing to worry about in your busy lifestyle!</p>
                            </div>
                            </div>
                            <div class="about-us-btn" style="margin-top:20px;">
                                <a href="tel:1-888-447-6320" class="btn-default">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <!-- CONTENT LEFT -->
            <div class="col-lg-6">
                <div class="about-us-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">We Provide</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                            <span>Business security solutions</span>
                        </h2>

                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                           As a business owner, you work hard to make your business succeed, it’s your livelihood, so it’s important to protect it against internal and external crime, fire and environmental hazards.
                            <br><br>
                            Our security experts create a security solution based on the needs of your business. We ask the right questions, get to know your business objectives, opportunities and challenges. Then we find the right mix of products and services that are the perfect fit. And we’re there for you beyond that, every step of the way, understanding that your needs may evolve as your businesses grows or changes.
                            <br><br>
                            From consultation and design, to installation, monitoring and service, we integrate our products to provide smart, cost-effective, quality security solutions for you.
                           
                        </p>
                    </div>

                    <div class="about-us-btn" style="margin-top:20px;">
                        <a href="tel:1-888-447-6320" class="btn-default">Call Now</a>
                    </div>
                </br>
                </div>
            </div>

            <!-- IMAGE RIGHT -->
            <div class="col-lg-6">
                <div class="about-us-images">
                    <div class="about-img-1">
                        <figure class="image-anime reveal">
                            <img src="/frontend/my-img/meeting.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Our Feature Section Start -->
<div class="our-feature dark-section" style="text-align:center; padding:60px 0;">
    <div class="container">

        <!-- Title Center -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h3 class="wow fadeInUp">let's connect</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                        <span>We’re always there for you with 24/7 award-winning monitoring.</span>
                    </h2>
                </div>
            </div>
        </div>

        <!-- CTA BOXES -->
        <div class="row justify-content-center mt-4">
            <!-- Box 2 -->
            <div class="cta-box-body wow fadeInUp" data-wow-delay="0.6s" style="justify-content: center;">
                <div class="cta-box-item">
                    <div class="icon-box">
                        <img src="/frontend/images/icon-phone.svg" alt="">
                    </div>
                    <div class="cta-box-item-content">
                        <p>Smart Security,Best Engineers</p>
                        <h3><a href="tel:1-888-447-6320">+(1) 888 447 6320</a></h3>
                    </div>
                </div>
                <div class="cta-box-item">
                    <div class="icon-box">
                        <img src="/frontend/images/icon-phone.svg" alt="">
                    </div>
                    <div class="cta-box-item-content">
                        <p>Safe & Trusted Company</p>
                        <h3><a href="tel:1-888-447-6320">+(1) 888 447 6320</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Our Feature Section End -->

@endsection