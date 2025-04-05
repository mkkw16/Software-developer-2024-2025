<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="PHP4_leeftijd.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP werken met formulieren</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <?php include 'header.php'; ?>
</head>

<body>

<div class="col-md-4">
  <form action="" method="POST">  <!-- action="" betekent dat het formulier zichzelf verwerkt -->
    <select id="inputState" name="fruit" class="form-select" style="width:30%;">
      <option value="" selected>Kies fruit</option>
      <option value="banaan">Banaan</option>
      <option value="appel">Appel</option>
      <option value="kers">Kersen</option>
      <option value="meloen">Meloen</option>
      <option value="sinaasappel">Sinaasappel</option>
    </select>
    <br>
    <button type="submit" name="submit" class="btn btn-primary" style="width:30%;">Bekijk</button>
  </form>
</div>

<?php    
if (isset($_POST['submit'])) {  
    $fruit = $_POST['fruit'];   

    switch ($fruit) {
        case "banaan":
            echo "<p>Je hebt gekozen voor een banaan!</p>";
            echo '<img src="bananen.JPG" alt="Banaan" style="width:200px;">';
            break;
        case "appel":
            echo "<p>Je hebt gekozen voor een appel!</p>";
            echo '<img src="appel.jpg" alt="Appel" style="width:200px;">';
            break;
        case "kers":
            echo "<p>Je hebt gekozen voor kersen!</p>";
            echo '<img src="kersen.jpg" alt="Kersen" style="width:200px;">';
            break;
        case "meloen": 
            echo "<p>Je hebt gekozen voor een meloen!</p>";
            echo '<img src="meloen.jpg" alt="Meloen" style="width:200px;">';
            break;
        case "sinaasappel":
            echo "<p>Je hebt gekozen voor een sinaasappel!</p>";
            echo '<img src="sinaasappel.jpg" alt="Sinaasappel" style="width:200px;">';
            break;
        default:
            echo "<p>Kies een fruitsoort.</p>";
    }
}
?>

<?php include 'footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
