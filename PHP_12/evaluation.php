<?php $Titre = "Page-Évaluation";
$css = "./assets/css/evaluation.css";
include "includes/header.php";

$evaluations = [
    "Module 1 : Présentation de PHP"     => 3,
    "Module 2 : Syntaxe de base"         => 4,
    "Module 3 : Conditions et boucles"   => 5,
    "Module 4 : Formulaires"             => 6,
];
?>
<main>
  <h1>Auto-évaluation des modules PHP</h1>
  <p>Voici un tableau récapitulatif de ma compréhension de chaque module. Note de 1 à 10.</p>

  <table>
    <thead>
      <tr>
        <th>Module</th>
        <th>Ma note</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Module 1 : Introduction à PHP</td>
        <td>8</td>
      </tr>
      <tr>
        <td>Module 2 : Syntaxe de base</td>
        <td>9</td>
      </tr>
      <tr>
        <td>Module 3 : Structures de contrôle</td>
        <td>7</td>
      </tr>
      <tr>
        <td>Module 4 : Tableaux et fonctions</td>
        <td>8</td>
      </tr>
      <tr>
        <td>Module 5 : Formulaires</td>
        <td>6</td>
      </tr>
    </tbody>
  </table>

  <section class="redaction">
    <p>Bilan global</p>
    <hr>
    <article>
      <p>Remarques personnelles</p>
      <p>Je commence à me sentir à l’aise avec la syntaxe de PHP. Les structures de contrôle sont bien comprises, 
      même si je dois encore m'exercer sur les formulaires et la validation des données.</p>
    </article>
  </section>
</main>


<?php include "includes/footer.php"; ?>