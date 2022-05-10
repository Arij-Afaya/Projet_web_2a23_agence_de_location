<?php
    include_once '../model/user.php';
    include_once '../controlleur/userC.php';

    $error = "";

    // create adherent
    $user = null;

    // create an instance of the controller
    $userC = new userC();
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
            $user = new user(
                //$_POST['id'],
				$_POST['username'],
                $_POST['email'], 
				$_POST['pwd'],
                $_POST['confirmer'],
                $_POST['datee'],
                $_POST['typee']
            );
            $userC->modifieruser($user, $_POST["id"]);
            header('Location:compte.php');
        }
        else
            $error = "Missing information";
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


<script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
</head>


<body>
        
        
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['id'])){
				$user = $userC->recupereruser($_POST['id']);
				
		?>


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
        
          <button><a href="afficherUser.php">Retour à la liste des utilisateurs</a></button>
          <hr>
            <!--Default Links-->
            <ul class="default-links">
                <li>Modify my account   </li>
            </ul>
            
        </div>
     </div>
                            

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
                              <form action="" method="POST">
        <table border="1" align="center">
             <div class="u-form-group u-form-name">
                        <label for="id" class="field-label">cin:</label>
                    <input type="text" name="id" id="id" value="<?php echo $user['id']; ?>" class="form-control" required="" maxlength="20">
                    </div> 

                    <div class="u-form-group u-form-name">
                        <label for="username" class="field-label">username:</label>
                    <input type="text" name="username" id="username" value="<?php echo $user['username']; ?>"  class="form-control" required="" maxlength="20">
                    </div>


                    <div class="u-form-email u-form-group">
                        <label for="email"  class="field-label">email:</label>
                        <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>"  class="form-control" required="" maxlength="60">
                  </div>

                  <div class="u-form-group u-form-group-3">

                        <label for="pwd" class="field-label">pwd:</label>
                        <input type="password" name="pwd" id="pwd " value="<?php echo $user['pwd']; ?>" class="form-control">
                    </div>


                    <div class="u-form-group u-form-group-4">
               

                        <label for="confirmer" class="field-label">confirmer pwd:
                        </label>
                    
                        <input type="password" name="confirmer" id="confirmer" value="<?php echo $user['confirmer']; ?>" class="form-control">
                        </div>

                        <div class="u-form-group u-form-group-3">
                        <label for="datee"  class="field-label">Datee:
                        </label>
                   
                        <input type="date" name="datee" id="datee" value="<?php echo $user['datee']; ?>" class="form-control">
                        </div>
                        <div class="u-form-group u-form-group-3">
                        <label for="typee"  class="field-label">type:
                        </label>
                   
                        <input type="text" name="typee" id="typee" value="<?php echo $user['typee']; ?>" class="form-control">
                        </div>
                       
                <tr>
                    
                    <td>
                        <input type="submit" id="form-submit" class="theme-btn btn-style-one" value="modifier"> 
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; 
                  
                    <td>
                        <input type="reset" id="form-submit" class="theme-btn btn-style-one" value="Annuler" >
                    </td>
                </tr>
                <br>
                <br>
            </table>
            <br>
                <br>
                <br>
                <br>
                <br>
                <br> <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
        </form>
		<?php
		}
		?>
                        
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