<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

  <h1>Harjutus 5.1</h1>
    <?php
    function tervitus() {
        return "Tere päiksekesekene!";
    }

    echo tervitus();
  ?>
  <hr>

  <h1>Harjutus 5.2</h1>
    <?php
    function UudiskirjaVorm() {
        return '
        <form class="row g-3">
          <div class="col-auto">
            <input type="email" class="form-control" placeholder="Sinu email" required>
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Liitu uudiskirjaga</button>
          </div>
        </form>';
    }

    echo UudiskirjaVorm();
    ?>
  <hr>

  <h1>Harjutus 5.3</h1>
    <?php
      function looKasutajaAndmed($nimi) {
      // Väikesed tähed
      $kasutaja = strtolower($nimi);
    
      // Email
      $email = $kasutaja . "@hkhk.edu.ee";
    
      // Suvaline 7-kohaline kood (tähed ja numbrid)
      $symbolid = 'abcdefghijklmnopqrstuvwxyz0123456789';
      $kood = substr(str_shuffle($symbolid), 0, 7);
    
      return [
          'kasutaja' => $kasutaja,
          'email' => $email,
          'kood' => $kood
      ];
      }

      $andmed = looKasutajaAndmed("MariMaasikas");
      echo "Kasutaja: " . $andmed['kasutaja'] . "<br>Email: " . $andmed['email'] . "<br>Kood: " . $andmed['kood'];
    ?>
  <hr>

  <h1>Harjutus 5.4</h1>
    <?php

    ?>
  <hr>

  <h1>Harjutus 5.5</h1>
    <?php

    ?>
  <hr>

  <h1>Harjutus 5.6</h1>
    <?php

    ?>
  <hr>

  <h1>Harjutus 5.7</h1>
    <?php

    ?>
  <hr>

  <h1>Harjutus 5.8</h1>
    <?php

    ?>
  <hr>

</body>
</html>