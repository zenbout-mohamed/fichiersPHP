<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice_02 :</title>
</head>
<body>
    <main>
        <h1><?php echo "Exercice 02 :" ;?></h1>
        <hr>
        <?php
        // on définit le jour qu'on veut tester.
        $jour = "dimanche";
        // switch ($jour) : on teste la valeur de $jour et on compare avec plusieurs cas.
        switch ($jour) {
            // Si $jour est "lundi" ou "mardi" ou "mercredi" ou "jeudi" ou "vendredi" alors on affiche : "C'est un jour ouvré".
            case "lundi":
            case "mardi":
            case "mercredi":
            case "jeudi":
            case "vendredi":
                echo "C'est un jour ouvré";
                break;
                // Si $jour est "samedi" ou "dimanche" → on affiche : "C'est le week-end".
            case "samedi":
            case "dimanche":
                echo "C'est le week-end";
                break;
                // default : s’il ne correspond à aucun cas connu, on affiche : "Jour non reconnu".
            default:
                echo "Jour non reconnu";
        }
        ?>
    </main>
    
</body>
</html>