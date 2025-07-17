<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 05</title>
</head>

<body>
    <h1><?php echo "Exercice 05 :"; ?></h1>
    <hr>
    <main>
        <?php
        // $size = "XL" → la taille choisie est XL.
        $size = "XL";
        //  on définit une constante TVA avec une valeur de 20 % (0.20). On l’utilise ensuite pour calculer le prix TTC.
        define("TVA", 0.20); 
        // Ici on utilise un switch pour attribuer un prix HT (hors taxe) selon la taille :
        switch ($size) {
            case "S":
                // S → 10€
                $prixHT = 10;
                break;
            case "M":
                // M → 12€
                $prixHT = 12;
                // break empêche que les autres cas soient testés après le bon.
                break;
            case "L":
                // L → 14€
                $prixHT = 14;
                break;
            case "XL":
                // XL → 16€
                $prixHT = 16;
                break;
                // default: si $size ne correspond à aucune taille connue, on affiche "Taille inconnue" et on stoppe le script avec exit().
            default:
                echo "Taille inconnue";
                exit();
        }
        // On calcule le prix avec la TVA :
        // Exemple : 16 * (1 + 0.20) = 16 * 1.20 = 19.2
        $prixTTC = $prixHT * (1 + TVA);
        // number_format() permet d’afficher le prix avec 2 décimales, une virgule comme séparateur décimal, et un espace pour les milliers si nécessaire.
        // Donc 19.2 devient 19,20
        $prixTTC = number_format($prixTTC, 2, ',', ' '); 

        echo "Le prix du t-shirt taille $size est de $prixTTC € TTC ($prixHT € HT + 20% TVA).";
        ?>
    </main>
</body>
</html>