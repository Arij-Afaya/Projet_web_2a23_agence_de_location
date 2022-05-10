
<?php
// On prolonge la session
session_start();

//include_once "C://wamp64/www/solis/config.php";
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location: log.php');
   }
?>


<?php
//require_once '../../controlleur/UserC.php';
require_once '../controlleur/userC.php';
require_once '../model/user.php';

$error = "";

$admin = null;


if (
    isset($_POST["id"]) &&
    isset($_POST["username"]) &&		
    isset($_POST["email"]) &&
    isset($_POST["pwd"]) && 
    isset($_POST["confirmer"]) && 
    isset($_POST["datee"])&&
    isset($_POST["typee"])
) {
    if (
        !empty($_POST["id"]) && 
        !empty($_POST["username"]) &&
        !empty($_POST["email"]) && 
        !empty($_POST["pwd"]) && 
        !empty($_POST["confirmer"]) && 
        !empty($_POST["datee"])&&
        !empty($_POST["typee"])
    ) {
        $user = new User(
            $_POST['username'],
            $_POST['email'], 
            $_POST['pwd'],
            $_POST['confirmer'],
            $_POST['datee'],
            $_POST['typee']
        );
       
        header('refresh:2;url=afficherUser.php');
    } else
        echo "Missing information";
}
$userC = new userC();

$email=  $_SESSION['e'] ;
$username=  $_SESSION['username'] ;
$pwd=  $_SESSION['pwd'] ;
$datee=  $_SESSION['datee'] ;
$typee=  $_SESSION['typee'] ;
$cin= $_SESSION['id'] ;
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
									<li class="dropdown"><a href="about.php">A propos de nous</a>
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
    <!-- End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/1.png)">
    	<div class="auto-container">
        	<h2>Creat your account</h2>
            <ul class="page-breadcrumb">
            	<li><a href="index-2.html">home</a></li>
                <li>My account</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
    
	<!--Account Page-->
    <div class="checkout-page">
        <div class="auto-container">
        
            <!--Default Links-->
            <ul class="default-links">
                <li>Welcome  </li>
            </ul>
            <div class="text-content">
                <h4><i class="fa fa-user"></i> MR <?php echo $_SESSION['username']   ?></h4>
                 <h2>Bienvenue sur Localuxe</h2>
                  </div>   
           </div>
        </div>
                                 <!-- </div>-->
                            
<!DOCTYPE html>
      <html lang="en">
        <head>
            <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>User Display</title>
                 </head>
                    <body>

                        <div class="container">
                          <div class="row">
                          <div class="col-md-8">
                              <div class="text-content">
                              <table >

            <div class="col-lg-8 col-md-8 col-sm-8">
                  <label for="cin" class="field-label">cin</label>
                  <input type="text" value="<?php  echo $cin ?>" id="cin" name="cin" class="form-control" required="">
                </div> 
              <div class="u-form-group u-form-name">
                  <label for="username" class="field-label">username</label>
                  <input type="text"  value="<?php  echo $username ?>" id="username" name="username" class="form-control" required="">
                </div>
                <div class="u-form-email u-form-group">
                  <label for="email" class="field-label">Email</label>
                  <input type="email" value="<?php  echo $email ?>" id="email" name="email" class="form-control" required="">
                </div>
                <div class="u-form-group u-form-group-3">
                  <label for="pwd" class="field-label">mot de passe</label>
                  <input type="password" value="<?php  echo $pwd ?>" id="pwd" name="pwd" class="form-control">
                </div>
                <div class="u-form-group u-form-group-4">
                  <label for="datee" class="field-label">date de naissance</label>
                  <input type="text" value="<?php  echo $datee ?>" id="datee" name="datee" class="form-control">
                </div>
                <div class="u-form-group u-form-group-4">
                  <label for="typee" class="field-label">Type</label>
                  <input type="text" value="<?php  echo $typee ?>" id="typee" name="typee" class="form-control">
                </div>
               
                <tr>
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                 <td >
                  <form method="POST" action="modifierUser.php">
                  <input type="submit" id="form-submit" class="theme-btn btn-style-one" name="Modifier" value="Modifier">
                  <input type="hidden" value=<?php  echo $cin ?> name="id">
                  </form>
                 </td >
                 </div>
                 <td>
                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
          <!-- Logout Modal-->
          <div class="form-group col-lg-12 col-md-12 col-sm-12">
          <form action="logout.php">
                        <button type="submit" id="form-submit" class="theme-btn btn-style-one">Logout</button>
                    </form>
                    </div>
                </td >
                </tr>
              
                    </table>
            
                                </div>
                            </div>
                            
                         </div>     
                                    
                        </div>
                        
                    </body>
 </html>                 
                                    
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
                                    	<a href="index-2.html"><img src="images/footer-logo.png" alt="" /></a>
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
									<!-- Newsletter Form -->
									<!--<div class="newsletter-form">
										<form method="post" action="templateshub.net">
											<div class="form-group">
												<input type="email" name="adresse_email" value="" placeholder="Enter your email address" required>
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
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/jquery.bootstrap-touchspin.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/script.js"></script>
</body>

<!-- stella-orre/checkout.html  30 Nov 2019 03:52:17 GMT -->
</html>