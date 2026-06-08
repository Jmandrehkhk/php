<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HARJUTUSED</title>
</head>
<body>
    <?php
    $valik = $_GET['calc'] ?? '';

    ?>
    <H1>Harjutus 1</H1>
    <p>
        <?php
        //Jarek Mandre, 17.04
        // Harjutus 1

        $nimi = "Jarek";
        $sa = 2008;
        $tähtkuju = "Leo";


        echo $nimi. "<br>" .$sa. "<br>" .$tähtkuju;
        echo "<br>";
        echo "\"It's My Life\" - Dr. Alban<br>";
        echo '(\(\\ <br> ( -.-) <br> o_(")(")';

        ?>
    </p>    
</body>
</html>