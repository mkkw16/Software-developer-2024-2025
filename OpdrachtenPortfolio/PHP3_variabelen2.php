<?php include 'header.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<body>
    <div class="web_title">
        <h1 style="text-align: center;">PHP 3</h1>
    </div>
    <?php
		$lengte = 33;
		$breedte = 40;
		$hoogte = 20;

		$oppervlakte = $lengte * $breedte;
		$inhoud = $lengte * $breedte * $hoogte;
    ?>
		<div class="card" style="width: 18rem; margin: 20px auto;">
		    <div class="card-header bg-primary text-white">
		        Overzicht van Afmetingen
		    </div>
		    <div class="card-body">
		        <p><strong>Lengte:</strong> <?php echo $lengte; ?> cm</p>
		        <p><strong>Breedte:</strong> <?php echo $breedte; ?> cm</p>
		        <p><strong>Hoogte:</strong> <?php echo $hoogte; ?> cm</p>
		        <p><strong>Oppervlakte:</strong> <?php echo $oppervlakte; ?> cm²</p>
		        <p><strong>Inhoud:</strong> <?php echo $inhoud; ?> cm³</p>
		    </div>
		</div>

</body>

<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
