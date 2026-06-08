<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 5</title>
</head>
<body>

<h1>Harjutus 5.1</h1>
<?php
$tudrukud = ["Sofia", "Laura", "Emma", "Marta", "Anette", "Eliise", "Sandra", "Kertu", "Mia"];

sort($tudrukud);

echo "<h3>Kogu nimekiri (sorteeritud):</h3>";
foreach ($tudrukud as $nimi) {
    echo $nimi . "<br>";
}

echo "<h3>Esimesed 3 nime:</h3>";
$esimesed_kolm = array_slice($tudrukud, 0, 3);
echo implode(", ", $esimesed_kolm) . "<br>";

echo "<h3>Viimane nimi nimekirjas:</h3>";
$viimane_nimi = $tudrukud[count($tudrukud) - 1]; 
echo $viimane_nimi . "<br>";

echo "<h3>Üks suvaline nimi nimekirjast:</h3>";
$suvaline_indeks = rand(0, count($tudrukud) - 1);
echo "Suvaline valitud nimi on: <strong>" . $tudrukud[$suvaline_indeks] . "</strong> (indeksiga $suvaline_indeks)<br>";
?>
<hr>

<h1>Harjutus 5.2</h1>

<hr>

<h1>Harjutus 5.3</h1>

<hr>

<h1>Harjutus 5.4</h1>

<hr>

<h1>Harjutus 5.5</h1>

<hr>

<h1>Harjutus 5.6</h1>

<hr>

<h1>Harjutus 5.7</h1>

<hr>

<h1>Harjutus 5.8</h1>

<hr>

</body>
</html>