<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>home</title>

	<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/swann.css">
	<link rel="stylesheet" href="css/etienne.css">

</head>

<body>

<?php include 'parts/header.php' ?>

	<div class="block-center">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  			<ol class="carousel-indicators">
   				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  			</ol>
  			<div class="carousel-inner">
    			<div class="carousel-item active">
      				<img class="d-block w-100" src="images/fondhome.jpg" alt="First slide" href="#">
      				<h1 class="titre_caroussel">Personnalisez <br> votre guitare</h1>
    			</div>
    			<div class="carousel-item">
      				<img class="d-block w-100" src="images/fondhome.jpg" alt="Second slide" href="#">
      				<h1 class="titre_caroussel">Personnalisez <br> votre guitare</h1>
    			</div>
    			<div class="carousel-item">
      				<img class="d-block w-100"  src="images/fondhome.jpg" alt="Third slide" href="#">
      				<h1 class="titre_caroussel">Personnalisez <br> votre guitare</h1>
    			</div>
  			</div>
  			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
  			</a>
 			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
  			</a>
		</div>
		<div class="suite_page">
			<div class="avis_general">
				<div class="avis_clients">
					<p>Avis clients:</p>
				</div>
				<div class="avis1">
					<div class="liste_etoile">
						<a class="etoile">
							<img src="images/star (1).png">
						</a>
						<a class="etoile">
							<img src="images/star (1).png">
						</a>
						<a class="etoile">
							<img src="images/star (1).png">
						</a>
						<a class="etoile">
							<img src="images/star (1).png">
						</a>
						<a class="etoile">
							<img src="images/star.png">
						</a>
						<p class="nom_avis">Bernard</p>
					</div>
					<p class="texte_avis">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
				</div>
				<div class="avis2">
					<div class="liste_etoile">
						<a class="etoile">
							<img src="images/star (1).png">
						</a>
						<a class="etoile">
							<img src="images/star (1).png">
						</a>
						<a class="etoile">
							<img src="images/star (1).png">
						</a>
						<a class="etoile">
							<img src="images/star (1).png">
						</a>
						<a class="etoile">
							<img src="images/star (1).png">
						</a>
						<p class="nom_avis">Thomas</p>
					</div>
					<p class="texte_avis">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
				<div class="avis3">
					<div class="liste_etoile">
						<a class="etoile">
							<img src="images/star (1).png">
						</a>
						<a class="etoile">
							<img src="images/star (1).png">
						</a>
						<a class="etoile">
							<img src="images/star (1).png">
						</a>
						<a class="etoile">
							<img src="images/star.png">
						</a>
						<a class="etoile">
							<img src="images/star.png">
						</a>
						<p class="nom_avis">Celine</p>
					</div>
					<p class="texte_avis">Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
				</div>
				<div class="laisser_avis">
					<div class="liste_etoile">
						<a class="etoile">
							<img src="images/star.png">
						</a>
						<a class="etoile1">
							<img src="images/star.png">
						</a>
						<a class="etoile2">
							<img src="images/star.png" >
						</a>
						<a class="etoile3">
							<img src="images/star.png">
						</a>
						<a class="etoile4">
							<img src="images/star.png">
						</a>
						<p class="avis_depo">Laisser votre avis...</p>
					</div>
				</div>
				
			</div> 
			<div class="picto">
				<ul class="liste_picto">
					<li>
						<a>
							<img class="fabrication" src="images/fabrication-francaise.png">
							<p class="intitule_fab">Fabrication française</p>
						</a>
					</li>
					<li>
						<a>
							<img class="livraison" src="images/camion.png">
							<p class="intitule_liv">Livraison offerte <br> à partir de 100€ d'achat</p>
						</a>
					</li>
					<li>
						<a>	
							<img  class="paiement"	src="images/payment-security.png">
							<p class="intitule_paie">Paiement sécurisé</p>
						</a>
					</li>
					<li>
						<a>
							<img  class="satisfait" src="images/package exchange.png">
							<p class="intitule_sati">1 mois satisfait ou <br> remboursé  </p>
						</a>
					</li>
				</ul>
			</div>
		</div>	
	</div>	
	
	
	

<?php include 'parts/footer.php' ?>

</body>
</html>