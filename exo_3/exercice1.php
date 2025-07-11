<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'Exercice n°1'; ?></h1>
<main>
    <hr>
   <?php
    $a = 5;
    $b = 10;

    $paragraphe = "La somme de a et b est : " . ($a + $b) . "\n";
    $paragraphe .= "La différence de a et b est : " . ($a - $b) . "\n";
    $paragraphe .= "Le produit de a et b est : " . ($a * $b) . "\n";
    $paragraphe .= "Le quotient de a et b est : " . ($a / $b) . "\n";
    $paragraphe .= "Le reste de a et b est : " . ($a % $b) . "\n";

    // ".="Ajoute une chaîne à une variable existante
    // n12br : remplace automatiquement les saut de ligne \n par "<br>".

    echo nl2br($paragraphe);
    ?>

</main>
</body>
</html>