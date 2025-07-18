<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <h1><?php echo 'Exercice 2 :';?></h1>
    <hr>
    <?php
    $a = 5;
    $b = 10;

    $valeur = "a == b donne " . ($a == $b ? 'true' : 'false') . "\n";
    $valeur .= "a != b donne " . ($a != $b ? 'true' : 'false') . "\n";
    $valeur .= "a > b donne " . ($a > $b ? 'true' : 'false' ) . "\n";
    $valeur .= "a < b donne " . ($a < $b ? 'true' : 'false') . "\n";
    $valeur .= "a >= b donne " . ($a >= $b ? 'true' : 'false') . "\n";
    $valeur .= "a <= b donne " . ($a <= $b ? 'true' : 'false') . "\n";
    $valeur .= "a / b donne " . ($a / $b ? 'true ' : 'false') . "\n";
    $valeur .= "a % b donne " . ($a % $b ? 'true ' : 'false') . "\n";

    echo nl2br($valeur);
    ?>
</body>
</html>