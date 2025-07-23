<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_07_Exo2</title>
</head>
<body>
    <h1><?php echo "Exercice 02 :";?></h1>
    <hr>
    <main>
        <?php
        function AfficherEtoile($nbr){
            // La boucle for commence à 1 et va jusqu’à $nbr.
            for($i = 1; $i <= 100; $i++){
                // str_repeat("*", $i) répète l’étoile $i fois.
                echo str_repeat("*", $i) . "<br>";

            }
        }
        AfficherEtoile(5);
        
        
        
        ?>
    </main>
    
</body>
</html>