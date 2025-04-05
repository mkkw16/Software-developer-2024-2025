<link rel="stylesheet" href="response.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<?php include 'header.php'; ?>


<?php
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		//  Haal de gegevens op uit het formulier
		$naam = htmlspecialchars($_POST["naam"]);
		$email = htmlspecialchars($_POST["email"]);
		$leeftijd = htmlspecialchars($_POST["leeftijd"]);

	}
?>	

	<h1>Formulier1 response</h1>
		<ul class="list-group list-group-horizontal">
		  <li class="list-group-item">Naam:</li>
		  <li class="list-group-item"><?php echo "$naam";?></li>
		</ul>
		<ul class="list-group list-group-horizontal-sm">
		  <li class="list-group-item">email:</li>
		  <li class="list-group-item"><?php echo "$email";?></li>
		</ul>
		<ul class="list-group list-group-horizontal-md">
		  <li class="list-group-item">leeftijd:</li>
		  <li class="list-group-item"><?php echo "$leeftijd";?></li>
		</ul>

<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>