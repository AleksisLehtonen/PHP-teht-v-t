<?php
$summa = null; // aluksi ei ole arvoa

// Tarkistetaan onko lomake lähetetty
if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $summa = $numero1 + $numero2; // lasketaan summa
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Summa-lomake</title>
</head>
<body>

<h2>Laske summa</h2>

<!-- Lomake -->
<form method="post">
    Numero 1: <input type="number" name="numero1" required><br><br>
    Numero 2: <input type="number" name="numero2" required><br><br>
    <input type="submit" value="Laske">
</form>

<?php
// Näytetään tulos, jos lomake on lähetetty
if ($summa !== null) {
    echo "<h3>Summa: $summa</h3>";
}
?>

</body>
</html>
