<?php
// Vérifie si le formulaire a bien envoyé une valeur via POST avec le nom "tricolores" donc si une couleur a été choisie.
if (isset($_POST['tricolores'])) {
    // Récupère la valeur choisie par l’utilisateur 
    $une_couleur = $_POST['tricolores'];

    // Liste des couleurs autorisées
    $TroisCouleurs = ["vert", "rouge", "bleu"];

    // On vérifie que la couleur envoyée fait bien partie des 3 proposées
    // in_array : vérifie qu’une valeur est dans un tableau.
    if (in_array($une_couleur, $TroisCouleurs)) {
        // Affiche le titre coloré avec la couleur choisie
        echo '<h1 style="color: ' . htmlspecialchars($une_couleur) . ';">';
        echo 'Vous avez choisi la couleur ' . htmlspecialchars($une_couleur) . ' !';
        echo '</h1>';
    } else {
        // Si la couleur n’est pas dans la liste, affiche un message d’erreur.
        echo "<p>Couleur non reconnue.</p>";
    }
    // Si aucun champ n’est envoyé du tout (pas de POST), affiche un message demandant à choisir une couleur.
} else {
    echo "<p>Veuillez choisir une couleur.</p>";
}
?>
