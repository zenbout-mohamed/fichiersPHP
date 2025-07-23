<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_08_Exo3</title>
</head>

<body>
    <h1><?php echo "Exercice 03 :"; ?></h1>
    <hr>
    <main>
        <?php
            $donneesProduits = "Stylo:2.5, Cahier:4.25, gomme:abc, Table:42.99, chaise:14.9";
             // On découpe la chaîne initiale pour obtenir un tableau de produits
            $elementsPanier = explode(",", $donneesProduits);
            //  On prépare un tableau pour stocker les produits valides
            $articlesValides = [];
            $sommeTotal = 0;

            // On parcourt chaque élément du tableau de produits bruts
            foreach ($elementsPanier as $descriptionProduit) {

                // On sépare le nom et le prix avec ":"
                $detailsProduit = explode(":", $descriptionProduit);

                // Vérification : est-ce qu'on a bien 2 éléments ? Nom + Prix
                if (count($detailsProduit) !== 2) {
                    continue; // On ignore les mauvais formats
                }

                // On nettoie le nom
                $libelle = strtolower(trim($detailsProduit[0]));

                // On extrait et nettoie le prix
                $valeur = trim($detailsProduit[1]);

                // Vérifions que le prix est numérique (is_numeric)
                if (is_numeric($valeur)) {
                    // On convertit en float pour calcul
                    $valeur = (float)$valeur;

                    // On ajoute dans le tableau associatif
                    $articlesValides[$libelle] = $valeur;

                    // On ajoute au prix total
                    $sommeTotal += $valeur;
                }
            }

            // On affiche le tableau final
            echo "<pre>";
            var_dump($articlesValides);
            echo "</pre>";

            // On affiche le nombre total de produits valides
            echo "Nombre de produits valides : " . count($articlesValides) . "<br>";

            // On affiche le total arrondi à 2 décimales
            echo "Prix total du panier : " . number_format($sommeTotal, 2, ',', ' ') . "€";
            ?>


    </main>

</body>

</html>