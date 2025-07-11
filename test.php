<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'Présentation Vitesse Max :';?></h1>
    <?php
    const MAX_SPEED = 130;
    $speed = 140; // Attention : on ne peut pas modifier une constante:
        // MAX_SPEDD = 90;
    // Modification de la variable
    $speed = 110;
    // Nous l'affichons ensuite
    echo "La vitesse maximum est de " . MAX_SPEED . " km/h et vous rouliez à cette vitesse : $speed km/h."; ?>
</body>
</html>