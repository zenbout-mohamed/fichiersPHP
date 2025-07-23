<?php
// On vérifie si l’utilisateur a coché au moins une case.
if (isset($_POST['loisir'])) {
    $selection = $_POST['loisir']; // C’est un tableau de valeurs cochées

    // Vérifier qu’au moins deux centres d’intérêt ont été sélectionnés
    if (count($selection) >= 2) {
        echo "<h2>Vos centres d’intérêt :</h2>";
        echo "<ul>";

        // On utilise une boucle for pour parcourir le tableau
        for ($i = 0; $i < count($selection); $i++) {
            echo "<li>" . htmlspecialchars($selection[$i]) . "</li>";
        }

        echo "</ul>";
    } else {
        echo "<p>Veuillez sélectionner au moins deux centres d'intérêt.</p>";
    }
} else {
    echo "<p>Aucun centre d'intérêt sélectionné.</p>";
}
?>


