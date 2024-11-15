CREATE DATABASE blog_db;
USE blog_db;


CREATE TABLE article (
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL,
content TEXT NOT NULL
);

INSERT INTO article (title, content) VALUES
('Exploration de la Normandie', 'La Normandie est une région riche en histoire et en culture.
Visitez des sites emblématiques comme les plages du Débarquement et la Tapisserie de Bayeux,
tout en savourant les produits laitiers locaux.'),
('Escapade dans les Alpes françaises', 'Les Alpes françaises offrent un paysage à couper le
souffle permettant la pratique des activités de plein air comme la randonnée et le ski, tout en
admirant les sommets enneigés.');

