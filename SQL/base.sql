CREATE DATABASE base;
USE base;

CREATE TABLE b_membre (
    id_membre INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100),
    date_naissance DATE,
    genre VARCHAR(20),
    email VARCHAR(100),
    ville VARCHAR(100),
    mdp VARCHAR(255),
    image_profil VARCHAR(255)
);

CREATE TABLE b_categorie_objet (
    id_categorie INT PRIMARY KEY AUTO_INCREMENT,
    nom_categorie VARCHAR(100)
);

CREATE TABLE b_objet (
    id_objet INT PRIMARY KEY AUTO_INCREMENT,
    nom_objet VARCHAR(100),
    id_categorie INT,
    id_membre INT,
    FOREIGN KEY (id_categorie) REFERENCES b_categorie_objet(id_categorie),
    FOREIGN KEY (id_membre) REFERENCES b_membre(id_membre)
);

CREATE TABLE b_images_objet (
    id_image INT PRIMARY KEY AUTO_INCREMENT,
    id_objet INT,
    nom_image VARCHAR(255),
    FOREIGN KEY (id_objet) REFERENCES b_objet(id_objet)
);

CREATE TABLE b_emprunt (
    id_emprunt INT PRIMARY KEY AUTO_INCREMENT,
    id_objet INT,
    id_membre INT,
    date_emprunt DATE,
    date_retour DATE,
    FOREIGN KEY (id_objet) REFERENCES b_objet(id_objet),
    FOREIGN KEY (id_membre) REFERENCES b_membre(id_membre)
);

INSERT INTO b_membre (nom, date_naissance, genre, email, ville, mdp, image_profil) VALUES
('Sophie Martin', '1985-05-15', 'Féminin', 'sophie.martin@email.com', 'Paris', 'mdp123', 'sophie.jpg'),
('Pierre Dupont', '1990-08-22', 'Masculin', 'pierre.dupont@email.com', 'Lyon', 'mdp456', 'pierre.jpg'),
('Emma Laurent', '1992-03-10', 'Féminin', 'emma.laurent@email.com', 'Marseille', 'mdp789', 'emma.jpg'),
('Thomas Bernard', '1988-11-30', 'Masculin', 'thomas.bernard@email.com', 'Toulouse', 'mdp101', 'thomas.jpg');

-- Insertion des catégories
INSERT INTO b_categorie_objet (nom_categorie) VALUES
('Esthétique'),
('Bricolage'),
('Mécanique'),
('Cuisine');

-- Insertion des objets (10 par membre)
-- Objets de Sophie Martin (id_membre = 1)
INSERT INTO b_objet (nom_objet, id_categorie, id_membre) VALUES
('Sèche-cheveux professionnel', 1, 1),
('Fer à lisser', 1, 1),
('Perceuse électrique', 2, 1),
('Scie circulaire', 2, 1),
('Cric hydraulique', 3, 1),
('Trousse à outils', 3, 1),
('Robot multifonction', 4, 1),
('Machine à pain', 4, 1),
('Ponceuse orbitale', 2, 1),
('Pince à épiler professionnelle', 1, 1);

-- Objets de Pierre Dupont (id_membre = 2)
INSERT INTO b_objet (nom_objet, id_categorie, id_membre) VALUES
('Marteau perforateur', 2, 2),
('Tournevis électrique', 2, 2),
('Valise à outils', 3, 2),
('Compresseur d air', 3, 2),
('Mixeur plongeant', 4, 2),
('Grille-pain', 4, 2),
('Lampe à lumière pulsée', 1, 2),
('Appareil de massage facial', 1, 2),
('Scie sauteuse', 2, 2),
('Balance de cuisine', 4, 2);

-- Objets de Emma Laurent (id_membre = 3)
INSERT INTO b_objet (nom_objet, id_categorie, id_membre) VALUES
('Machine à coudre', 2, 3),
('Pistolet à colle', 2, 3),
('Défrisant brésilien', 1, 3),
('Kit manucure', 1, 3),
('Clé à molette', 3, 3),
('Jack hydraulique', 3, 3),
('Machine à café', 4, 3),
('Blender', 4, 3),
('Ponceuse à bande', 2, 3),
('Épilateur électrique', 1, 3);

-- Objets de Thomas Bernard (id_membre = 4)
INSERT INTO b_objet (nom_objet, id_categorie, id_membre) VALUES
('Ponceuse vibrante', 2, 4),
('Niveau laser', 2, 4),
('Outil de diagnostic voiture', 3, 4),
('Cric pneumatique', 3, 4),
('Barbecue électrique', 4, 4),
('Friteuse sans huile', 4, 4),
('Appareil de microdermabrasion', 1, 4),
('Brosse nettoyante visage', 1, 4),
('Scie à métaux', 2, 4),
('Extracteur de jus', 4, 4);

-- Insertion des images pour quelques objets (exemple)
INSERT INTO b_images_objet (id_objet, nom_image) VALUES
(1, 'seche-cheveux.jpg'),
(2, 'fer-lisser.jpg'),
(5, 'cric-hydraulique.jpg'),
(10, 'pince-epiler.jpg'),
(15, 'mixeur.jpg'),
(20, 'balance.jpg'),
(25, 'machine-cafe.jpg'),
(30, 'epilateur.jpg'),
(35, 'barbecue.jpg'),
(40, 'extracteur-jus.jpg');

-- Insertion des emprunts (10 emprunts)
INSERT INTO b_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES
(5, 2, '2023-01-15', '2023-01-20'),  -- Pierre emprunte le cric hydraulique de Sophie
(12, 1, '2023-02-10', '2023-02-15'),  -- Sophie emprunte le marteau perforateur de Pierre
(18, 4, '2023-03-05', '2023-03-12'), -- Thomas emprunte l'appareil de massage facial de Pierre
(25, 2, '2023-04-20', '2023-04-25'),  -- Pierre emprunte la machine à café d'Emma
(30, 1, '2023-05-15', '2023-05-22'),  -- Sophie emprunte l'épilateur électrique d'Emma
(35, 3, '2023-06-10', '2023-06-18'),  -- Emma emprunte le barbecue électrique de Thomas
(7, 4, '2023-07-05', '2023-07-12'),   -- Thomas emprunte le robot multifonction de Sophie
(22, 1, '2023-08-20', '2023-08-27'),  -- Sophie emprunte le kit manucure d'Emma
(38, 2, '2023-09-15', '2023-09-22'),  -- Pierre emprunte l'appareil de microdermabrasion de Thomas
(14, 3, '2023-10-10', '2023-10-17');  -- Emma emprunte le compresseur d'air de Pierre
 