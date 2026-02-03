<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Taulukko, josta etsitään numeroa
$numerot = array(5, 3, 8, 7, 1, 9);

// Tarkistetaan, onko lomakkeelta tullut numero
$annettuNumero = isset($_GET['numero']) ? (int)$_GET['numero'] : null;

$result = "";

if ($annettuNumero !== null) {
    // Etsitään numero taulukosta
    foreach ($numerot as $n) {
        if ($n === $annettuNumero) {
            $result = "Numero löytyi!";
            break; // lopetetaan silmukka, koska löytyi
        }
    }
    if ($result === "") {
        $result = "Ei löytynyt";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Numeron etsiminen</title>
</head>
<body>

<h2>Etsi numeroa taulukosta</h2>

<form method="get" action="">
    Anna numero (1-9): 
    <input type="number" name="numero" min="1" max="9" required>
    <input type="submit" value="Tarkista">
</form>

<?php
if ($annettuNumero !== null) {
    echo "<p><strong>Tulos:</strong> $result</p>";
}
?>

</body>
</html>
