<?php
// scan.php - VERSION DEMO
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isbn = htmlspecialchars($_POST['isbn']);
    $loc = htmlspecialchars($_POST['localisation']);
    $message = "<div style='background: #1b4d3e; color: #fff; padding: 15px; margin-bottom: 20px; border: 1px solid #d4af37; text-align:center;'>
                    ✓ Livre (ISBN: $isbn) enregistré dans : $loc
                </div>";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaire - Le Cercle</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
</head>
<body>
<div class="container">
    <div class="nav-header">
        <h1>Inventaire</h1>
        <a href="index.php" class="btn">Retour Bibliothèque</a>
    </div>
    <?= $message ?>
    
    <div id="reader"></div>

    <form method="POST" action="">
        <label>Code ISBN détecté</label>
        <input type="text" id="isbn_input" name="isbn" placeholder="En attente de scan..." required autocomplete="off">
        
        <label>Emplacement de stockage</label>
        <select name="localisation">
            <option value="Bibliothèque du Salon">Bibliothèque du Salon</option>
            <option value="Bureau">Bureau</option>
            <option value="Chambre">Chambre</option>
            <option value="Cartons">Grenier (Cartons)</option>
        </select>

        <button type="submit">Inscrire au Registre</button>
    </form>
</div>
<script>
    function onScanSuccess(decodedText) {
        document.getElementById('isbn_input').value = decodedText;
        html5QrcodeScanner.clear();
    }
    let html5QrcodeScanner = new Html5QrcodeScanner("reader", { fps: 10, qrbox: {width: 250, height: 100} }, false);
    html5QrcodeScanner.render(onScanSuccess);
</script>
</body>
</html>