
<?php
    require_once     '../controlleur/articleC.php';
    require_once '../model/article.php' ;
 

 $articleC = new articleC();
if(isset($_POST['tri'])) {
    $articleS = $articleC->triarticle();
 }else {
    $articleS = $articleC->afficherarticle();
 }
    
?>

<!DOCTYPE html>
<html lang="fr">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> AIM </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="artic.css">
  <link rel="shoet icon" href="image/logo.png">
</head>

<body>
  <nav>

    <h1>AIM</h1>
    <div class="onglets">
    <a href="#home"  onclick=window.location.href='article.html'>Home</a>
            <a href="#Articles"  onclick=window.location.href='articlee.php'>article</a>
            <a href="#Categorie" onclick=window.location.href='afficherfrontcategorie.php'>Categories</a>
            <a href="#Chercher"  onclick=window.location.href='search.php'>chercher</a>
            <a href="#contact">Contact</a>

    </div>
  </nav>


  <header>
    <h1>AIM</h1>
    <h4>LE MEILLEUR SITE DE TECHNOLOGIE.</h4>

  </header>
 
  <?php

session_start(); // DEMARRE LA SESSION
// SAUVGARDE LA VARIABLE hits DANS LE FICHIER DE SESSION
$hits =0;

// TRAITEMENT SUR LE FICHIER TEXTE
if(empty($hits)){
$fp=fopen("compteur.txt","a+"); //OUVRE LE FICHIER compteur.txt
$num=fgets($fp,4096); // RECUPERE LE CONTENUE DU COMPTEUR
fclose($fp); // FERME LE FICHIER
$hits=$num - -1; // TRAITEMENT
$fp=fopen("compteur.txt","w"); // OUVRE DE NOUVEAU LE FICHIER
fputs($fp,$hits); // MET LA NOUVELLE VALEUR
fclose($fp); // FERME LE FICHIER
}
else echo "no";
// AFICHAGE DU COMPTEUR
echo"<TABLE align=center>";
echo"<TR>";
echo"<TD STYLE='border:1pt Solid navy;' >";
echo"<FONT FACE='Verdana, Arial, Helvetica, sans-serif' SIZE=1>";
echo"Nombre de visiteurs :$hits";
echo"</FONT>";
echo"</TD>";
echo"</TR>";
echo"</TABLE>";
?>  
<div id="google_translate_element"></div>
<p>You can translate the content of this page by selecting a language in the select box.</p>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <html>

<body>


<form method="post" align=center>
<div class="text-center">
<form action="" method="POST">
    <input type="text" name="tri" hidden>
    <input type="submit" value="trier" class="btn btn-primary">
</div>
</form>
               
                    </form>

</body>
</html>

  <?php 
                foreach ($articleS as $article) {
                  
        ?>


<tr >

<div id="corps" align=center >
    <table width=100% border=6 cellspacing=12 cellpadding=5>
        <tr>
        <tr>
           
              <table  class="table_2">
                <div class="latest-news pt-150 pb-150">
	

  <div class="row">
    <div >
      <div class="single-latest-news">
        <a href="ai1.html"><div class="latest-news-bg news-bg-1"></div></a>
        <div class="news-text-box">
      
        <p class="blog-meta">
                        
    
							<td>	<span class="author"><i class="fas fa-user"></i>    <colspan=2 > <?php echo $article['auteur'] ; ?>  </span></td>
              <td > <span class="date"><i class="fas fa-calendar"></i> <?php echo $article['date'] ; ?></span>  </td> 
             
            </p>                
                    </tr>
                    <tr >
                    
                        <td rowspan=2><p class="excerpt"><?php echo $article['description'] ; ?></p>
                         <a  class="read-more-btn" href='filtrarticle.php?id=<?php echo $article['id'] ; ?>'> read more <i class="fas fa-angle-right"></i></a> </td>
                        <h3><a href="ai1.html"> <td colspan=2 > <?php echo $article['titre'] ; ?>  </td></a></h3>
                      

                    </tr>
                    <tr height=40> 
        
                        <td >    <img class="im" src="image/tech.jpg"  ></td> 
                 </tr>
                 	</div>
					</div>
				</div>
				</div>
					</div>
               </table>
               
             </td>
           </tr>
         
        <?php
                }
        ?>
        
    </table>
    <td><div class="text-center">
  <a href="user_data_print.php" class="btn btn-primary">print </a></td>
</div>

</section>

  <footer>

    <h1>Nos services</h1>

    <p>Découvrez nos services en ligne complets .</p>
    <br>

    <div class="service">
      <h3>Paiement en ligne</h3>
      <p>Découvrez les méthodes facile de Paiement en ligne ( paiment banquaire ).</p>
    </div>


    </div>

    <p id="contact">Contact : telephone: +216 70 000 111 | Facebook/Instagram: AIM | Gmail: AIM.ESPRIT@gmail.com |
      &copy; 2021, AIM.</p>
  </footer>


</body>

</html>
<!DOCTYPE html>
