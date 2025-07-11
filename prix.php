<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenu Fichier Prix.php</title>
</head>
<body>
    <h1><?php echo 'Affichage du prix :';?></h1>
    <?php 
    // Nous déclarons la constante :
    const TVA = 0.2;
    // Nous déclarons le prix HT :
    $prixHT = 89.9;
    // Nous calculons le prix TTC :
    $prixTTC = $prixHT + ($prixHT * TVA);
    // Puis on l'affiche grace à la commande echo:
    echo "Le prix TTC est de " . $prixTTC . " euros(€)"; 
    ?>
    
</body>
</html>