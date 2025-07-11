<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenus fichier ME.PHP</title>
</head>
<body>
    <h1><?php echo 'Présentation :';?></h1>
   
    <?php // Déclaration des variables
    $prenom = "Mohamed";
    $ville = "Marseille";
    $age = 25;
    // Affichage avec concaténation
    echo "Je m'appelle " . $prenom . ", j'ai " . $age . " ans et j'habite à " . $ville . ".";
    ?>
</body>
</html>