<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_08_Exo1</title>
</head>

<body>
    <h1><?php echo "Exercice 01 :"; ?></h1>
    <hr>
    <main>
        <?php
            
            // On part d'une chaîne contenant différents éléments séparés par des virgules
            $texte = "12,5,abc,32,-7,42";
             // On découpe cette chaîne en utilisant explode() : chaque élément entre les virgules devient un élément du tableau.
            $morceaux = explode(",", $texte);
            // On crée un tableau vide pour stocker les valeurs valides
            $valeurs_valides = [];

            // On parcourt chaque élément obtenu
            foreach ($morceaux as $item) {
                // On vérifie si l'élément est bien un nombre
                if (is_numeric($item)) {
                    // Si oui, on le convertit en entier (int) et on l'ajoute dans le tableau $nombres
                    $valeurs_valides[] = intval($item);
                }
            }
            // On affiche le tableau final avec var_dump pour bien voir ce qu’il contient
            echo "<pre>";
            // NB : La balise HTML <pre> comme preformatted permet d'afficher le contenu tel qu’il est, en gardant :
            // les retours à la ligne, les espaces, la mise en forme brute,ce qui est très utile avec var_dump.
            var_dump($valeurs_valides);
            echo "</pre>";

            // On vérifie que le tableau n'est pas vide pour éviter une erreur
            if (!empty($valeurs_valides)) {
                // On utilise min() pour trouver le plus petit nombre
                echo "Le plus petit nombre est : " . min($valeurs_valides) . "<br>";
                // Et max() pour le plus grand
                echo "Le plus grand nombre est : " . max($valeurs_valides) . "<br>";
            } else {
                echo "Aucun nombre valide trouvé.";
            }
    ?>
    </main>

</body>

</html>