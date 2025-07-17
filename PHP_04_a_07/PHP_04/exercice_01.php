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
        //  Déclaration d'une variable $role pour lui donner la valeur "editeur".
        $role = "editeur";

        // Si le rôle est exactement égal à "admin" (note les ===, c’est une comparaison stricte), on affiche :
        // "accès complet autorisé".
        if($role ==="admin"){
            echo "accès complet autorisé";
        }
            // Si ce n’est pas "admin", mais que c’est "editeur", on affiche :
            // "Accès limité aux modifications".
            elseif($role === "editeur"){
                echo "Accès limité aux modifications";
            }
            // Si le rôle est "visiteur", on affiche :
            // "Accès lecture seule".
            elseif($role === "visiteur"){
                echo "Accès lecture seule";
            }
            // Si le rôle ne correspond à aucun des trois cas précédents, on affiche :
            // "Rôle Inconnu".
            else{
                echo "Role Inconnu";
            }
        ?>
    </main>
    
</body>
</html>