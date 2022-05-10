<?php
session_start();
    include_once '../model/user.php';
    include_once '../controlleur/userC.php';

    $error = "";
    $message="";

    $User = null;

    $UserC = new userC();
    $a = 0;
 
    ?>
 <?php

if (
    isset($_POST["email"]) &&
    isset($_POST["pwd"]) 		


) {
    if (
        !empty($_POST["email"]) && 
        !empty($_POST["pwd"]) 
      
    ) {
        $message=$UserC->connexionUser($_POST["email"],$_POST["pwd"]);
        $_SESSION['e'] = $_POST["email"];

       if($message!='pseudo ou le mot de passe est incorrect')
       {
           // $usr = $UserC->recupererUseremail($_POST["email"]);
            $info = $UserC->recupererUserInfo($_POST["email"]);
            $_SESSION['id'] = $info["id"];
            $_SESSION['username'] = $info["username"];
            $_SESSION['pwd'] = $info["pwd"];
            $_SESSION['confirmer'] = $info["confirmer"];            
            $_SESSION['datee'] = $info["datee"];
            $_SESSION['typee'] = $info["typee"];
            if($message=='admin')
            { 
              header('Location: backsamar.php');
            }
            else if ($message=='client')
            {
              header('Location:compte.php');
            }
               
       }
         /* else
          {
              echo "<script> alert('wrong informations!') </script>";
          }*/
    }
    else
        $error = "Missing information";
}
  
    ?>


<!DOCTYPE html>
<html lang="en">

<!-- stella-orre/contact.html  30 Nov 2019 03:46:40 GMT -->
<head>
<meta charset="utf-8">
<title>Login | Se connecter</title>
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

<script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
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
                        <div class="logo"><a href="index-2.php"><img src="images/localuxe.png" alt="" title=""></a></div>
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

                                    <li class="dropdown"><a href="reservation.php">Reserver</a></li>
                                      
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
                <div class="nav-logo"><a href="index-2.php"><img src="images/logo.png" alt="" title=""></a></div>
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

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/1.png)">
    	<div class="auto-container">
        	<h2>Se connecter</h2>
            <ul class="page-breadcrumb">
            	<li><a href="index-2.php">home</a></li>
                <li>Se connecter</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Contact Form Section -->
	<section class="login-form-section" style="background-image:url(images/background/contact.png)">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<h2>Login</h2>
				<div class="text">Hello.</div>
			</div>
			
			<div class="row clearfix">
				
				<!-- Form Column -->
				<div class="form-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Contact Form -->
						<div class="contact-form">
								
							<!--Contact Form-->
							<form id="contact" action="" method="post">
								<div class="row clearfix">

                                  <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                        <form action="" method="POST">


                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input id="email" type="email" name="email"  class="form-control"placeholder="Email address" required="" pattern=".+@gmail.com|.+@esprit.tn">
									    </div>                                          
                                           
                                            </fieldset>
                                            <fieldset>   
                                            <div class="form-group col-lg-  col-md-6 col-sm-12">
										      <input id="pwd" type="password" name="pwd" class="form-control" placeholder=" Enter your Password" required="">
									        </div>                                           
                                            
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                            <button type="submit" value="login" name="login-form" id="form-submit" class="theme-btn btn-style-one">Submit</button>
                                            <button type="reset"  name="login-form" id="form-submit" class="theme-btn btn-style-one">Reset</button>
                                            </fieldset>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <ul class="default-links">
                                           <li>Don't have an account? <a href="ajouterUser.php">Click here to create one</a></li>
                                        </ul>
                                              <br> 
                                              <br>
                                              <br>
                                              <div class ="col-lg-7">
                                                <a href="reset_pass.php">Mot de passe oublié ?</a>
                                               </div>
                                        </div>
                                    </form>


								</div>
							</form>

                            <div class="overlay-container">
        <!--<div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>-->
						</div>
						
					</div>
				</div>
				
				
				
			</div>
			
		</div>
	</section>
	<!-- End Contact Form Section -->
	
	
	
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
									<div class="text">Profiter de nos offres</div>
									
									
								</div>
							</div>
						
						</div>
					</div>
					
				</div>
			</div>
			
			
	
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
<script src="js/validate.js"></script>
<script src="js/appear.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/script.js"></script>
<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
</body>

<!-- stella-orre/contact.html  30 Nov 2019 03:46:47 GMT -->
</html>


