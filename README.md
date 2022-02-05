# Symfony Project
Comment démarrer le projet (Étape par étape) 💻 :
# Installation du projet :
```bash
● git clone https://github.com/ramtinattar/projet_symfony.git
● cd project 
● composer update/composer install
● docker-compose up-d
● docker-compose build
● docker exec -it www_docker_symfony bash
● cd project
● php bin/console doctrine:database:create
● php bin/console doctrine:schema:update --force
● php bin/console doctrine:fixtures:load
Puis pour naviguer sur le site il faut aller à : http://127.0.0.1:8741/
```

# Notes: 
● Nous avons commencé par créer une page d’accueil simple en utilisant Bootstrap.
● Nous sommes ensuite passés à la création des Entités que on a pense etre utiles pour le projet - Publicité, Catégorie, et Ville, avec Publicité ayant une relation ManyToOne à chaque Catégorie et Ville.
● Nous avons créé quelques fausses données avec la fonction Fixtures à utiliser pour les tests.
● Ensuite on as créé chaque Controller et Templates pour montrer les annonces.
● Notre prochaine étape était de créer le formulaire pour créer de nouvelles publicités, mais nous avons manqué de temps.