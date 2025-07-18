

-------------------------COMMENT UTILISER XDEBUG SUR VSCODE-----------------------------------------------------------------
1-Ouvre le dossier mon-projet dans VS Code
2-Clique sur Ctrl + Shift + D → choisir le bouton "Lecture" pour lancer 
3-Placer un point d’arrêt dans un fichier php (par exemple à $nom = $_POST...) 
4- Ouvrir la page sur le navigateur Laragon 
5- Remplire le formulaire et envoie
6- Le Débogueur sera activé à Vscode puis visualiser le signal.











----------------------------EN CAS D'ERREUR LORS DE LA LECTURE DE XDEBUG---------------------------------------------------


1. Pour vérifier si le port 9003 est deja occupé .
Faire sur powershell ou cmd cette commande : netstat -ano | findstr :9003
2.Ensuite faire ceci pour arreter le processus si cela est ouvert dans vs code : tasklist | findstr [le PID]
