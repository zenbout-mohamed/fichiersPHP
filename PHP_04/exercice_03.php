<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 03</title>
</head>
<body>
    <h1><?php echo "Exercice 03 :";?></h1>
    <hr>
    <?php
    // match() est comme un switch, mais plus moderne et plus strict.
    // Il retourne une valeur (ici, stockée dans $message).
    $status = "expédiée";

    $message = match ($status) {
        "en_cours" => "Votre commande est en cours de traitement.",
        // Chaque clé (comme "expédiée") correspond à une réponse (comme "Votre commande a été expédiée.").
        // Ici, comme $status = "expédiée", le message sera :
        // Votre commande a été expédiée.
        "expédiée" => "Votre commande a été expédiée.",
        "livrée" => "Votre commande a été livrée.",
        "annulée" => "Votre commande a été annulée.",
        default  => "Statut inconnu.",
    };
        echo $message;
    ?>
    

    
</body>
</html>