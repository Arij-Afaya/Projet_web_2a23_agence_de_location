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
                                    <li class="current dropdown"><a href="index-2.html">Accueil</a>
                                        
                                    </li>
									<li class="dropdown"><a href="about.html">A Propos de nous</a>
                                        <ul>
											<li><a href="team.html">Notre Equipe</a></li>
											
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
                                    <li class="dropdown"><a href="reclamation.php">Login</a>
                                        
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
    <section class="page-title" style="background-image:url(images/background/1.png)">
    	<div class="auto-container">
        	<h2>Nos Sponsors</h2>
            <ul class="page-breadcrumb">
            	<li><a href="index-2.html">Accueil</a></li>
                <li>Nos Sponsors</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Portfolio Page Section -->
	<section class="portfolio-page-section">
		<div class="auto-container">
			<!--MixitUp Galery-->
            <div class="mixitup-gallery">
                
                <!--Filter
                <div class="filters clearfix">
                	
                	<ul class="filter-tabs filter-btns text-center clearfix">
                        <li class="active filter" data-role="button" data-filter="all">Tout</li>
                        <li class="filter" data-role="button" data-filter=".residential-interior">Sponsors Voitures</li>
                        <li class="filter" data-role="button" data-filter=".interior">Sponsors motos</li>
                        <li class="filter" data-role="button" data-filter=".kitchen">Sponsors vélo</li>
                        
					
                    </ul>
                    
                </div> -->
                
                <div class="filter-list row clearfix">
					
					<!-- Gallery Item 
					<div class="gallery-item mix all wardrobe kitchen col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/v1.PNG" alt="">
								<!--Overlay Box
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Sponsors Vélo</a></h3>
											<a href="images/gallery/v1.PNG" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div> -->
					<!-- Gallery Item 
					<div class="gallery-item mix all wardrobe kitchen col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/v2.PNG" alt="">
								<!--Overlay Box
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Sponsors Vélo</a></h3>
											<a href="images/gallery/v2.PNG" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div> -->
					<!-- Gallery Item 
					<div class="gallery-item mix all wardrobe kitchen col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/v3.PNG" alt="">
								<!--Overlay Box
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Sponsors Vélo</a></h3>
											<a href="images/gallery/v3.PNG" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div> -->
					<!-- Gallery Item 
					<div class="gallery-item mix all wardrobe kitchen col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/vv1.png" alt="">
								<!--Overlay Box
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Sponsors Voitures</a></h3>
											<a href="images/gallery/vv1.png" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div> -->
					
					<!-- Gallery Item
					<div class="gallery-item mix all wardrobe residential-interior interior col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/m1.png" alt="">
								
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Sponsors motos</a></h3>
											<a href="images/gallery/m1.png" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div> -->
					
					
					
					<!-- Gallery Item 
					<div class="gallery-item mix all interior residential-interior col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/21.jpg" alt="">
								
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="images/gallery/21.jpg" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div> 
					
	
					<div class="gallery-item mix all wardrobe furniture kitchen col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/22.jpg" alt="">
								
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="images/gallery/22.jpg" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					
					<div class="gallery-item mix all interior furniture col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/23.jpg" alt="">
								
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="images/gallery/23.jpg" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
					
					<div class="gallery-item mix all furniture kitchen col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/24.jpg" alt="">
								
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="images/gallery/24.jpg" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
				
					<div class="gallery-item mix all furniture col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/25.jpg" alt="">
								
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="images/gallery/25.jpg" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Story Section --> 

	<section class="sponsors">
						<div class="container">
							
							
											
	<?php
	include '../controlleur/sponsorsC.php';
	$sponsorsC=new sponsorsC();
	$listesponsors=$sponsorsC->affichers(); 
?>

<html>
	<head></head>
	<body>




	  <!--  <button><a href="ajoutersponsors.php">Ajouter un sponsors</a></button> --> 
		<center><h1>Liste des sponsors</h1></center>
		<table border="1" align="center">
			<tr>
				<th>id_s</th>
				<th>nom_s</th>
				<th>date_contrat</th>
				<th>prix_contrat</th>
				<th>imagee1</th>
				<!-- <th>Modifier</th>
				<th>Supprimer</th> --> 
			</tr>

			 
		
			<?php
				foreach($listesponsors as $sponsors){
			?>
			<tr>
				<td><?php echo $sponsors['id_s']; ?></td>
				<td><?php echo $sponsors['nom_s']; ?></td>
				<td><?php echo $sponsors['date_contrat']; ?></td>
				<td><?php echo $sponsors['prix_contrat']; ?></td>
				<td><img src=<?php echo $sponsors['imagee1'];  ?> alt= <?php echo $sponsors['nom_s'];  ?> /></td>
			
				<td>
					<!--	<form method="POST" action="modifiersponsors.php">
						<input type="submit" name="Modifier" value="Modifier"> --> 
						<input type="hidden" value=<?PHP echo $sponsors['id_s']; ?> name="id_s">
					</form>
				</td>
				<td>
				<!--	<a href="delete.php?id_e=<?php echo $sponsors['id_s']; ?>">Supprimer</a> --> 
				</td>
			</tr>
				<?php
				}
			?>


			
		</table>


		<center><h1>PGO SPONSORING</h1></center>
		<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
				<iframe width="560" height="315" src="https://www.youtube.com/embed/SVj3l4ZXhHM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				</div>
				</div>
				</section>

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
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/appear.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/script.js"></script>
</body>

<!-- stella-orre/projects-classic.html  30 Nov 2019 03:51:15 GMT -->
</html>