<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_05_Exo2 :</title>
</head>

<body>
    <main>
        <h1><?php echo "Exercice 02 :"; ?></h1>
        <hr>
        <?php
        // On commence à 20.
        $i = 20;
        // Le bloc à l’intérieur du (do) s’exécute au moins une fois, puis la condition est testée après. Si $i >= 1, on répète.
        do {
            // Affiche la valeur courante.
            echo $i;
            // Affiche un tiret seulement tant qu’on n’est pas au dernier nombre (1).
            if ($i > 1) {
                echo " - ";
            }
            // Décrémente $i pour que la boucle finisse.
            $i--;
        } while ($i >= 1);
        //  do...while garantit au moins une exécution avant de vérifier la condition 
        ?>
        

    </main>

</body>

</html>