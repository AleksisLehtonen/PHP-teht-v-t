<?php
// Tarkistetaan, että molemmat parametrit on annettu URL:ssa
if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    $summa = $numero1 + $numero2;

    echo "<h2>Laske</h2>";
    echo "Numero 1: $numero1 <br>";
    echo "Numero 2: $numero2 <br>";
    echo "<strong>Summa: $summa</strong>";
} else {
    echo "URL-parametreja ei annettu. Esimerkki: laske.php?numero1=10&numero2=30";
}
?>
