<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gregori Saarna</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h2>JOOKSJAD</h2>
<?php
$jooksjad = array("Jüri", "Mari", "Kati", "Mati", "Juuli", "Maali");
$ajad = array(11.5, 10.7, 9.5, 11.7, 10.2, 9.4);

// Kombineerime jooksjad ja nende ajad assotsiatiivseks massiiviks
$jooksuTulemused = array_combine($jooksjad, $ajad);

// Sorteerime ajad
arsort($jooksuTulemused);

// Väljastame esikolmiku
$esikolmik = array_slice($jooksuTulemused, 0, 3, true);
foreach ($esikolmik as $jooksja => $aeg) {
    echo "Nimi: $jooksja, Aeg: $aeg<br>";
}
?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>