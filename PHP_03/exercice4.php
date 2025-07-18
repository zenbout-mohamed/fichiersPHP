<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>

<body>
    <h1><?php echo " Exercice 4 :"; ?></h1>
    <hr>
  <main>
    <?php
    $a = 5;
    $b = 10;
    $c = 3;

    $b += $a;
    $affichage  = "b += a donne $b\n<hr>\n"; // 15

    $b *= $c;
    $affichage .= "b *= c donne $b\n<hr>\n"; // 45

    $b /= $a;
    $affichage .= "b /= a donne $b\n<hr>\n"; // 9

    $b -= $a * $c;
    $affichage .= "b -= a * c donne $b\n<hr>\n"; // 9 - 15 = -6 (résultat négatif)

    $b %= $c;
    $affichage .= "b %= c donne $b\n<hr>\n";

    echo nl2br($affichage);
    ?>
</main>



</body>

</html>