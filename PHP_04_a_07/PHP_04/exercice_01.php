<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 01</title>
</head>
<body>
    <main>
        <h1><?php echo 'Exercice 01 :';?></h1>
        <hr>

        <?php
        $role = "editeur";

        if($role ==="admin"){
            echo "accès complet autorisé";
        }
            elseif($role === "editeur"){
                echo "Accès limité aux modifications";
            }
            elseif($role === "visiteur"){
                echo "Accès lecture seule";
            }
            else{
                echo "Role Inconnue";
            }
        ?>
    </main>
    
</body>
</html>