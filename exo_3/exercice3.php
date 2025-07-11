<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <h1><?php echo 'Exercice 3 :';?></h1>
    <hr>
    <main>
        <?php
        $x = true;
        $y = false;

        $p = "x AND y donne " . ($x && $y ? 'true' : 'false') . "\n";
        $p = "x OR y donne " . ($x || $y ? 'true' : 'false') . "\n";
        $p = "x XOR y donne " . ($x xor $y ? 'true' : 'false') . "\n";
        
        echo nl2br($p);
        ?>



    </main>
    
</body>
</html>