<?php
// On utilise ?? '' pour éviter une erreur si le champ n’est pas envoyé.
$prenom = trim($_POST['prenom'] ?? '');
// On récupère le prénom saisi dans le formulaire. Si le champ n'existe pas, on met une chaîne vide ''.
// Rappel : Trim premet de supprimer les espaces inutiles avant et après.
if ($prenom === '') {
    echo "Erreur : le prénom est obligatoire.";
} else {
    echo "Bonjour " . $prenom . " !";
}
?>
