<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 3</title>
</head>
<body>
    <form action="">
        alumine pikkus <input type="number" name="alumine_pikkus"><br>
        ülemine pikkus <input type="number" name="ulemine_pikkus"><br>
        kõrgus <input type="number" name="korgus"><br>
        vasak haar <input type="number" name="vasak_haar"><br>
        parem haar <input type="number" name="parem_haar"><br>
        <input type="submit" value=saada>
    </form>
    <?php

    $a_pikkus = $_GET["alumine_pikkus"];
    $u_pikkus = $_GET["ulemine_pikkus"];
    $korgus = $_GET["korgus"];
    $vasak_haar = $_GET["vasak_haar"];
    $parem_haar = $_GET["parem_haar"];

    $pindala = ($a_pikkus*$u_pikkus/2)*$korgus;
    $umbermoot = $a_pikkus+$u_pikkus+$vasak_haar+$parem_haar;
    printf("Trapetsi pindala on %.1f ja ümbermõõt %.1f", $pindala, $umbermoot)
    ?>
</body>
</html>