<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_06_Exo5</title>
</head>

<body>
    <h1><?php echo "Exercice 05 :"; ?></h1>
    <hr>
    <main>
        <?php
        // on a plusieurs commandes :
        // montant_ht : prix hors taxe
        // statut : "payée" ou "en attente"
        $commandes = [
            ["client" => "Alice", "montant_ht" => 120, "statut" => "payée"],
            ["client" => "Bob", "montant_ht" => 75, "statut" => "en attente"],
            ["client" => "Claire", "montant_ht" => 200, "statut" => "payée"],
            ["client" => "David", "montant_ht" => 50, "statut" => "en attente"]
        ];

        // On déclares ces variables là :
        // $tva : TVA à 20%
        // $ca_ht : total HT de toutes les commandes
        // $ca_ttc : total TTC de toutes les commandes
        // $non_regle : total des commandes non payées

        $tva = 0.20;
        $ca_ht = 0;
        $ca_ttc = 0;
        $non_regle = 0;

        // on parcourt les cmmandes par la boucle foreach :
        foreach ($commandes as $cmd) {
            $ttc = $cmd["montant_ht"] * (1 + $tva);
            // On calcule le prix TTC avec : montant HT * 1.2
            echo "Commande de {$cmd['client']} : {$cmd['montant_ht']} € HT, " . round($ttc, 2) . " € TTC – " . strtoupper($cmd["statut"]) . "<br>";

            // On affiche le détail : client, prix HT, prix TTC, statut
            $ca_ht += $cmd["montant_ht"];
            $ca_ttc += $ttc;

            // On ajoute ce montant aux totaux HT et TTC
            if ($cmd["statut"] == "en attente") {
                // si la commande n’est pas payée, on ajoute son TTC à $non_regle
                $non_regle += $ttc;
            }
        }
        // Pour chaque commande, on calcule le TTC, affiche les infos, et on additionne au chiffre d'affaires
        // On divise le montant non réglé par le total TTC, puis on multiplie par 100.
        $pourcentage_non_regle = ($non_regle / $ca_ttc) * 100;
        // affichage de tout çà :
        echo "<br>Chiffre d'affaires total HT : $ca_ht €<br>";
        echo "Chiffre d'affaires total TTC : " . round($ca_ttc, 2) . " €<br>";
        echo "Montant non réglé : " . round($non_regle, 2) . " €<br>";
        echo "Pourcentage non réglé : " . round($pourcentage_non_regle, 2) . " %<br>";
        ?>

    </main>
</body>

</html>