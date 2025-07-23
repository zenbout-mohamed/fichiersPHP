<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_06_Exo6</title>
</head>

<body>
    <h1><?php echo "Exercice 06 :"; ?></h1>
    <hr>
    <main>
        <?php

        $eleves = [
            "Alice" => [
                "maths" => 15,
                "francais" => 14,
                "anglais" => 13
            ],
            "Bob" => [
                "maths" => 8,
                "francais" => 10,
                "anglais" => 11
            ],
            "Claire" => [
                "maths" => 18,
                "francais" => 17,
                "anglais" => 19
            ]
        ];

        // === PARTIE 1 : Moyenne et appréciation de chaque élève ===
        // On parcourt tous les élèves avec foreach.
        foreach ($eleves as $nom => $notes) {
            // $notes est le tableau de notes de l’élève
            $somme = 0;
            // $notes est le tableau des matières et des notes de chaque élève.
            $nb_matieres = count($notes); // count($notes) permet de connaître le nombre de matières.

            // On utilise une deuxième boucle foreach pour faire la somme des notes.
            foreach ($notes as $note) {
                $somme += $note; // On ajoute chaque note à la somme
            }
            // Puis on divise par le nombre de matières pour obtenir la moyenne.
            $moyenne = $somme / $nb_matieres;

            // Ensuite, un if...elseif...else sert à déterminer l’appréciation en fonction des notes.
            if ($moyenne < 10) {
                $appreciation = "Échec";
            } elseif ($moyenne < 12) {
                $appreciation = "Peut mieux faire";
            } elseif ($moyenne <= 15) {
                $appreciation = "Bon travail";
            } else {
                $appreciation = "Excellent";
            }
            // Enfin, echo affiche les infos de façon claire.
            echo "$nom a une moyenne de " . round($moyenne, 2) . " – $appreciation<br>";
        }

        echo "<br><p>Moyennes par matière :</p><br>";

        // === PARTIE 2 : Moyenne par matière ===
        // On crée un tableau simple contenant les noms des matières.
        $matieres = ["maths", "francais", "anglais"];
        // On boucle sur chaque matière du tableau : d’abord maths, puis français, puis anglais.
        foreach ($matieres as $matiere) {
            // Avant de calculer une moyenne, on initialise la somme totale des notes à zéro pour cette matière.
            $total = 0;
            // On compte combien d’élèves il y a dans le tableau $eleves. Ici, 3.
            // Cela va nous permettre de diviser la somme des notes par le nombre d’élèves pour obtenir la moyenne
            $nb_eleves = count($eleves);
            // $notes contient les notes d’un élève.
            // On boucle à travers chaque élève du tableau $eleves.
            foreach ($eleves as $notes) {
                $total += $notes[$matiere]; // On récupère la note de chaque élève dans la matière
            }
            // On calcule la moyenne de la classe dans cette matière.
            $moyenne_matiere = $total / $nb_eleves;
            // On affiche le nom de la matière (avec la première lettre en majuscule grâce à ucfirst()).
            // On affiche la moyenne arrondie à 2 chiffres après la virgule avec round(...).
            echo ucfirst($matiere) . " : " . round($moyenne_matiere, 2) . "/20<br>";
        }

        ?>
    </main>


</body>

</html>