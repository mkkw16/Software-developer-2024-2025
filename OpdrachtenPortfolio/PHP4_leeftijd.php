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
  <div class="container">
    <h2 class="text-center mb-4">Leeftijd Berekenen</h2>

    <form action="" method="POST">
      <div class="mb-3">
        <label for="naam" class="form-label fw-bold">Naam:</label>
        <input type="text" class="form-control" id="naam" name="naam" style="width: 17%;" placeholder="Vul je naam in..." required>
      </div>

      <div class="mb-3">
        <label for="geboortedatum" class="form-label fw-bold">Geboortedatum:</label>
        <input type="date" class="form-control" id="geboortedatum" style="width: 17%;" name="geboortedatum"  required>
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Bereken Leeftijd</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["geboortedatum"]) && !empty($_POST["naam"])) {
        // Naam en geboortedatum ophalen
        $naam = htmlspecialchars($_POST["naam"]); // Beveiliging tegen XSS-aanvallen
        $huidige_datum = new DateTime();
        $geboorte_datum_object = new DateTime($_POST["geboortedatum"]);

        // Leeftijd berekenen
        $leeftijd = $huidige_datum->diff($geboorte_datum_object)->y;

        // Controle of gebruiker jarig is
        if ($huidige_datum->format('m-d') === $geboorte_datum_object->format('m-d')) {
            echo "<div class='alert alert-success result text-center'>🎉 Gefeliciteerd, <b>$naam</b>! Je bent vandaag jarig! Je bent nu <b>$leeftijd</b> jaar oud.</div>";
        } else {
            echo "<div class='alert alert-info result text-center'>👋 $naam, je bent vandaag niet jarig. Je bent <b>$leeftijd</b> jaar oud.</div>";
        }
    }
    ?>
  </div>

  <?php include 'footer.php'; ?>
  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
