<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 04</title>
</head>

<body>
    <h1><?php echo "Exercice 04 :"; ?></h1>
    <hr>
    <main>
        <?php
        $temperature = 12;
        // Si température est inférieure à 10 → "Froid"
        if ($temperature < 10) {
            echo "Froid";
            // i elle est entre 10 et 20 inclus → "Doux"
        } elseif ($temperature <= 20) {
            echo "Doux";
        } else {
            // Sinon (plus de 20) → "Chaud"
            echo "Chaud";
        }

        ?>

    </main>
</body>

</html>