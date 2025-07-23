<?php 
$Titre = "Page Modules";
$pageStyle = "./assets/css/modules.css";
include './includes/header.php';

$modules = [
  "Module 1 : Introduction à PHP" => ["Définition de PHP", "Installation", "Premiers scripts"],
  "Module 2 : Syntaxe de base" => ["Variables", "Constantes", "Concaténation"],
  "Module 3 : Structures de contrôle" => ["Conditions", "Switch", "Boucles"],
  "Module 4 : Tableaux et fonctions" => ["Tableaux associatifs", "Fonctions utilisateur"],
  "Module 5 : Formulaires en PHP" => ["Méthodes GET/POST", "Validation", "Sécurité"],
];
?>

<main>
  <h1>Liste des modules</h1>
  <hr>

  <?php foreach ($modules as $titre => $contenu): ?>
    <section class="redaction">
      <h2><?= $titre ?></h2>
      <ul>
        <?php foreach ($contenu as $point): ?>
          <li><?= htmlspecialchars($point) ?></li>
        <?php endforeach; ?>
      </ul>
    </section>
  <?php endforeach; ?>
</main>

<?php include './includes/footer.php'; ?>



