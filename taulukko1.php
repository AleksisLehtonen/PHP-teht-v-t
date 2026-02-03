<?php
// Luodaan taulukko
$autot = ["Volvo", "Toyota", "Seat", "Audi"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Taulukko 1</title>
</head>
<body>

<h2>Autot (foreach)</h2>
<table border="1">
    <tr>
        <th>Merkki</th>
    </tr>
    <?php
    // Tulostetaan foreach:llä
    foreach ($autot as $auto) {
        echo "<tr><td>$auto</td></tr>";
    }
    ?>
</table>

<h2>Autot (for)</h2>
<table border="1">
    <tr>
        <th>Merkki</th

