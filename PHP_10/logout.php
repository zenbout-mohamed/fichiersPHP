<!-- Cette page détruira la session de l'utilisateur et sera hors connexion -->
<?php
    session_start();
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit;
?>