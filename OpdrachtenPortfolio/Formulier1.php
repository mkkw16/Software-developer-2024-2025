<link rel="stylesheet" href="style_PHP_variabelen.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<?php include 'header.php'; ?>

<body>
	<div class="styling">
	  <h1>Formulier-1</h1>
		<form action="Formulier1_Response.php" method="post">
		  <label for="naam">Naam:</label><br>
		  <input type="text" id="naam" name="naam"><br><br>

		  <label for="email">Email</label><br>
		  <input type="email" id="email" name="email"><br><br>

		  <label for="leeftijd">Leeftijd</label><br>
		  <input type="number" id="leeftijd" name="leeftijd"><br><br>
		  <input type="submit" value="Submit">
		</form>
	</div>
</body>

<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


