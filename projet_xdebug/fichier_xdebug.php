<?php
$nom = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST["nom"] ?? "";
    $message = "Bonjour, $nom !"; // ← Place un point d’arrêt ici dans VS Code
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire PHP avec Debug</title>
</head>
<body>
    <h1>Formulaire</h1>
    <form method="POST">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required>
        <button type="submit">Envoyer</button>
    </form>

    <?php if (!empty($message)): ?>
        <p><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>
</body>
</html>
