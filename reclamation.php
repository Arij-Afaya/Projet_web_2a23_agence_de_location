<?php
    include_once '../model/reclamation.php';
    include_once '../controlleur/reclamationc.php';

    $error = "";

    // create adherent
    $reclamation = null;

    // create an instance of the controller
    $reclamationc = new reclamationc();
    $reclamationc = new reclamationc();
    if (
        
		isset($_POST["type_c"]) &&		
        isset($_POST["message_c"]) && 
        isset($_POST["date_c"])
    ) {
        if (
            
			!empty($_POST['type_c']) &&
            !empty($_POST["message_c"]) && 
            !empty($_POST["date_c"])
        ) {
            $reclamation = new reclamation(
               
				$_POST['type_c'],
                $_POST['message_c'], 
                $_POST['date_c']
            );
            $reclamationc->ajouterreclamation($reclamation);
            
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
<title>LOCALUXE | Reclamation</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/ss.png" type="image/x-icon">
<link rel="icon" href="images/ss.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Color scheme</title>
		
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	</head>

	<?php
		if($_COOKIE["theme"] == "dark") {
			$background = "#1b1d1e";
			$color = "#fff";
		} else {
			$background = "#f1f1f1";
			$color = "#1b1d1e";
		}
	?>

  <body style="background-color: <?php echo $background;?>; color: <?php echo $color;?>">
		

		<div style="padding: 0 26px">
			
				<label class="switch">
					<input type="checkbox" id="toggleTheme" <?php if($_COOKIE["theme"] == "dark") { echo "checked"; }?>>
					<span class="slider round"></span>
				</label>
			</p>
		</div>

		<script>
			$("#toggleTheme").on('change', function() {
				if($(this).is(':checked')) {
					$(this).attr('value', 'true');
					document.cookie = "theme=dark";
					location.reload();
				} else {
					$(this).attr('value', 'false');
					document.cookie = 'theme=; Max-Age=0';
					location.reload();
				}
			});
		</script>
  </body>
</html>


<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <header class="main-header header-style-one">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-left clearfix">
                    
					
                </div>
                <div class="top-right clearfix">
       <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo"><a href="index-2.html"><img src="images/sxx.png" alt="" title=""></a></div>
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
                </div>
            </div>
        </div>
       
        

        <!-- End Header Top -->

        
                            
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
                <div class="nav-logo"><a href="index-2.html"><img src="images/logo.png" alt="" title=""></a></div>
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
    <section class="page-title" style="background-image:url(images/background/ww15.jpg)">
    	<div class="auto-container">
            
        	<h2>Espace Reclamation</h2>
            <ul class="page-breadcrumb">
            	<li><a href="index-2.php">accueil</a></li>
                <li>Bienvenue Dans Notre Espace Reclamation</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    <center>

</br>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localuxe</title>
</head>
    <body>
        
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
               

              


				<tr>
                    <td>
                        <label for="type_c"><strong>Type</strong>:
                            
                            <input type="radio" name="type_c" id="type_c" value="vehicule" checked=""><label for="vehicule">vehicule
							</label>
							<input type="radio" name="type_c" id="type_c" value="paiement"><label 
                            for="paiement">Paiement
							</label>
                        </label>
                    </td>
                   
               
                <tr>
                    <td>
                        <label for="message_c"><strong>Message</strong>:
                        </label>
                    </td>
                    <td><input type="textarea" name="message_c" id="message_c" maxlength="100"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="date_c"><strong>Date de Réclamation</strong>:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="date_c" id="date_c" >
                    </td>
                </tr>  
                        </fieldset>       
                
            </table>
                        </br>

            <td>
            <form action="index.php" method="post">
                        <input type="submit" value="Envoyer"> 
                        
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>

                        </br>
                        ______________________________________________________________________________________

                        </br>

            <td> <button><a href="rating.php">Votre Avis</a></button></td>
        </form>
    </body>
</html>
</center>
                        </br>
                        </br>



	
						</br>
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
									<a href="index-2.html"><img src="images/sxx.png" alt="" /></a>
								</div>
								<div class="text">Le Pouvoir de rouer moins cher</div>
								<div class="text">Le Pouvoir de rouer moins cher</div>
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
									<a href="tel:1800-574-9687" class="contact-number">94309914</a>
									<ul>
										<li>Ariana </li>
										<li>Email :<a href="mailto:info@stellaorre.com"> localuxe@gmail.com</a></li>
									</ul>
								</div>
							</div>
						</div>
						
						<!--Footer Column-->
						<div class="footer-column col-lg-7 col-md-6 col-sm-12">
							<div class="footer-widget newsletter-widget">
								<h2>Contactez Nous</h2>
								<div class="text">Obtenez des offres spéciales et des réductions</div>
								<!-- Newsletter Form -->
								<div class="newsletter-form">
									<form method="post" action="templateshub.net">
										<div class="form-group">
											<input type="email" name="email" value="" placeholder="Votre Adresse Email" required>
											<button type="submit" class="theme-btn btn-style-one"><span class="txt">
												s'abonner</span></button>
										</div>
									</form>
								</div>
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