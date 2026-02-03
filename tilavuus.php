<?php
// Funktio laskee huoneen tilavuuden
function tilavuus($pituus, $leveys, $korkeus) {
    return $pituus * $leveys * $korkeus;
}

// Esimerkkiarvot – voit muuttaa
$pituus = 5;
$leveys = 4;
$korkeus = 3;

// Lasketaan tilavuus kutsumalla funktiota
$tulos = tilavuus($pituus, $leveys, $korkeus);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Huoneen tilavuus</title>
</head>
<body>

<h2>Huoneen tilavuus</h2>
<p>Pituus: <?php echo $pituus; ?>, Leveys: <?php echo $leveys; ?>, Korkeus: <?php echo $korkeus; ?></p>
<p>Tilavuus: <?php echo $tulos; ?></p>

</body>
</html>
