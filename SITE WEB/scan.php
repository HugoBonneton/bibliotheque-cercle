<?php
// scan.php - VERSION 4.0 UNIFIED DESIGN
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isbn = htmlspecialchars($_POST['isbn']);
    $loc = htmlspecialchars($_POST['localisation']);
    $message = "<div style='background: #1b4d3e; color: #fff; padding: 15px; margin-bottom: 20px; border: 1px solid #d4af37; text-align:center; font-family:Cinzel, serif;'>
                    ✓ Livre (ISBN: $isbn) enregistré dans : $loc
                </div>";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scanner - Le Cercle</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
</head>
<body>
<div class="container">
    <div class="nav-header">
        <h1>Inventaire Rapide</h1>
        <a href="index.php" class="btn">Retour Bibliothèque</a>
    </div>
    <?= $message ?>
    
    <div id="reader"></div>

    <form method="POST" action="">
        <label style="color:var(--gold); font-family:'Cinzel', serif; display:block; margin-bottom:10px;">Code ISBN détecté</label>
        <input type="text" id="isbn_input" name="isbn" placeholder="En attente de scan..." required autocomplete="off" style="width:100%; margin-bottom:20px;">
        
        <label style="color:var(--gold); font-family:'Cinzel', serif; display:block; margin-bottom:10px;">Emplacement de stockage</label>
        <select name="localisation" style="width:100%; padding:12px; background:var(--paper); border:none; margin-bottom:20px; font-family:'Cormorant Garamond', serif; font-size:1.1em;">
            <option value="Bibliothèque du Salon">Bibliothèque du Salon</option>
            <option value="Bureau">Bureau</option>
            <option value="Chambre">Chambre</option>
            <option value="Cartons">Grenier (Cartons)</option>
        </select>

        <button type="submit" class="btn" style="width:100%;">Inscrire au Registre</button>
    </form>
</div>
<script>
    function onScanSuccess(decodedText) {
        document.getElementById('isbn_input').value = decodedText;
        // Optionnel : Jouer un son
        html5QrcodeScanner.clear();
    }
    let html5QrcodeScanner = new Html5QrcodeScanner("reader", { fps: 10, qrbox: {width: 250, height: 100} }, false);
    html5QrcodeScanner.render(onScanSuccess);
</script>
</body>
</html>