<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_07_Exo5</title>
</head>

<body>
    <h1><?php echo "Exercice 05 :"; ?></h1>
    <hr>
    <main>
        <?php
        function afficherNombres($debut, $fin, $type){
            // On boucle à partir du nombre de départ jusqu’au nombre de fin
            for ($i = $debut; $i <= $fin; $i++) {

                // l'utilisateur a demandé les pairs
                // Si le reste est 0 (% 2 == 0), alors le nombre est pair.
                
                if ($type === "pair" && $i % 2 == 0) {
                    echo $i . " ";
                }

                // l'utilisateur a demandé les impairs
                // Si le reste est 1 (% 2 != 0), alors le nombre est impair
                if ($type === "impair" && $i % 2 != 0) {
                    echo $i . " ";
                }
            }
        }
        
        echo "Nombres pairs de 7 à 99 :";
        afficherNombres(7, 99, 'pair');

        echo "Nombres impairs de 59 à 169 :";
        afficherNombres(59, 169, 'impair');
        ?>
    </main>

</body>

</html>


