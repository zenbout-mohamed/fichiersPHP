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
        echo ($temperature < 10) ? "Froid": (($temperature <= 20)? "Doux": "Chaud");
        ?>

    </main>
</body>
</html>