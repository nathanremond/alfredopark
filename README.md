# Site parc d'attraction

Site du parc d'attraction Alfredo's Park

## 🚀 Fonctionnalités

- Affichage des attractions
- Ajout d'utilisateurs
- Connexion d'un utilisateur
- Réservation de tickets
- Réservation d'un restaurant

## 🛠 Prérequis

- Docker
- Docker Compose
- Git
- Navigateur web pour pgAdmin

## 📦 Installation

1. Clonez le repository :
```bash
git clone [url-du-repo]
cd [nom-du-dossier]
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

La base de données PostgreSQL est initialisée avec la structure suivante :

```sql
CREATE TABLE users(
   id_user SERIAL NOT NULL,
   lastname VARCHAR(50) NOT NULL,
   firstname VARCHAR(50) NOT NULL,
   email VARCHAR(100) NOT NULL,
   password VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_user)
);

CREATE TABLE category(
   id_category SERIAL NOT NULL,
   name VARCHAR(50) NOT NULL,
   PRIMARY KEY(id_category)
);

CREATE TABLE restaurant(
   id_restaurant SERIAL NOT NULL,
   name VARCHAR(50) NOT NULL,
   url_picture VARCHAR(500) NOT NULL,
   PRIMARY KEY(id_restaurant)
);

CREATE TABLE ticket(
   id_ticket SERIAL NOT NULL,
   name VARCHAR(50) NOT NULL,
   price NUMERIC(15,2) NOT NULL,
   PRIMARY KEY(id_ticket)
);

CREATE TABLE menu(
   id_menu SERIAL NOT NULL,
   name VARCHAR(50) NOT NULL,
   url_picture VARCHAR(500) NOT NULL,
   price NUMERIC(15,2) NOT NULL,
   id_restaurant INTEGER NOT NULL,
   PRIMARY KEY(id_menu),
   FOREIGN KEY(id_restaurant) REFERENCES restaurant(id_restaurant)
);

CREATE TABLE attraction(
   id_attraction SERIAL NOT NULL,
   name VARCHAR(50) NOT NULL,
   url_picture VARCHAR(500) NOT NULL,
   infos TEXT NOT NULL,
   id_category INTEGER NOT NULL,
   PRIMARY KEY(id_attraction),
   FOREIGN KEY(id_category) REFERENCES category(id_category)
);

CREATE TABLE restaurant_books(
   id_user INTEGER NOT NULL,
   id_restaurant INTEGER NOT NULL,
   seats INTEGER NOT NULL,
   book_date TIMESTAMP NOT NULL,
   PRIMARY KEY(id_user, id_restaurant),
   FOREIGN KEY(id_user) REFERENCES users(id_user),
   FOREIGN KEY(id_restaurant) REFERENCES restaurant(id_restaurant)
);

CREATE TABLE ticket_buy(
   id_user INTEGER NOT NULL,
   id_ticket INTEGER NOT NULL,
   visit_date DATE NOT NULL,
   PRIMARY KEY(id_user, id_ticket),
   FOREIGN KEY(id_user) REFERENCES users(id_user),
   FOREIGN KEY(id_ticket) REFERENCES ticket(id_ticket)
);
```

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
     - Name: TodoList (ou autre nom de votre choix)
   - Dans l'onglet "Connection" :
     - Host name/address: db
     - Port: 5432
     - Maintenance database: todolist
     - Username: postgres
     - Password: password

3. Vous pouvez maintenant :
   - Visualiser la structure de la base de données
   - Exécuter des requêtes SQL
   - Gérer les tables et les données
   - Exporter/Importer des données

## 🔨 Services Docker

L'application utilise trois services Docker :
1. **PHP/Apache** : Serveur web et application PHP
2. **PostgreSQL** : Base de données
3. **pgAdmin** : Interface d'administration de la base de données

## 🛡 Sécurité

- Échappement des données HTML
- Requêtes préparées pour la base de données
- Validation des entrées utilisateur

## 📄 Licence

Distributed under the MIT License. See `LICENSE` for more information.
