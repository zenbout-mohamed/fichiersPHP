<!DOCTYPE html>
<html lang="fr">
<head>
  <title><?= $Titre ?></title>
  <link rel="stylesheet" href="./assets/css/common.css">
  <?php if (isset($css)) : ?>
    <link rel="stylesheet" href="<?= $css ?>">
  <?php endif; ?>
</head>
<body>
<header>
    <nav class ="navigation">
        <ul class ="liens">
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="modules.php">Modules</a></li>
            <li><a href="evaluation.php">Evaluation</a></li>
        </ul>
    </nav>
</header>
<main>