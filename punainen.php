<?php
// Funktio tulostaa tekstin punaisella
function punainenTeksti($teksti) {
    echo "<span style='color:red'>$teksti</span>";
}

// Tarkistetaan, onko lomake lähetetty
$teksti = "";
if (isset($_POST['teksti'])) {
    $teksti = $_POST['teksti'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Punainen teksti</title>
</head>
<body>

<h2>Kirjoita teksti</h2>

<form method="post">
    Teksti: <input type="text" name="teksti" required>
    <input type="submit" value="Näytä punaisella">
</form>

<p>
<?php
// Tulostetaan teksti punaisella, jos sitä annettu
if ($teksti != "") {
    punainenTeksti($teksti);
}
?>
</p>

</body>
</html>
