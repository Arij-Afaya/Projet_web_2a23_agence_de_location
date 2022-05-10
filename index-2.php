<!DOCTYPE html>
<html lang="en">

<!-- stella-orre/  30 Nov 2019 03:42:43 GMT -->
<head>
<meta charset="utf-8">
<title>Localuxe </title>
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
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=11GzpB_dWQvnGJUtBhJ1N99vhtj2S30jCqswVUeYodDGxCQOIA4IopKwCmy1xm52UHelB9qhsQWof2liyPgkSek2kGIrrzm9U-Yuma-BFGHTNjv_-7vKAcnFATPmEt1IsKHpiU_6BPBvtLVFxIWKY9_EHqLMoOhg2LJCAJy9USUdyQSm9dh6cZndOdvGGVSDxFzbGSXuHkiT9rbROHqYIMMmIiI4tQzD26t6moyd1nR1mdJm3-ZrY38652Req0U5HRafPjEsURgL9Je_dNnsm21shV7mjhC_HA-yYIzD596kPxe-cVx3YTZg7tnlgkA5ydar5ldNNpjZHc4W7Mx5n1GIFkCDQus98kAg70ShZCRTHqcNjVF5qgHPNy8vTW3pJA8R9nlU3HDi4ApLIcNl2LeG-R9UnOAwmNns7dzAaRgFBm-LeZ4GbcuYjppGc4vMFkqwFxgVJY-ihWV8T27gQe4CLRvfTHCU99Fqtf3_HJqD8yo_SN2S99tZ1VD247JU8fcCETgujIlRr2snH7YWyXZpf4pG7fMq9_U_I2qdTLgxt9avExA3eV-DJs8zNR7YSlTUiprPebThXStFUXdFtuNJvmULqjvcfdPgKWNeXbKiINqHILfgACvtYhV18EP-Ox5ngtbtWg_nwhmxYzkuWhpSUiyljYxLOLUH0ElPzgFjh67OQDh4nm0B08pWRoSUaLWUDS5YrDXDrK-qxeX5pSDdf9xbD3VAl-u7UpDh-fvK9du48KCxi2h5QBHXolpa7BlrctHXgkHfjKwbA26luGRV3JzeRI2po0uK1OqBIOPIXwdNmcuIAvYjT9v12G-g6WbX88YLJYBSZCEkd8SG8T3OH9W3YcnxCxDWqmzEFc7SKXeUSezmkbDXwy8NQDVXC2p7hzprIMhnAEl-iebC_EOYVUAdlo30z1Ibqla0wRCRiS5HLLJSmcwTJZQsj2LkhQunIrgvtaLEpopy8YlrCPdUY05Gy4pWsJGvwvDW42_Q9EJYZ_DV_4a3lWv2_cWBQoV8bqmsNX7kPqSyhMjkQ6oZabflBT0FXdFySO6VXCJ--KhyrGw_6XR4kFSORWBBmPw4DF3aN43zDF3O0ltrZwoYvksKvdBD9IH-SnZpSzc3p33LYh2VWApRh11nez-0m07STqNYn01rInFiMHHn2IH0UHIlx4AQZ7TkBvOgT90Iujf0M0Lwq2spEZjoqKMCIgwctspq8dMhO5cUZ2b4gNldctFfiC4egsGjVtFS9tRv7eErU_BY_7dcZBiDsCPRotjkDzU7ymYslNOEf1ZWnWL_Doen-pani-WFoXJTkaA" nonce="6877f24a59208fe38cebdd399e6153f7" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9tYWlsLWF0dGFjaG1lbnQuZ29vZ2xldXNlcmNvbnRlbnQuY29tL2F0dGFjaG1lbnQvdS8wLz91aT0yJmlrPWM0NGExNTdmMTQmYXR0aWQ9MC4xMiZwZXJtbXNnaWQ9bXNnLWY6MTczMDMwNDE3MjUyNzQyMzg3MSZ0aD0xODAzNDY3YTM0ZGY5MTdmJnZpZXc9YXR0JmRpc3A9c2FmZSZyZWFsYXR0aWQ9Zl9sMjJlb3VjbDExJnNhZGRiYXQ9QU5HamRKODNBcy1wV0RvNmYxaDRmbFV6eXdNS0QycFM5MFRucFBNdzN6MjFMWFg4Ti1rSmxRakZkTlVfVW1sdjRoNl9KS25SX0IzSmUwQTEtSEM2eC10cUJfYjVrUXBJd1pjdnhRbGluSHZtdG1uOFhtdnBXcjJJSDhHbDJiRll0OVdBNml4cHpiQ0hYVUNaRHQ0RURPUS1Icm5VcU9nczVVMG1HX1ZsekwxWHpxdFU3M3J2T1pOUVA5eHZUNHROZ0tCb3MzT1l2T3RLdVJsWVRfTGNZN3Z0VDZXNjdlWG9KQjBSV0FBQTdfc181czJqSlpQbTlKdTZ0TUVjamp2NTZsMVQyc2FqTmlRa18zeFZOU3l4SWN1bHRiNDBFdGZHcTVycmRaZml0NnBqVDJUUnBodWJVX2xyYWxRWXVpQmJCbWZMS2w1SXd0UEVZT3duXzBwNF9kajJzVU5vcXNQUHlHNGtjM2ZUY2tGcTdvX01vWVlqSjVjVlllU19RRHBiUVMydU1nNkhaS1l5QUhiUkdkcWFmS0VKUmNwUzVuMGtpZW1OWlpNOEt0Znp6bDM3dUlKakhGSGEyYXZjd1NwU1RHVDc1dkpxYm9wU0tpb3IzazZQaC1jM1NySjNLZTd1cnJwQUhKeGRLcFNhcWtYZkU3SUhvc3k0QTh2bHpsREMySDhvdGRpVFJ4R2ZUUTdWRGthMmFnb3QwX1FwWFN4TVNmV0JDbTV4d3dKTUFiSTVMTkwweEU0X0lOWlVjdjhFRVowdzdjZE51SGx1bFJZYXJEcGoxa1g4bFR4VzZkcWZ2ZmZlRmFMQ1V2c3lPSFFMS2xqeGRVQ3JzVEhhNUVfbGFzRWZaM19MMTU2OTdxZ1BRM2VZamF4Qlg2cXoxUV81aXk4QVV3UVFHZlRESUVNdUxWOG1LU3VHMUxzQVRXaE1wR05xTWJYZl9tckw2cDZBdC03M0pyVXRIel9GV2dvZVlmR29RX1NoRHI3N0g0Q3VBTTk5cW1vcTlUaFU1VU0"/></head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <header class="main-header header-style-one">
      

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
                                    <li class="current dropdown"><a href="index-2.html">Accueil</a>
                                        
                                    </li>
									<li class="dropdown"><a href="about.php">A Propos de nous</a>
                                        <ul>
											<li><a href="about.php">Notre Equipe</a></li>
											
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="services-dark.php">Véhicules</a>
                                    <ul>
                                            <li><a href="affichagev.php">Véhicules</a></li>
                                
                                            <li><a href="searchfront.php">Disponibilités</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="projects-classic-nourhene.php">Evenement</a>
                                        <ul>
                                            <li><a href="projects-classic-nourhene.php">Nos evenement</a></li>
                                
                                            <li><a href="projects-fullwidth-nourhene.php">Sponsors</a></li>
                                        </ul>
                                    </li>
									
									
                                    <li><a href="contact.html">Contact</a></li>


                                    <li class="dropdown"><a href="reclamation.php">Réclamations</a>
                                        
                                    </li>
                                    <li class="dropdown"><a href="log.php">Login</a>
                                        
                                    </li>


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

    	

    </header>
    <!-- End Main Header -->

    <!-- Main Slider -->
	<section class="main-slider">
		<div class="slider-box">
		
			<!-- Banner Carousel -->
			<div class="banner-carousel owl-theme owl-carousel">
			
				<!-- Slide -->
				<div class="slide">
                	<div class="image-layer" style="background-image:url(images/main-slider/123.jpg)"></div>
					<div class="auto-container">
						<div class="content">
							<h2> <br> "Le pouvoir De </h2>
                            <h2>  Rouler Moins Cher"</h2>
							
							
						</div>
					</div>
				</div>
				
				
	</section>
	<!-- End Banner Section -->
	
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
									<h2>Nos Contacts</h2>
									<div class="widget-content">
										<a href="tel:1800-574-9687" class="contact-number">(+216)94309914</a>
										<ul>
											<li>18, rue de l'Usine - ZI Aéroport Charguia II </li>
											<li>Email :<a href="mailto:info@stellaorre.com"> info@stellaorre.com</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget newsletter-widget">
                                	<h2>Contactez Nous</h2>
									<div class="text">Profitez de nos offres</div>
									<!-- Newsletter Form -->
									<div class="newsletter-form">
										<form method="post" action="templateshub.net">
											<div class="form-group">
												<input type="email" name="email" value="" placeholder="Entrer votre Adresse Email" required>
												<button type="submit" class="theme-btn btn-style-one"><span class="txt">S'inscrire</span></button>
											</div>
										</form>
									</div>
								</div>
							</div>
						
						</div>
					</div>
					
				</div>
			</div>
			
			<!--Footer Bottom-->
            <div class="footer-bottom clearfix">
                <div class="pull-left">
                    <div class="copyright"><a href="templateshub.net">Templates Hub</a></div>
                </div>
                <div class="pull-right">
                    <a href="templateshub.net">Templates Hub</a>
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
                <li><a href="#">Home Interiors</a></li>
                <li><a href="#">Offices Interiors</a></li>
                <li><a href="#">Showroom Interiors</a></li>
                <li><a href="#">Building Interiors</a></li>
                <li><a href="#">Shops Interiors</a></li>
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

<!-- stella-orre/  30 Nov 2019 03:45:45 GMT -->
</html>