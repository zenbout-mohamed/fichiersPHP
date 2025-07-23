<?php $Titre = "Page-Modules";$css = "./assets/css/accueil.css";
include './includes/header.php'; ?>
<main class ="accueil">
  <h1>Bienvenue sur mon site : Les préceptes du PHP</h1>
  <p class="para_1">
    Ce site vous présente les bases essentielles du langage PHP. Que vous soyez débutant ou en apprentissage,
    vous découvrirez les principes fondamentaux à travers des modules clairs et une auto-évaluation.
  </p>

  <div class="imbrication">
    <section class="redaction">
      <p>Qu'est-ce que PHP ?</p>
      <hr>
      <article>
        <small>Définition</small>
        <p>PHP (Hypertext Preprocessor) est un langage de script libre utilisé pour le développement web côté serveur.</p>
        <p>Il permet d'intégrer des fonctionnalités dynamiques dans des pages HTML, comme l'affichage de données ou le traitement de formulaires.</p>
      </article>
    </section>

    <section class="redaction">
      <p>Pourquoi apprendre PHP ?</p>
      <hr>
      <article>
        <small>Intérêt</small>
        <p>PHP est simple à prendre en main et est utilisé dans des millions de sites web à travers le monde.</p>
        <p>Il est notamment à la base de systèmes comme WordPress, Drupal ou Prestashop.</p>
      </article>
    </section>

    <section class="redaction">
      <p>Ce que vous allez découvrir</p>
      <hr>
      <article>
        <small>Contenu du site</small>
        <p>Ce site contient plusieurs modules abordant :</p>
        <ul>
          <li>La syntaxe de base</li>
          <li>Les variables et conditions</li>
          <li>Les boucles</li>
          <li>Les formulaires</li>
          <li>La gestion des fichiers</li>
        </ul>
      </article>
    </section>
  </div>
</main>

<?php include './includes/footer.php'; ?>