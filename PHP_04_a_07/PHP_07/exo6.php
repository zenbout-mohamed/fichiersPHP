<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_07_Exo1</title>
</head>

<body>
    <h1><?php echo "Exercice 01 :"; ?></h1>
    <hr>
    <main>
        <?php
        // On crée une fonction qui prend un chiffre en paramètre
        function tableMultiplication($chiffre)
        {
            // On utilise une boucle for pour multiplier ce chiffre de 1 à 10
            for ($i = 1; $i <= 10; $i++) {
                // On calcule le résultat à chaque tour
                $resultat = $chiffre * $i;

                // Et on l'affiche proprement
                echo "$chiffre x $i = $resultat<br>";
            }
        }

        // On appelle la fonction avec un exemple, ici la table de 1
        tableMultiplication(1);
        ?>

    </main>

</body>

</html>