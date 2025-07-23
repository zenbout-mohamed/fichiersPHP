
<?php
    // Vérifie que le champ 'search' est défini et non vide
    if (isset($_GET['search']) && !empty(trim($_GET['search']))) {
        // Empêche l’exécution de code malveillant avec protextion XSS
        $caractere = htmlspecialchars($_GET['search']);
        echo "<p>Vous avez recherché : $caractere</p>";
    } else {
        echo "<p>Aucun terme de recherche saisi.</p>";
    }
    ?>