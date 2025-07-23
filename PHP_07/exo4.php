<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_07_Exo4</title>
</head>

<body>
    <h1><?php echo "Exercice 04 :"; ?></h1>
    <hr>
    <main>
        <?php
    // On déclare un tableau $classe avec 3 élèves et leurs notes.
        $classe = [
            [
                "prenom" => "Lucie",
                "maths" => 12,
                "francais" => 14,
                "histoire" => 9
            ],
            [
                "prenom" => "Yann",
                "maths" => 8,
                "francais" => 10,
                "histoire" => 7
            ],
            [
                "prenom" => "Sophie",
                "maths" => 16,
                "francais" => 13,
                "histoire" => 15
            ]
        ];

        // La fonction calculerMoyenne() fait la somme des 3 matières et divise par 3.
        function moyenneCount($etudiant){
            $total = $etudiant['maths'] + $etudiant['francais'] + $etudiant['histoire'];
            // Si un élève avait 5 matières, on diviserait par 5 à la place.
            // Moyenne = (somme des notes) / (nombre de matières)
            return $total / 3;
        }

        // La fonction Admissible() renvoie true si la moyenne est supérieure ou égale à 10.
        function AdmisSible($moyenne){
            return $moyenne >= 10;
        }

        // On parcourt chaque élève avec foreach, on affiche les infos et le message "Admis" ou "Refusé".
        foreach ($classe as $etudiant) {
            $prenom = $etudiant['prenom'];
            // round(..., 2) permet d’arrondir la moyenne à deux décimales, pour un affichage plus propre.
            $moyenne = round(moyenneCount($etudiant), 2);
            $message = AdmisSible($moyenne) ? "Admis" : "Refusé";

            echo "Prénom : $prenom<br>";
            echo "Moyenne : $moyenne<br>";
            echo "Résultat : $message<br><br>";
        }

        ?>

    </main>

</body>

</html>