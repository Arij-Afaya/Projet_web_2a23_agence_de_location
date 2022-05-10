<?php
	include '../controlleur/userC.php';
	$userC=new userC();
	$listeuser=$userC->afficheruser(); 
?>





<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Development Services">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Accueil</title>
    <link rel="stylesheet" href="nicepagetable.css" media="screen">
<link rel="stylesheet" href="Accueiltable.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.3.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Accueil">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-93f3"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-nav-container">
           
		 
		 
		 
		  <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Accueil.html" style="padding: 10px 20px;">Accueil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.html" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.html" style="padding: 10px 20px;">Contact</a>
</li></ul>




          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>



                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Accueil.html">Accueil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">Contact</a>
</li></ul>




              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="carousel_fb56">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-table u-table-responsive u-table-1">






	<head></head>
	<body>
	    <button><a href="ajouterUser.php">Ajouter un utilisateur</a></button>
		<center><h1>Liste des utilisateurs</h1></center>
		<table class="u-table-entity u-table-entity-1">

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
	</body>
</html>
