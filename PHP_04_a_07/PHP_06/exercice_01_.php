<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_06_Exo1</title>
</head>

<body>
    <h1><?php echo "Exercice 01 :"; ?></h1>
    <main>
        <hr>

        <?php
        // On utilise l’indice correspondant à “Marseille”. C’est la 5e ville donc indice 4 (car on commence à 0).
        $communes = ["Monaco", "Nantes", "Bordeaux", "Lille", "Marseille", "Lyon", "Paris", "Lens", "Montpellier", "Dieppe"];
        // Affiche “Marseille”
        echo $communes[4] . "<br>";

        // Modifie “Monaco” par “Nice”
        $communes[0] = "Nice";

        // Ajoute “Reims”
        $communes[] = "Reims";

        // Affiche le nombre de villes total dans le tableau
        echo "Nombre de villes : " . count($communes) . "<br>";


        // On utilise foreach pour un code plus lisible.
        // Moins d’erreurs (pas besoin de gérer l’indice $i).
        // Recommandé pour parcourir un tableau complet, surtout quand tu n’as pas besoin de l’indice.
        // Affiche toutes les villes
        foreach ($communes as $communes) {
            echo $communes . "<br>";
        }
        ?>
    </main>
</body>

</html>