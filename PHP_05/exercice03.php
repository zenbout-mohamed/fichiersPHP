<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php_05_Exo3</title>
</head>

<body>
    <main>
        <h1><?php echo "Exercice 03 :"; ?></h1>
        <hr>
        <?php
        // la boucle for s’occupe de 3 choses :
        // Initialisation: $i = 1
        // Condition: tant que $i est inférieur ou égal à 10
        // Incrémentation: $i++ (on ajoute 1 à $i à chaque tour)
        for ($i = 1; $i <= 10; $i++) {
            // On affiche la ligne de la table.exemple 6 x 7 = 42
            echo "$i x 7 = " . ($i * 7) . "<br>";
        }
        // on connaît d’avance le nombre d’itérations (10 fois, de 1 à 10). Donc pour cette raison là que la boucle for est utilisable. 
        ?>
   
    </main>

</body>

</html>