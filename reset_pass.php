<?php

// On prolonge la session
// session_start();
// $user="null";

if(isset($_POST["submit_email"])){
    $to=$_POST['email'];
    $subject="Change your password";
    $message="http://http://localhost/localuxe/view/changepwd.php";
    $from="From: mail.projetuser@gmail.com";

mail($to,$subject,$message,$from);

header('Location:log.php');

}

?>

<!DOCTYPE html>
<html lang="en">

<!-- stella-orre/checkout.html  30 Nov 2019 03:52:15 GMT -->
<head>
<meta charset="utf-8">
<title>Localuxe| Create your account</title>
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
<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">


</head>



<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <header class="main-header header-style-one">
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
                                    <li class="dropdown"><a href="index-2.php">Acceuil</a>
                                        
                                    </li>
									<li class="dropdown"><a href="about.html">A propos de nous</a>
                                        <ul>
                                            <li><a href="about.php">Notre equipe</a></li>
										
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="affichagev.php">Vehicules</a>
                                        <ul>
                                            <li><a href="affichagev.php">Liste véhicules</a></li>
                                            <li><a href="searchfront.php">Liste Disponibilité</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Evenement</a>
                                        <ul>
                                            <li><a href="projects-classic-nourhene.php">nos evenements</a></li>
                                            <li><a href="projects-fullwidth-nourhene.php">nos sponsors</a></li>
                                            <!--<li><a href="blog-detail.html">Blog Details</a></li>-->
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="services-dark.html">Contacts</a>
                                        
                                    </li>
                                    <li class="dropdown"><a href="reclamation.php">Reclamations</a>
                                        
                                    </li>
									
                                    <li class="dropdown"><a href="log.php">Login</a></li>
                                      
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
                <div class="nav-logo"><a href="index-2.html"><img src="images/background/1.png" alt="" title=""></a></div>
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
    <section class="container">
    <div id="google_translate_element"></div>
         <script type="text/javascript">
             function googleTranslateElementInit() {
                 new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
             }
         </script>
 <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
</div>
        
         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        
         <center><h3 class="u-text u-text-black u-text-1">mot de passe oublié?</h3></center>
        
        <center><h6 class="u-text u-text-2"> Nous comprenons, il se passe des choses. Entrez simplement votre adresse e-mail ci-dessous et nous vous enverrons un lien pour réinitialiser votre mot de passe !<br></center>
          <br>
          <br>
          <br>
          <br>
          <br>
        </h6>
        <div class="u-form u-form-1">
    
            <form class="register-form" method="POST" >

                <div class="field-label">
                    <input type="email" class="form-control" required="" name="email"   placeholder="Entrez votre adresse email">
               
                  </div>
                
                <div class="u-align-left u-form-group u-form-submitfield-label">
                
                <center><input type="submit" id="form-submit" class="theme-btn btn-style-one" name="submit_email" class="form-control"></center>

            </div>
            </form>
                                            
    </div>
            <div class="u-border-1 u-border-grey-10 u-line u-line-horizontal u-line-1"></div>
                <h3 class="u-align-center u-text u-text-black u-text-3">
                   
                <center> <a  style="text-decoration: underline !important;" href="ajouterUser.php">créer un compte ?</a></center>
                </h3>
                                        
                                    
                <center>  <a class="u-text u-text-white u-text-4" href="log.php">retour à la page login!</a></center>
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