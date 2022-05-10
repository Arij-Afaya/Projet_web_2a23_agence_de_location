<?php
	include '../controlleur/userC.php';
	$userC=new userC();
	$listeuser=$userC->afficheruser(); 
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
	
		<head></head>
	<body>
  <ul ><center><a  href="ajouterUser.php">s'inscrire</a></center>
  <center><a href="log.php">login</a></center>

</ul>
	    <button><a href="ajouterUser.php">Ajouter un utilisateur</a></button>
		<center><h1>Liste des utilisateurs</h1></center>
	<center>	<table class="u-table-entity u-table-entity-1"></center>

		<colgroup>
              <col width="14.3%">
              <col width="14.3%">
              <col width="14.3%">
              <col width="18.1%">
              <col width="10.4%">
              <col width="14.6%">
              <col width="14%">
    </colgroup>
			<thead class="u-custom-font u-font-courier-new u-palette-4-base u-table-header u-table-header-1">
              <tr style="height: 58px;">
                <th class="u-table-cell">cin</th>
                <th class="u-table-cell">username</th>
                <th class="u-table-cell">email</th>
                <th class="u-table-cell">date de naissance</th>
                <th class="u-table-cell">type</th>
                <th class="u-table-cell">modifier</th>
                <th class="u-table-cell">supprimer</th>
              </tr>
            </thead>
			<?php
				foreach($listeuser as $user){
			?>


<tbody class="u-table-body">

			<tr  style="height: 55px;">
				<td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell"><?php echo $user['id']; ?></td>
				<td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell"><?php echo $user['username']; ?></td>
				<td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell"><?php echo $user['email']; ?></td>
				
				<td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell"><?php echo $user['datee']; ?></td>
				<td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell"><?php echo $user['typee']; ?></td>
				<td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">
					<form method="POST" action="modifierUser.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
					</form>
				</td>
				<td class="u-border-1 u-border-grey-30 u-border-no-left u-border-no-right u-table-cell">
					<a href="supprimerUser.php?id=<?php echo $user['id']; ?>">Supprimer</a>
				</td>
			</tr>
			</tbody>
			<?php
				}
			?>
		</table>
	
	
	
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






