<?php
// On vérifie que les champs existent bien dans le POST.
if (isset($_POST['motpasse'], $_POST['motpasse_confirm'])) {
    $motpasse = trim($_POST['motpasse']);
    $motpasse_confirm = trim($_POST['motpasse_confirm']);

    // On Vérifie que le mot de passe a au moins 6 caractères
    if (strlen($motpasse) < 6) {
        echo "<p>Mot de passe trop court (minimum 6 caractères).</p>";
    }
    // On Vérifie que les deux mots de passe sont identiques
    elseif ($motpasse !== $motpasse_confirm) {
        echo "<p>Le mot de passe doit etre identique.</p>";
    }
    // Si tout est bon, affiche le mot de passe chiffré
    else {
        $motpasse_chiffre = password_hash($motpasse, PASSWORD_DEFAULT);
        echo "<p>Mot de passe sécurisé :</p>";
        echo "<p>" . $motpasse_chiffre . "</p>";
    }
} else {
    echo "<p>Veuillez remplir les deux champs.</p>";
}
?>
