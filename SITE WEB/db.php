<?php
// db.php - Connexion Oracle (Pour le serveur école)
$host = 'http://100.95.181.113/index.php'; 
$port = '1521';
$sid  = 'XE';
$user = 'TON_LOGIN'; 
$pass = 'TON_MDP';
$tns = "(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(HOST=$host)(PORT=$port)))(CONNECT_DATA=(SID=$sid)))";
try {
    $conn = new PDO("oci:dbname=".$tns.";charset=UTF8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>