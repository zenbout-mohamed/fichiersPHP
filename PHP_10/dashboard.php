<?php
session_start();
// Vérifie que l'utilisateur est connecté
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$username = $_SESSION['user'];
$role = $_SESSION['role'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dashboard.css">
    <title>PHP_10_Exo1</title>
</head>
<body>
    <div class="bloc">
        <h1>Bienvenue <?= htmlspecialchars($username) ?>, vous avez le rôle <?= htmlspecialchars($role) ?>.</h1>
        <form method="post" action="logout.php">
            <button type="submit">Déconnexion</button>
        </form>
    </div>
</body>
</html>
