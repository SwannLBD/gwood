<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Personnaliser</title>
	
	<link rel="stylesheet" href="vendors/Bootstrap/Bootstrap-Design/vendors/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

	<?php include('parts/header.php') ?>
	
	<div class="container-menu">
		<div class="nav flex-column nav-pills block-nav" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<a class="nav-link active" id="v-pills-corp-tab" data-toggle="pill" href="#v-pills-corp" role="tab" aria-controls="v-pills-corp" aria-selected="true">Corps</a>
			<a class="nav-link" id="v-pills-motifs-tab" data-toggle="pill" href="#v-pills-motifs" role="tab" aria-controls="v-pills-motifs" aria-selected="false">Motifs</a>
			<a class="nav-link" id="v-pills-cordes-tab" data-toggle="pill" href="#v-pills-cordes" role="tab" aria-controls="v-pills-cordes" aria-selected="false">Cordes</a>
			<a class="nav-link" id="v-pills-rosace-tab" data-toggle="pill" href="#v-pills-rosace" role="tab" aria-controls="v-pills-rosace" aria-selected="false">Rosace</a>
			<a class="nav-link" id="v-pills-boutons-tab" data-toggle="pill" href="#v-pills-boutons" role="tab" aria-controls="v-pills-boutons" aria-selected="false">Boutons</a>
			<a class="nav-link" id="v-pills-manche-tab" data-toggle="pill" href="#v-pills-manche" role="tab" aria-controls="v-pills-manche" aria-selected="false">Manche</a>
			<a class="nav-link" id="v-pills-meca-tab" data-toggle="pill" href="#v-pills-meca" role="tab" aria-controls="v-pills-meca" aria-selected="false">Mécaniques</a>
		</div>

		<div class="tab-content" id="v-pills-tabContent">
			<div class="tab-pane fade show active" id="v-pills-corp" role="tabpanel" aria-labelledby="v-pills-corp-tab">
				ça marche !
			</div>
			<div class="tab-pane fade" id="v-pills-motifs" role="tabpanel" aria-labelledby="v-pills-motifs-tab">
				.2..
			</div>
			<div class="tab-pane fade" id="v-pills-cordes" role="tabpanel" aria-labelledby="v-pills-cordes-tab">
				..3.
			</div>
			<div class="tab-pane fade" id="v-pills-rosace" role="tabpanel" aria-labelledby="v-pills-rosace-tab">
				.4..
			</div>
			<div class="tab-pane fade" id="v-pills-boutons" role="tabpanel" aria-labelledby="v-pills-boutons-tab">
				.5..
			</div>
			<div class="tab-pane fade" id="v-pills-manche" role="tabpanel" aria-labelledby="v-pills-manche-tab">
				.6..
			</div>
			<div class="tab-pane fade" id="v-pills-meca" role="tabpanel" aria-labelledby="v-pills-meca-tab">
				.7..
			</div>
		</div>
	</div>
	
	<?php include('parts/footer.php') ?>
	
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/jquery/jquery.min.js"></script>
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/popper/popper.min.js"></script>
	<script src="vendors/Bootstrap/Bootstrap-Design/vendors/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>