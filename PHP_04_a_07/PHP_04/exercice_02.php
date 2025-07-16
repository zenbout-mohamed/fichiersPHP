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
        $jour = "dimanche";

        switch ($jour) {
            case "lundi":
            case "mardi":
            case "mercredi":
            case "jeudi":
            case "vendredi":
                echo "C'est un jour ouvré";
                break;
            case "samedi":
            case "dimanche":
                echo "C'est le week-end";
                break;
            default:
                echo "Jour non reconnu";
        }
        ?>
    </main>
    
</body>
</html>