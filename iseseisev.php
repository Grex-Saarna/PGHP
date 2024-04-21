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
<h2>SÜNNIKUU</h2>
<form method="get" action="">
    <label for="synnikuu">Vali oma sünnikuu:</label>
    <select name="synnikuu" id="synnikuu">
        <option value="1">Jaanuar</option>
        <option value="2">Veebruar</option>
        <option value="3">Märts</option>
        <option value="4">Aprill</option>
        <option value="5">Mai</option>
        <option value="6">Juuni</option>
        <option value="7">Juuli</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">Oktoober</option>
        <option value="11">November</option>
        <option value="12">Detsember</option>
    </select>
    <button type="submit">Vali</button>
</form>

<?php
if(isset($_GET['synnikuu'])){
    $synnikuu = $_GET['synnikuu'];
    if ($synnikuu >= 3 && $synnikuu <= 5) {
        echo "KEVAAAD";
    } elseif ($synnikuu >= 6 && $synnikuu <= 8) {
        echo "SUVIIII";
    } elseif ($synnikuu >= 9 && $synnikuu <= 11) {
        echo "SYGIS";
    } else {
        echo "TALVVV";
    }
}
?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
