<?php
session_start();

// Report des données de chaques utilisateurs du cours.
$users = [
    // Identifiant alice  / Mot de passe : 123
    'alice' => ['password' => '$2y$10$vf68y2j7JB3sz3OmFQe3vuxsoBrQuNBD9j59uIVnJqJ5TwX1xbPi2', 'role' => 'admin'],
     // Identifiant bob / Mot de passe : 456
    'bob'   => ['password' => '$2y$10$J/oJemQ34Non4rB3Gf6OeOSuFablci7XfXOXc3u1kS9c99u70.E2y', 'role' => 'editor'],
    // Identifiant caroline / Mot de passe : 789
    'caroline' => ['password' => '$2y$10$S/YwX4j2U62ekgqpqOgZHOekkAqshyTnxS8gz3aejYe4OM35P4d2y', 'role' => 'user'],
];

// Si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['id'] ?? '';
    $password = $_POST['motpasse'] ?? '';

    // Vérifie si l'utilisateur existe
    if (isset($users[$username])) {
        $hashedPassword = $users[$username]['password'];

        // Vérifie le mot de passe
        if (password_verify($password, $hashedPassword)) {
            $_SESSION['user'] = $username;
            $_SESSION['role'] = $users[$username]['role'];
            header('Location: dashboard.php');
            exit;
        }
    }
    // Le cas échéant, l'utilisateur sera redirigé vers la page d'erreur.
    header('Location: failed.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>PHP_10_Exo1</title>
</head>

<body>
    <main>
        <h1>Exercice 01 :</h1>
        <hr>
        <form method="post">
            <h2>Connexion :</h2>
            <label for="id">
                <input type="text" name="id" placeholder="Identifiant" required>
            </label>
            <hr>
            <label for="motpasse">
                <input type="password" name="motpasse" placeholder="Mot de passe" required>
            </label>
            <hr>
            <button type="submit">Connexion</button>
        </form>
    </main>
</body>

</html>