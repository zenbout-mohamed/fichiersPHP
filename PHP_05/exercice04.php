<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php_05_Exo4</title>
</head>

<body>
    <main>
        <h1><?php echo "Exercice 04 :"; ?></h1>
        <hr>
        <?php
        $somme = 0;
        // On boucle de 1 à 100.
        for ($i = 1; $i <= 100; $i++) {
            // À chaque tour, on ajoute la valeur courante $i à la somme (équivalent à $somme = $somme + $i;).
            $somme += $i;
        }
        // Affichage de ce que cela donne :
        echo "La somme de 1 à 100 est : $somme";
        ?>

    </main>

</body>

</html>