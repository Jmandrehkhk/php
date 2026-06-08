<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 4
    </title>
</head>
<body>
    <H1>Harjutus 4.1</H1>

    <form method="get" action="">
        <input type="hidden" name="tegevus" value="jagamine">
        Arv 1: <input type="number" name="jagatav" value="<?php echo isset($_GET['jagatav']) ? $_GET['jagatav'] : ''; ?>">
        Arv 2: <input type="number" name="jagaja" value="<?php echo isset($_GET['jagaja']) ? $_GET['jagaja'] : ''; ?>">
        <input type="submit" value="Jaga">
    </form>
    <?php
    if (isset($_GET['tegevus']) && $_GET['tegevus'] == 'jagamine') {
        // Kontroll, et väljad poleks tühjad
        if ($_GET['jagatav'] !== '' && $_GET['jagaja'] !== '') {
            $arv1 = (float)$_GET['jagatav'];
            $arv2 = (float)$_GET['jagaja'];

            if ($arv2 == 0) {
                echo "<div class='veateade'>Hoiatus: Nulliga ei saa jagada!</div>";
            } else {
                $tulemus = $arv1 / $arv2;
                echo "<div class='tulemus'>Vastus: $arv1 / $arv2 = $tulemus</div>";
            }
        }
    }
    ?>
    <hr>

    <H1>Harjutus 4.2</H1>
    <form method="get" action="">
        <input type="hidden" name="tegevus" value="vanus">
        Esimese isiku vanus: <input type="number" name="vanus1" value="<?php echo isset($_GET['vanus1']) ? $_GET['vanus1'] : ''; ?>">
        Teise isiku vanus: <input type="number" name="vanus2" value="<?php echo isset($_GET['vanus2']) ? $_GET['vanus2'] : ''; ?>">
        <input type="submit" value="Võrdle vanuseid">
    </form>
    <?php
    if (isset($_GET['tegevus']) && $_GET['tegevus'] == 'vanus') {
        // Kood ei käivitu, kui kumbki lahter on tühi
        if ($_GET['vanus1'] !== '' && $_GET['vanus2'] !== '') {
            $v1 = (int)$_GET['vanus1'];
            $v2 = (int)$_GET['vanus2'];

            if ($v1 > $v2) {
                echo "<div class='tulemus'>Esimene isik on vanem.</div>";
            } elseif ($v2 > $v1) {
                echo "<div class='tulemus'>Teine isik on vanem.</div>";
            } else {
                echo "<div class='tulemus'>Isikud on ühevanused.</div>";
            }
        }
    }
    ?>
    <hr>

    <H1>Harjutus 4.3 ja 4</H1>
    <form method="get" action="">
        <input type="hidden" name="tegevus" value="kujund">
        Külg A (px): <input type="number" name="kylgA" min="1" value="<?php echo isset($_GET['kylgA']) ? $_GET['kylgA'] : ''; ?>">
        Külg B (px): <input type="number" name="kylgB" min="1" value="<?php echo isset($_GET['kylgB']) ? $_GET['kylgB'] : ''; ?>">
        <input type="submit" value="Kontrolli ja joonista">
    </form>
    <?php
    if (isset($_GET['tegevus']) && $_GET['tegevus'] == 'kujund') {
        if ($_GET['kylgA'] !== '' && $_GET['kylgB'] !== '') {
            $a = (int)$_GET['kylgA'];
            $b = (int)$_GET['kylgB'];

            // 3. Ülesande loogika (otsus)
            if ($a == $b) {
                $tyyp = "ruut";
                echo "<div class='tulemus'>Tegemist on <strong>ruuduga</strong>.</div>";
            } else {
                $tyyp = "ristkülik";
                echo "<div class='tulemus'>Tegemist on <strong>ristkülikuga</strong>.</div>";
            }

            // 4. Ülesande loogika (visuaalne kuvamine CSS-iga)
            echo "<h3>Kuvatud $tyyp:</h3>";
            echo "<div style='width: {$a}px; height: {$b}px; background-color: #3498db; border: 2px solid #2980b9;'></div>";
        }
    }
    ?>
    <hr>

    <H1>Harjutus 4.5</H1>
    <form method="get" action="">
        <input type="hidden" name="tegevus" value="juubel">
        Sünniaasta: <input type="number" name="aasta" value="<?php echo isset($_GET['aasta']) ? $_GET['aasta'] : ''; ?>">
        <input type="submit" value="Kontrolli juubelit">
    </form>
    <?php
    if (isset($_GET['tegevus']) && $_GET['tegevus'] == 'juubel') {
        if ($_GET['aasta'] !== '') {
            $synniaasta = (int)$_GET['aasta'];
            $praegune_aasta = 2026; // Kuna hetkel on aasta 2026
            $vanus = $praegune_aasta - $synniaasta;

            // Juubeliaastad on tavaliselt viiega jaguvad aastad (0, 5, 10, 15, 20...)
            if ($vanus % 5 == 0) {
                echo "<div class='tulemus'>Palju õnne! Sel aastal täitub/täitus sul $vanus aastat – see on JUUBEL!</div>";
            } else {
                echo "<div class='tulemus'>Sel aastal täitub/täitus sul $vanus aastat. Tegemist ei ole juubeliaastaga.</div>";
            }
        }
    }
    ?>
    <hr>

    <H1>Harjutus 4.6</H1>
    <form method="get" action="">
        <input type="hidden" name="tegevus" value="hinne">
        Sisesta KT punktid: <input type="text" name="punktid" value="<?php echo isset($_GET['punktid']) ? $_GET['punktid'] : ''; ?>">
        <input type="submit" value="Vaata hinnet">
    </form>
    <?php
    if (isset($_GET['tegevus']) && $_GET['tegevus'] == 'hinne') {
        $punktid = $_GET['punktid'];

        // Kontroll, kas on tühi või pole number
        if ($punktid === '' || !is_numeric($punktid)) {
            echo "<div class='veateade'>SISESTA OMA PUNKTID!</div>";
        } else {
            $p = (float)$punktid;

            // PHP-s saab switch-iga vahemikke kontrollida kasutades tingimust 'switch(true)'
            switch (true) {
                case ($p >= 10): 
                    echo "<div class='tulemus'>SUPER!</div>";
                    break;
                case ($p >= 5 && $p <= 9): 
                    echo "<div class='tulemus'>TEHTUD!</div>";
                    break;
                case ($p < 5): 
                    echo "<div class='tulemus'>KASIN!</div>";
                    break;
            }
        }
    }
    ?>
    <hr>
</body>
</html>