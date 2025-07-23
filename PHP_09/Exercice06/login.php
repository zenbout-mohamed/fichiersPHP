<?php
// Report des memes variables de l'énoncé avec le "secret123":
$id = 'admin';
$pass_hash = '$2y$10$8YJ7sUUnl.VUSfnQHzqmQOxvZkfm1ioni0VCK506dZvW3QWzeM6je'; 
// Vérifie que le formulaire a bien été envoyé bonne pratique.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fournit une valeur vide si le champ n’est pas défini pour eviter éventuellment des erreur.
    $user = $_POST['identifiant'] ?? '';
    // Donne à $user la valeur de $_POST 'identifiant' si elle existe, sinon donne-lui la valeur '' (une chaîne vide).
    $motpasse = $_POST['motdepasse'] ?? '';

    // On regroupe les vérifications logiques ensemble pour alléger le code.
    if ($user === $id && password_verify($motpasse, $pass_hash)) {
        echo "<p>Connexion établie !. Bienvenue chère $user !</p>";
    } else {
        echo "<p>Identifiant ou mot de passe incorrect.</p>";
    }
} else {
    echo "<p>Les champs n'ont pas été rempli.</p>";
}
?>
