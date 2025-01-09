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

INSERT INTO ticket (name, price) VALUES ('Enfants', 35.00);
INSERT INTO ticket (name, price) VALUES ('Adultes', 50.00);
INSERT INTO ticket (name, price) VALUES ('Pass Alfredo', 350.00);