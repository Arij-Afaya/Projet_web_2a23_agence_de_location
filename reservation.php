<!DOCTYPE html>
<html lang="en">

<!-- stella-orre/index-3.html  30 Nov 2019 03:48:03 GMT -->
<head>
<meta charset="utf-8">
<title>Localuxe | Reserve</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

	<!-- Header Style Three -->
    <header class="main-header header-style-three">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-left clearfix">
                    <div class="text"><span class="icon flaticon-call-answer"></span> Need help? Call Us Now : <a href="tel:(+216)94309914" class="number">(+216)94309914</a></div>
					
                </div>
                
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo"><a href="index-2.html"><img src="images/localuxe.png" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->      
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-1"></span>
                                </button>
                            </div>
                            
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="index-2.php">Home</a>
                                        <ul>
                                        
                                        </ul>
                                    </li>
									<li class="dropdown"><a href="about.html">About us</a>
                                        <ul>
                                            <li><a href="about.php">Our Introduction</a></li>
											<li><a href="team.html">Our Team</a></li>
											<li><a href="testimonials.html">Testimonials</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="services-dark.html">Services</a>
                                        <ul>
											
											<li><a href="wardrobe.html">Wardrobe</a></li>
											<li><a href="false-celling-design.html">False Celling Design</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="projects-classic.html">Vehicules</a>
                                        <ul>
                                            
                                        </ul>
                                    </li>
									<li class="dropdown"><a href="blog.html">Evenements</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-2.html">blog 2 column</a></li>
                                            <li><a href="blog-detail.html">Blog Details</a></li>
                                        </ul>
                                    </li>
									<li class="dropdown"><a href="reservation.php">Reserve</a>
                                       
                                    </li>
                                    <li><a href="Login.php">login</a></li>
									    
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
						
						<!-- Outer Box -->
                        <div class="outer-box clearfix">
                            <div class="search-box-btn"><span class="icon flaticon-magnifying-glass-1"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

    	<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index-2.html"><img src="images/111.jpg" alt="" title=""></a></div>
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    <!-- Banner Section -->
	<section class="banner-section" style="background-image:url(images/car.png)">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Form Column -->
				<div class="form-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Form Box -->
						<div class="form-box">
							<h2>Meet your dream car now</h2>
							
							<!-- Default Form -->
							<div class="default-form">
								<form method="post" action="afficherListeReservation.php">
								
									<!-- Form Group -->
									<div class="form-group">
										<input type="date" name="date_db" value="" placeholder="Start date" required>
									</div>
									
									<!-- Form Group -->
									<div class="form-group">
										<input type="date" name="date_df" value="" placeholder="End date" required>
									</div>
									
									<!-- Form Group -->
									<div class="form-group">
										<input type="number" name="num_permis" value="" placeholder="Licence Number"  required>
									</div>
									
									<!-- Form Group -->
									<div class="form-group">
										<select class="custom-select-box">
											<option>Select Car</option>
											<!--<option>New Jersey</option>
											<option>Chicago</option>
											<option>Lahore</option>
											<option>Victoria</option>-->
										</select>
									</div>
									
									<div class="form-group">
										<button type="submit" class="theme-btn submit-btn"><a href="afficherListeReservation"></a>Book Now</button>
									</div>
									
								</form>
							</div>
							<div class="text">By submitting this form, you agree to the <a href="#">privacy policy</a> and <a href="#">terms of use</a></div>
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<div class="content">
							<h3>Localuxe rent cars</h3>
							<div class="text">Find the car of your dreams from our gallery and book  <br> now to rent it</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Banner Section -->
	
	
				

	
	<!-- Project Section / Style Two -->
	<section class="project-section style-two">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<h2>Sneak peak of models</h2>
			</div>
		</div>
		
		<div class="outer-container">
			
			<!--Isotope Galery-->
            <div class="sortable-masonry">
                
                <!--Filter-->
                
				<div class="items-container row clearfix">
				
					<!-- Gallery Item -->
					<div class="gallery-item large-block masonry-item all hospital commercial">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/g.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Vehicules</a></h3>
											<a href="images/gallery/1.jpg" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all hospital commercial">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/b.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Vehicules</a></h3>
											<a href="images/gallery/2.jpg" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					
					
					
					
					<!-- Gallery Item -->
					<div class="gallery-item large-block masonry-item all hospital office residential">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/gg.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Vehicules</a></h3>
											<a href="images/gallery/7.jpg" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					
					
					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all hospital office">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/v.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Vehicules</a></h3>
											<a href="images/gallery/6.jpg" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
				</div>
				
			</div>
		
			<!-- More Projects -->
			<div class="more-projects">
				<a href="projects-classic.html" class="projects">View All Models</a>
			</div>
		
		</div>
	</section>
	<!-- End Project Section -->
	
	<!-- Testimonial Section -->
	<section class="testimonial-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-two centered">
				<h2>What our customers says</h2>
				
			</div>
			
			<div class="testimonial-carousel owl-carousel owl-theme">
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="images/resource/author-2.jpg" alt="" />
								</div>
							</div>
							<h3>Khalil Sayedi</h3>
							<div class="title">I rent a motorcycle from localuxe</div>
							<div class="text">it was a great experience , everything was good </div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="images/resource/author-1.jpg" alt="" />
								</div>
							</div>
							<h3>Leila Turki</h3>
							<div class="title">I rent a car from localuxe</div>
							<div class="text">it was so comfortable to get a driver with car , wonderful experience</div>
						</div>
					</div>
				</div>
				
				
	
	
	
			</section>
				
			
	<!--Main Footer-->
    <footer class="main-footer">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="index-2.html"><img src="images/localuxe.png" alt="" /></a>
                                    </div>
                                    <div class="text">Localuxe est un site web d'une agence de location des véhicules luxe .</div>
                                    <ul class="social-icons">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                    </ul>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                	<h2>Quick links</h2>
									<div class="widget-content">
										<ul class="list">
                                        	<li><a href="#">About Gaille</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Terms & Conditionis</a></li>
                                            <li><a href="#">Faq</a></li>
                                        </ul>
                                    </div>
								</div>
							</div>
						
						</div>
					</div>
					
					<!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
                        
                            <!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
									<h2>Contact Info</h2>
									<div class="widget-content">
										<a href="tel:(+216)94309914" class="contact-number">(+216)94309914</a>
										<ul>
											<li>18, rue de l'Usine - ZI Aéroport Charguia II</li>
											<li>Email :<a href="mailto:info@localuxe.com"> info@localuxe.com</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget newsletter-widget">
                                	<h2>Newsletter</h2>
									<div class="text">Get Special offers & Discounts</div>
									<!-- Newsletter Form -
									<div class="newsletter-form">
										<form method="post" action="templateshub.net">
											<div class="form-group">
												<input type="email" name="email" value="" placeholder="Enter your email address" required>
												<button type="submit" class="theme-btn btn-style-one"><span class="txt">Subscribe</span></button>
											</div>
										</form>
									</div>-->
								</div>
							</div>
						
						</div>
					</div>
					
				</div>
			</div>
			
			
			
		</div>
	</footer>
	
</div>  
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
    	<div class="search-form">
        	<form method="post" action="templateshub.net">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>
            
            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Vehicules</a></li>
                <li><a href="#">reservation</a></li>
                <li><a href="#">Sponsors</a></li>
                <li><a href="#">Evenements</a></li>
                <li><a href="#">Payment</a></li>
            </ul>
        
        </div>
        
    </div>
</div>

<!--Scroll to top-->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/isotope.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/script.js"></script>
</body>

<!-- stella-orre/index-3.html  30 Nov 2019 03:48:05 GMT -->
</html>