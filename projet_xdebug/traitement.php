<?php
// Mets un point d'arrêt ici 👇
$nom = $_POST['nom'] ?? '';
$age = $_POST['age'] ?? '';

$message = "Bonjour $nom, vous avez $age ans.";

echo "<h1>Résultat</h1>";
echo "<p>$message</p>";
?>
