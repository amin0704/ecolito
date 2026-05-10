# README
## Projet Ecolito L3 Miage Classique Paris 1
Ceci est le github du Projet Symfony de l'equipe Sharky, L3 Miage Classique Panthéon-Sorbonne 2025-26

### Obtenir le projet

- Cloner le projet : git clone https://github.com/moi/ecolito.git
- Construction des images (+ lancement du site) : make build
- Installation des dependances : make composer-install
  
- Lancement du site seul (sans construction d'image) : make up (pas la peine si on a fait make build, utile quand on a deja construit les images mais qu'on veut relancer le site a un autre moment)

(Prérequis : avoir installé docker desktop et git)

### IMPORTANT !
Avant toute utilisation du site, il est necessaire de modifier le .env en rajoutant les lignes lié au mailer, à la base de donnée et a la clé API. Les lignes ont été envoyées via discord

### L'application
L'application Ecolito permet d'aider l'utilisateur à ameliorer son impact sur l'environnement, en rentrant sa consommation, suivant ses statistiques et en obtenant des conseils personnalisés.

### Technologies
Le site a été principalement codé en Symfony.
Utilisation de Twig pour les rendus visuels. 
Presence de CSS (+Bootstrap) et de JavaScript. 
Le service de base de donnée utilisé est un service Cloud (via Aiven). Base de donnée Mysql (nom de la bdd : dbb2). (Les identifiants pour se connecter à cette base de donnée sont envoyés via Discord.)
L'IA integré est utilisé via l'API Groq, accessible via clé api. (clé envoyée via Discord)
Le service utilisé pour l'envoi de mails est Brevo. (clé envoyée via Discord)




### Utilisation
Vous devez avoir un compte pour acceder au site. Vous pouvez utiliser la page inscription pour creer un compte, ou utiliser un compte avec des données deja existantes. Exemple de compte deja existant avec des données : mail : a@gmail.com / mot de passe : aaaaaa (c'est un compte test)

**Rentrer les donnees**
Vous pouvez utiliser un des 4 formulaires de l'espace "Saisir vos données de consommation" pour rentrer vos données de consommation, que ce soit un achat (avec le formulaire des achats), un repas consommé (avec le formulaire des consommation de repas), un trajet (avec le formulaire des trajets) ou n'importe quelle autre consommation (via le formulaire : informations de consommation personnalisées). N'hesitez pas a rentrer des details, dans le dernier champ des formulaires, pour toute precision que vous souhaitez apporter sur vos consommations.

**Consulter ses statistiques**
Dans la partie "mon bilan statistique", on a accés à des statistiques sur notre consommation, ainsi que des graphiques et l'historique de nos consommation.

**Acceder à des conseils**
Dans la partie "Conseils personnalisés", on a accés à des suggestions pour ameliorer notre impact sur l'environnement, avec nos points forts et faibles.




### Questions ?
Pour toute question, souci ou solicitation lié à ce projet, n'hesitez pas à contacter l'equipe (via Discord ou par nos mails etudiants).
Mail d'Amin : Amin.Harrada@etu.univ-paris1.fr
Mail d'Ayoub : Ayoub.Dahbi@etu.univ-paris1.fr
Mail d'Aylin : Aylin.Danistekin@etu.univ-paris1.fr
