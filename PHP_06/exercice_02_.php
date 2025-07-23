<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_06_Exo2</title>
</head>

<body>
    <h1><?php echo "Exercice 02 :";?></h1>
    <hr>
    <main>
        <?php
        // Nous déclarons chaque élèves pour leurs note respectifs:
        // par exmple "Alice a obtenu 15/20"
        $eleves = [
            "Alice"  => 15,
            "Benoît" => 9,
            "Claire" => 18,
            "David"  => 11
        ];
        // count($eleves) = nombre d’éléments dans le tableau (ici : 4 élèves)
        $moyenneCount = 0;
        

    // On utilise un foreach avec clé ($nom) et valeur ($note).

        foreach ($eleves as $nom => $note) {
            echo "$nom a obtenu $note/20<br>";
            if ($note >= 10) {
                //  un compteur qui compte le nombre d’élèves ayant la moyenne (note ≥ 10).
                $moyenneCount++;
            }
        }

        echo "Nombre d'élèves avec la moyenne : $moyenneCount";
        ?>

    </main>

</body>

</html>