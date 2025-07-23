<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_07_Exo3</title>
</head>

<body>
    <h1><?php echo "Exercice 03 :"; ?></h1>
    <hr>
    <main>
        <?php
        function calculImpots($revenu){
            // On crée une variable $impot qui va accumuler les montants taxés pour chaque tranche.
            $impot = 0;
            // Si le revenu dépasse 50 000 €, on taxe uniquement la partie au-dessus de 50 000 à 35%
            if ($revenu > 50000) {
                $impot += ($revenu - 50000) * 0.35;
                // on "ramène" le revenu à 50 000, car on a déjà traité la partie au-dessus.
                $revenu = 50000;
            }
            if ($revenu > 35000) {
                $impot += ($revenu - 35000) * 0.25;
                $revenu = 35000;
            }
            if ($revenu > 20000) {
                $impot += ($revenu - 20000) * 0.18;
                $revenu = 20000;
            }
            if ($revenu > 10000) {
                $impot += ($revenu - 10000) * 0.10;
                $revenu = 10000;
            }

            return $impot;
        }

        // Affichage : 
        // 10 001 à 16 000 → 6 000 × 10% = 600 €
        // Résultat : 600 €
        echo "Impôt pour 16 000€ : " . calculImpots(16000) . " €<br>"; 
        // 0 à 10 000 → 0 €
        // 10 001 à 20 000 → 10 000 × 10% = 1 000 €
        // 20 001 à 35 000 → 15 000 × 18% = 2 700 €
        // 35 001 à 38 000 → 3 000 × 25% = 750 €
        // Total : 1 000 + 2 700 + 750 = 4 450 €
        echo "Impôt pour 38 000€ : " . calculImpots(38000) . " €<br>";
        // 0 à 10 000 → 0 €
        // 10 001 à 20 000 → 10 000 × 10% = 1 000 €
        // 20 001 à 35 000 → 15 000 × 18% = 2 700 €
        // 35 001 à 50 000 → 15 000 × 25% = 3 750 €
        // 50 001 à 64 000 → 14 000 × 35% = 4 900 €
        //  Total : 12 350 €
        echo "Impôt pour 64 000€ : " . calculImpots(64000) . " €<br>"; 
        ?>
    </main>

</body>

</html>