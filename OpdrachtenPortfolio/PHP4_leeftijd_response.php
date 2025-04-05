<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP 4 response page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<?php include 'header.php'; ?>
</head>
<body>
<?php 
if (isset($_POST['submit'])) {
	$naam = htmlspecialchars($_POST["naam"]);
	$geboortedatum = htmlspecialchars($_POST["geboortedatum"]);

}
?>
 	<?= "$naam";?>	
</body>
	<?php include 'footer.php'; ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>