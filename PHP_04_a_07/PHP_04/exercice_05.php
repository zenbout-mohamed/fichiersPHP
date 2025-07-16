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
        $size = "XL";
        define("TVA", 0.20); 

        switch ($size) {
            case "S":
                $prixHT = 10;
                break;
            case "M":
                $prixHT = 12;
                break;
            case "L":
                $prixHT = 14;
                break;
            case "XL":
                $prixHT = 16;
                break;
            default:
                echo "Taille inconnue";
                exit();
        }
        $prixTTC = $prixHT * (1 + TVA);
        $prixTTC = number_format($prixTTC, 2, ',', ' '); 

        echo "Le prix du t-shirt taille $size est de $prixTTC € TTC ($prixHT € HT + 20% TVA).";
        ?>
    </main>
</body>
</html>