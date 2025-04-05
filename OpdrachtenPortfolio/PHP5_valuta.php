<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Valuta Omrekenen</title>
  <?php include 'header.php'; ?>
</head>
<body>

  <div class="container">
    <form method="POST">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Hoeveel euro wilt u inwisselen?</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="aantal_euro" placeholder="€" min="1" style="width:20%;" required>
      </div>

      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="currencyButton" data-bs-toggle="dropdown" aria-expanded="false" style="width: 8%;">
          Valuta
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#" onclick="changeCurrency('GBP')">GBP</a></li>
          <li><a class="dropdown-item" href="#" onclick="changeCurrency('USD')">USD</a></li>
        </ul>
      </div>

 
      <input type="hidden" name="currency" id="currencyInput" value="">

      <br>
      <button type="submit" name="submit" class="btn btn-primary">Omrekenen</button>
    </form>

    <div class="mb-3">
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="width:20%;"><?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["aantal_euro"]) && !empty($_POST["currency"])) {
            $euro = htmlspecialchars($_POST["aantal_euro"]);
            $currency = htmlspecialchars($_POST["currency"]);

            $koers_usd = 1.07;
            $koers_gbp = 0.86;

            if ($currency == "USD") {
                $converted = $euro * $koers_usd;
                echo "€$euro omgewisseld naar USD: $$converted";
            } elseif ($currency == "GBP") {
                $converted = $euro * $koers_gbp;
                echo "€$euro omgewisseld naar GBP: £$converted";
            }
        }
      ?>
      </textarea>
    </div>
  </div>

  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    function changeCurrency(currency) {
      document.getElementById("currencyButton").textContent = currency;
      document.getElementById("currencyInput").value = currency;
    }
  </script>

</body>
</html>
