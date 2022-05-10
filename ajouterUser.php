
<?php
    include_once '../model/user.php';
    include_once '../controlleur/userC.php';

    include_once '../controlleur/mail.php';




    if (isset($_POST['submit']) && $_POST['g-recaptcha-response'] != "") {
        include "db_config.php";
        $secret = '6LdAnrYfAAAAAGnfKNoDyyVefvW7d1GmHk9qLsti';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if ($responseData->success) {
            
            //first validate then insert in db
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
            mysqli_query($conn, "INSERT INTO signup(name, email ,password) VALUES('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . md5($_POST['password']) . "')");
            echo "Your registration has been successfully done!";
        }
    }





    $error = "";
    //$err=verif();

    // create adherent
    $User = null;

    // create an instance of the controller
    $UserC = new userC();
    if (
       // isset($_POST["id"]) &&
		isset($_POST["username"]) &&		
        isset($_POST["email"]) &&
		isset($_POST["pwd"]) && 
        isset($_POST["confirmer"]) && 
        isset($_POST["datee"])&&
        isset($_POST['g-recaptcha-response'])
       

    ) {
        if (
           // !empty($_POST["id"]) && 
			!empty($_POST["username"]) &&
            !empty($_POST["email"]) && 
			!empty($_POST["pwd"]) && 
            !empty($_POST["confirmer"]) && 
            !empty($_POST["datee"])&&
            !empty($_POST['g-recaptcha-response'])

           
        ) {
            $User = new user(
               // $_POST['id'],
				$_POST['username'],
                $_POST['email'], 
				$_POST['pwd'],
                $_POST['confirmer'],
                $_POST['datee']
                
            );


            $secret = '6LdAnrYfAAAAAGnfKNoDyyVefvW7d1GmHk9qLsti';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if ($responseData->success) {
            



            $UserC->ajouteruser($User);
            

           $email='samar.sedraoui@esprit.tn';
            $email_content = array(
            'Subject' => ' Verification',
            'body' => "http://localhost/localuxe/view/log.php
            cordialement,
            EDUCAPLAY"
           );
            sendemail($email,$email_content);


            //header('Location:log.php');
            //header('refresh:1;url=log.php');
            
        }
        // if(isset)
    
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
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
        	<h2>Créer votre compte</h2>
            <ul class="page-breadcrumb">
            	<li><a href="index-2.html">home</a></li>
                <li>Inscription</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
    
	<div id="error">
            <?php echo $error; ?>
        </div>
        

        <script>
        function showNotification() {
            const notification = new Notification ("Nouvelle notification",
            {
            body: "Vous avez été inscrit avec succes !!!",
            icon: "Images/Rueeus.PNG"
        });
            notification.onclick = (e) =>{
                window.location.href = "Event.html";

            };
        }

        console.log(Notification.permission);
        if(Notification.permission === "granted")
        {
            showNotification();
        }
        else if (Notification.permission !== "denied")
        {
            Notification.requestPermission().then(permission =>{
                if(permission === "granted"){
                    
                    showNotification();
                }
                
                        });
        }
    </script>
        <form  name="clubForm" action="" method="POST" class="u-clearfix u-form-spacing-40 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 28px;">
            
            



            <div class="u-form-group u-label-top">
                <label for="username"class="field-label">nom d'utilisateur</label>
                <input type="text" placeholder="Entrez votre email ou numéro telephone" name="username" id="username"  class="form-control" required="required" maxlength="20">
                <p id="errorusername" class="error"></p>
            </div>

            <div class="u-form-email u-form-group u-label-top u-form-group-3">
        
                <label for="email"class="field-label">Email</label>
                <input type="email" placeholder="Entrez une adresse mail valide" name="email" id="email" class="form-control" required="" maxlength="60">
                <p id="erroremail" class="error"></p>
            </div>

            <div class="u-form-group u-form-name u-label-top">
                
                <label for="pwd" class="field-label">mot de passe</label>
                <input type="password" placeholder="entrez votre mot de passe" name="pwd" id="pwd" class="form-control" required="">
                <p id="errorpwd" class="error"></p>
            </div>
               

            <div class="u-form-group u-label-top u-form-group-5">
              
                <label for="confirmer" class="field-label">confirmer mot de passe </label>
                <input type="password" placeholder="confirmez votre mot de passe" name="confirmer" id="confirmer"  class="form-control">
                <p id="errorconfirmer" class="error"></p>
            </div>


            <div class="u-form-date u-form-group u-label-top u-form-group-6">               
                <label for="datee" class="field-label">Date de naissance</label>                   
                <input type="date" placeholder="MM-DD-YYYY" name="datee" id="datee"class="form-control" required="" >
                <p id="errordatee" class="error"></p>

                <div class="g-recaptcha" data-sitekey="6LdAnrYfAAAAAEYWZ7NAbNtSTNdCCG_hOVaaPbYU"></div>
            </div>
            
        
            <div class="u-align-center u-form-group u-form-submit u-label-top">
                        <input type="submit" id="form-submit" class="theme-btn btn-style-one" value="Envoyer" class="form-control" onclick="showNotification()" onclick="verif()" > 
                        
                        <input type="reset" id="form-submit" class="theme-btn btn-style-one" value="reset" >
                        <br>
                        
                        <a  href="log.php"  class="u-label u-label-6">Vous avez déja un compte ? </a>
                        </div>
            
        </form>
        </form>                   
	
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