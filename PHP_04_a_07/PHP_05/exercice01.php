<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_05_Exo1</title>
</head>
<body>
    <main>
        <h1><?php echo "Exercice 01 :"; ?></h1>
        <hr>
        <?php
        
        $i = 1;                     // On initialise la variable $i à 1. C’est la valeur de départ.
       
        while ($i <= 20) {          // Tant que $i est inférieur ou égal à 20, on entre dans la boucle.
            echo $i;                // On affiche la valeur actuelle de $i.
            if ($i < 20) {          // Pour éviter d’avoir un slash après le dernier nombre (20), on affiche " / " seulement si $i est inférieur à 20.
            echo " / ";
            }
            $i++;                   // On incrémente $i de 1 à chaque tour, sinon la boucle serait infinie.
        }
        //   on s’assure que $i commence à 1 et qu’on affiche chaque nombre jusqu’à 20.
        ?>
    </main>               

</body>

</html>