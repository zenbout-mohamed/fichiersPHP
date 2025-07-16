<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_05_Exo5</title>
</head>

<body>
    <h1><?php echo "Exercice 05 :"; ?></h1>
    <hr>
    <main>
        <?php
        // Cette boucle fait 5 tours, un pour chaque ligne à afficher de la boucle externe.
        for ($row = 1; $row <= 5; $row++) {
            // Pour chaque ligne, on affiche autant d’étoiles que le numéro de la ligne de la boucle interne ..
            for ($i = 1; $i <= $row; $i++) {
                // affiche une étoile à chaque tour de la boucle interne.
                echo "*";
            }
            echo "<br>";
        }
        // La boucle interne est "à l’intérieur" de la boucle externe, donc pour chaque ligne on répète l’action d’afficher des étoiles.
        ?>
    </main>
</body>
</html>