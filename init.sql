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

CREATE TABLE book(
   Id_book SERIAL NOT NULL,
   seats INTEGER NOT NULL,
   book_date TIMESTAMP NOT NULL,
   id_restaurant INTEGER NOT NULL,
   id_user INTEGER NOT NULL,
   PRIMARY KEY(Id_book),
   FOREIGN KEY(id_restaurant) REFERENCES restaurant(id_restaurant),
   FOREIGN KEY(id_user) REFERENCES users(id_user)
);


CREATE TABLE ticket_buy(
   id_ticket_buy SERIAL NOT NULL,
   visit_date DATE NOT NULL,
   id_ticket INTEGER NOT NULL,
   id_user INTEGER NOT NULL,
   PRIMARY KEY(id_ticket_buy),
   FOREIGN KEY(id_ticket) REFERENCES ticket(id_ticket),
   FOREIGN KEY(id_user) REFERENCES users(id_user)
);

INSERT INTO users (lastname, firstname, email, password) VALUES ('Toto', 'Titi', 'test@mail.com', '1234');

INSERT INTO category (name) VALUES ('Sensations fortes');
INSERT INTO category (name) VALUES ('En famille');

INSERT INTO attraction (name, url_picture, infos, id_category) VALUES ('Mini golf croco', '/images/minigolf.png', 'Le parcours met en avant des animations interactives, des sculptures en forme de crocodiles, et des zones aquatiques qui ajoutent une touche tropicale à l''expérience.', 2);
INSERT INTO attraction (name, url_picture, infos, id_category) VALUES ('Boiserie Freddy', '/images/boiseriefreddy.png', 'Avec sa structure majestueuse en bois massif, elle transporte ses passagers dans une expérience nostalgique rappelant les premières grandes attractions tout en garantissant une sécurité et une technologie modernes.', 1);
INSERT INTO attraction (name, url_picture, infos, id_category) VALUES ('Foxy funland', '/images/foxyfunland.png', 'Inspirée du légendaire personnage Foxy, cette attraction vous emmène à toute vitesse à travers des décors sombres et angoissants, remplis de surprises, d''effets spéciaux et de jump scares.', 1);
INSERT INTO attraction (name, url_picture, infos, id_category) VALUES ('Le carrousel enchanté', '/images/carrouselenchante.png', 'Montez à bord du Carrousel Enchanté, une attraction classique qui transporte petits et grands dans un univers magique. Avec ses chevaux de bois finement sculptés, ses carrosses élégants et sa musique enchanteresse, ce manège emblématique offre une expérience nostalgique et féérique.', 2);
INSERT INTO attraction (name, url_picture, infos, id_category) VALUES ('L''aire de jeu Alfredo', '/images/airedejeu.png', 'Sécurisée et adaptée à tous les âges, cette aire de jeu promet aventure et amusement, avec une touche de suspense qui plaira aux jeunes explorateurs', 2);
INSERT INTO attraction (name, url_picture, infos, id_category) VALUES ('Neon coaster', '/images/neoncoaster.png', 'La montagne russe la plus récente et audacieuse de sa génération. Cette attraction vous propulse dans un univers vibrant de lumières néon, de tunnels lumineux et d''effets sonores immersifs.', 1);

INSERT INTO ticket (name, price) VALUES ('Enfants', 35.00);
INSERT INTO ticket (name, price) VALUES ('Adultes', 50.00);
INSERT INTO ticket (name, price) VALUES ('Pass Alfredo', 350.00);