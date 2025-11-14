@extends('layouts.frontend')
@section('title') Contact Us | Home Defender @endsection
@section('content')
<!-- Page Header Start -->
	<div class="page-header parallaxie">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="page-header-box">
						<h1 class="wow fadeInUp" data-cursor="-opaque">Contact us</h1>
						<nav class="wow fadeInUp" data-wow-delay="0.2s">
                            <ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="/">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">contact us</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="contact-us-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact us</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><span>Secure your</span> with us</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">Have questions or need a customized security solution? Our team is here to assist you. Get in touch with us today.</p>
                        </div>
                        <div class="contact-social-list wow fadeInUp" data-wow-delay="0.6s">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="contact-info-list">
                        <div class="contact-info-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-phone.svg" alt="">
                            </div>
                            <div class="contact-item-content">
                                <p>phone number</p>
                                <h3><a href="tel:+456789254">+(1) 456 789 254</a></h3>
                            </div>
                        </div>
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-mail.svg" alt="">
                            </div>
                            <div class="contact-item-content">
                                <p>email address</p>
                                <h3><a href="mailto:info@homedefender.net">info@homedefender.net</a></h3>
                            </div>
                        </div>
                        <div class="contact-info-item location-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-location.svg" alt="">
                            </div>
                            <div class="contact-item-content">
                                <p>location</p>
                                <h3>9620 Hillock ct, Burke VA, 22015</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

      <!-- Contact Us Form Section Start -->
    <div class="contact-form-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-us-box">
                        <!-- Google Map IFrame Start -->
                        <div class="google-map-iframe">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96737.10562045308!2d-74.08535042841811!3d40.739265258395164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703158537552!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- Google Map IFrame End -->

                        <!-- Contact Us Form Start -->
                        <div class="contact-us-form">
                            <div class="section-title">
                                <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Get in Touch</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.4s">We specialize in providing top-quality security and CCTV solutions to safeguard your home and business. </p>
                            </div>
                            <form id="contactForm" action="#" method="POST" data-toggle="validator" class="contact-form wow fadeInUp" data-wow-delay="0.6s">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="fname" class="form-control" id="fname" placeholder="First name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Last name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name ="email" class="form-control" id="email" placeholder="E-mail" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone no." required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="2" placeholder="Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default"><span>send message</span></button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Us Form Section End -->
@endsection