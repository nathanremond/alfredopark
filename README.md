# Site parc d'attraction

Site du parc d'attraction Alfredo's Park

## 🚀 Fonctionnalités

- Affichage des attractions selon leurs catégories
- Possibilité de créer un compte utilisateur
- Possibilité de se connecter à un compte utilisateur
- Page de profil de l'utilisateur connecté
- Réservation de billets
- Affichage et réservation du restaurant du parc

## 🛠 Prérequis

- Docker
- Docker Compose
- Git
- Navigateur web pour pgAdmin

# Technologies utilisées

- HTML5
- CSS3
- Alpine.js
- Docker
 - image php:8.2-apache : Serveur web et application PHP
 - image postgres:15 : Base de données
 - image dpage/pgadmin4 : Interface d'administration de la base de données

## 📦 Installation du projet

1. Clonez le repository :
```bash
git clone https://github.com/nathanremond/alfredopark
cd alfredopark
```

2. Lancez l'application avec Docker Compose :
```bash
docker compose up --build
```

## 🌐 Utilisation

Accédez à l'application via votre navigateur : [http://localhost:8080](http://localhost:8080)


## 📊 Accès à pgAdmin

pgAdmin est accessible via votre navigateur : [http://localhost:8081](http://localhost:8081)

## 🔧 Configuration

### Variables d'environnement (docker compose.yml)

```yaml
# PostgreSQL
environment:
  DB_HOST: db
  DB_PORT: 5432
  DB_NAME: alfredopark
  DB_USER: postgres
  DB_PASSWORD: password

# pgAdmin
environment:
  PGADMIN_DEFAULT_EMAIL: admin@admin.com
  PGADMIN_DEFAULT_PASSWORD: admin
```

## 📝 Base de données

La base de données PostgreSQL est initialisée dans le fichier init.sql

## 🔨 Développement

Pour le développement, les volumes Docker sont configurés pour refléter les changements en temps réel :

```yaml
volumes:
  - ./public:/var/www/html/public
  - ./src:/var/www/html/src
```

## 🚀 Commandes utiles

```bash
# Démarrer l'application
docker compose up

# Démarrer l'application en arrière-plan
docker compose up -d

# Arrêter l'application
docker compose down

# Reconstruire les containers
docker compose up --build

# Voir les logs
docker compose logs

# Accéder au container PHP
docker compose exec php bash

# Accéder à la base de données
docker compose exec db psql -U postgres -d todolist

# Accéder à pgAdmin
http://localhost:8081

# Redémarrer pgAdmin si nécessaire
docker compose restart pgadmin
```

### Configuration initiale de pgAdmin

1. Connectez-vous avec :
   - Email: admin@admin.com
   - Mot de passe: admin

2. Pour ajouter le serveur PostgreSQL :
   - Clic droit sur "Servers" → "Register" → "Server"
   - Dans l'onglet "General" :
     - Name: AlfredoPark (ou autre nom de votre choix)
   - Dans l'onglet "Connection" :
     - Host name/address: db
     - Port: 5432
     - Maintenance database: alfredopark
     - Username: postgres
     - Password: password

3. Vous pouvez maintenant :
   - Visualiser la structure de la base de données
   - Exécuter des requêtes SQL
   - Gérer les tables et les données
   - Exporter/Importer des données

## 🛡 Sécurité

- Échappement des données HTML
- Requêtes préparées pour la base de données
- Validation des entrées utilisateur

## 📄 Licence

Distributed under the MIT License. See `LICENSE` for more information.