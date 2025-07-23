<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_06_Exo4</title>
</head>

<body>
    <h1><?php echo "Exercice 04 :"; ?></h1>
    <hr>
    <main>
        <?php
        // on a un tableau de 7 températures, une pour chaque jour.
        $temperatures = [30, 32, 34, 30, 35, 34, 31];

        
        // On initialise une variable $total à 0.
        $total = 0;
        foreach ($temperatures as $temp) {
            // on additionne toutes les températures
            $total += $temp;
            // on ajoute chaque température au total
        }
        // La fonction count($temperatures) donne le nombre d'éléments dans le tableau, ici 7.
         // On divise par le nombre total de températures
        $moyenne = $total / count($temperatures);

       
        // Affichage avec arrondi à 2 chiffres après la virgule
        echo "Température moyenne sur 7 jours : " . round($moyenne, 2) . "°";
        
        ?>


    </main>


</body>

</html>