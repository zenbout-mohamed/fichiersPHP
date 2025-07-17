<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_06_Exo3</title>
</head>

<body>
    <h1><?php echo "Exercice 03 :"; ?></h1>
    <hr>
    <main>
        <?php
        // Afficher le nombre de casquettes en stock

        // Tableau initial
        $produits = [
            ["nom" => "T-shirt", "prix" => 15, "stock" => 10],
            ["nom" => "Casquette", "prix" => 12, "stock" => 5],
            ["nom" => "Pull", "prix" => 25, "stock" => 8]
        ];

        // Affiche le nombre de casquettes en stock
        foreach ($produits as $produit) {
            if ($produit["nom"] === "Casquette") {
                echo "Stock de casquettes : " . $produit["stock"] . "<br>";
            }
        }

        // Ajout des vestes
        $produits[] = ["nom" => "Veste", "prix" => 40, "stock" => 25];

        // 3. Affichage de l'inventaire dans un tableau HTML
        echo "<table>";
        echo "<tr><th>Produit</th><th>Prix (€)</th><th>Stock</th><th>CA potentiel (€)</th></tr>";
        
        // On parcourt chaque produit
        foreach ($produits as $produit) {
            // Pour chaque ligne, on affiche le nom, prix, stock, et chiffre d'affaires potentiel (prix * stock)
            $ca = $produit["prix"] * $produit["stock"];
            echo "<tr>";
            echo "<td>{$produit['nom']}</td>";
            echo "<td>{$produit['prix']}</td>";
            echo "<td>{$produit['stock']}</td>";
            echo "<td>$ca</td>";
            echo "</tr>";
        }
        // Puis on affiche l'inventaire dans le tableau :
        echo "</table>";

        ?>

    </main>

</body>

</html>
