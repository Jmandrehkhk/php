<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 4</title>
</head>
<body>
        <form action="">
        Täisarv 1 <input type="number" name="var1"><br>
        Täisarv 2 <input type="number" name="var2"><br>
        <br>
        Kasutaja1 Vanus <input type="number" name="kasutaja1_vanus"><br>
        Kasutaja2 Vanus <input type="number" name="kasutaja2_vanus"><br>
        <br>
        Kujundi a pikkus <input type="number" name="kujund_a_pikkus"><br>
        Kujundi b pikkus <input type="number" name="kujund_b_pikkus"><br>
        <br>
        Juubel <input type="number" name="juubel"><br>
        <br>
        Hinne <input type="number" name="hinne"><br>
        <input type="submit" value=saada>
    </form>
    <?php

    $var1 = $_GET["var1"];
    $var2 = $_GET["var2"];
    $kasutaja1_vanus = $_GET["kasutaja1_vanus"];
    $kasutaja2_vanus = $_GET["kasutaja2_vanus"];
    $kujund_a_pikkus = $_GET["kujund_a_pikkus"];
    $kujund_b_pikkus = $_GET["kujund_b_pikkus"];
    $juubel = $_GET["juubel"];
    $hinne = $_GET["hinne"];
    switch(true) {
        case !$var1:
            echo "var1 missing! <br>";
            break;
        case !$var2: 
            echo "var2 missing! <br>";
            break;
        default:
            echo $var1." / ".$var2 ." = ". $var1/$var2."<br>";
    }
    if($kasutaja1_vanus==$kasutaja2_vanus) {
        echo "Kasutaja1 ja Kasutaja2 on ühevanused <br>";
        }
    elseif($kasutaja1_vanus<$kasutaja2_vanus) {
        echo "Kasutaja2 on vanem kui Kasutaja1 <br>";

        }
    elseif($kasutaja2_vanus<$kasutaja1_vanus) {
        echo "Kasutaja1 on vanem kui Kasutaja2 <br>";
    }
    else {
        echo "Vanused puuduvad <br>";
    }
    echo $kujund_a_pikkus." ".$kujund_b_pikkus." <br>";
    
    if($kujund_a_pikkus==$kujund_b_pikkus) {
        echo "Kujund on ruut <br>";
        }
    elseif($kujund_a_pikkus<$kujund_b_pikkus) {
        echo "Kujund on Ristkülik <br>";

        }
    elseif($kujund_b_pikkus<$kujund_a_pikkus) {
        echo "Kujund on Ristkülik <br>";
        }
    else {
        echo "andmed puuduvad <br>";
    }
    echo '<svg width="'.$kujund_a_pikkus.'" height="'.$kujund_b_pikkus.'">
            <rect width="'.$kujund_a_pikkus.'" height="'.$kujund_b_pikkus.'" style="fill:rgb(0,0,255);" />
        </svg>';
    if($juubel==25) {
        echo "Juubel!<br>";
        }
    elseif($juubel== 50) {
        echo "Juubel!<br>";
    }
    elseif($juubel== 75) {
        echo "Juubel!<br>";
    }
    elseif($juubel== 100) {
        echo "Juubel!<br>";
    }
    else{
    }
    switch(true) {
        case (!$hinne):
            echo "Sisesta oma punktid!";
            break;
        case ($hinne>10):
            echo "SUPER!";
            break;
        case ($hinne<9&$hinne>4):
            echo "TEHTUD";
            break;
        case ($hinne<5):
            echo "KASIN!";
            break;
    }
    ?>
</body>
</html>