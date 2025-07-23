<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_08_Exo2</title>
</head>

<body>
    <h1><?php echo "Exercice 02 :"; ?></h1>
    <hr>
    <main>
        <?php
            $form = [
                "nom" => "   ",
                "age" => "28",
                "email" => ""
            ];

            $erreurs = [];
            // Vérification du champ "nom"
            if (!isset($form["nom"]) || trim($form["nom"]) === "") {
                $erreurs["nom"] = "Le nom est obligatoire.";
                // Sinon: on affiche que le nom est "OK"
            } else {
                $erreurs["nom"] = "Nom : OK";
            }

            // Vérification du champ "age"
            // NB : || = or (or équivalent à ||) (or est à éviter dans des expressions complexes avec plusieurs conditions et affectations.)
            if (!isset($form["age"]) || trim($form["age"]) === "") {
                // Alors on affiche ce type d'erreur : "L'age est obligatoire".
                $erreurs["age"] = "L'âge est obligatoire.";
            } elseif (!is_numeric($form["age"]) || $form["age"] <= 0) {
                $erreurs["age"] = "L'âge doit être un nombre positif.";
            } else {
                $erreurs["age"] = "Âge : OK";
            }

            // Vérification du champ "email"
            if (!isset($form["email"]) || trim($form["email"]) === "") {
                $erreurs["email"] = "L'email est obligatoire.";
            } else {
                $erreurs["email"] = "Email : OK";
            }

            // la balise <pre> est utilisé pour un affichage propre
            echo "<pre>";
            print_r($erreurs);
            echo "</pre>";
        ?>
    </main>

</body>

</html>