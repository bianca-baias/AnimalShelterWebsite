-- ---------------------------------------------------------------------------
-- animal_shelter - schema + date initiale
-- Reconstruita din codul PHP (versiunea curenta a site-ului).
-- Import: mysql -u root < includes/animal_shelter.sql
--     sau phpMyAdmin > Import
-- ---------------------------------------------------------------------------

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

DROP DATABASE IF EXISTS `animal_shelter`;
CREATE DATABASE `animal_shelter` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `animal_shelter`;

-- ---------------------------------------------------------------------------
-- Categorii de utilizatori
-- id-ul este folosit direct in cod: 1 = admin, 2 = utilizator / vizitator
-- (header_logged.php: $categorie == 1 -> meniu de administrare, iar
--  vizitatorii nelogati primesc implicit categoria 2; signup.inc.php si
--  admin_addUser.inc.php insereaza utilizatori noi cu categoria 2)
-- `redirect` = pagina spre care duce login-ul (includes/login.inc.php)
-- ---------------------------------------------------------------------------
CREATE TABLE `categorie_utilizator` (
  `id` int(11) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `redirect` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `categorie_utilizator` (`id`, `categorie`, `redirect`) VALUES
(1, 'admin', 'admin_dashboard.php'),
(2, 'utilizator', 'index.php');

-- ---------------------------------------------------------------------------
-- Utilizatori (tabela se numeste `users` in tot codul)
-- ---------------------------------------------------------------------------
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `parola` varchar(255) NOT NULL,
  `nume` varchar(100) NOT NULL,
  `prenume` varchar(100) NOT NULL,
  `data_inscriere` date DEFAULT NULL,
  `poza` varchar(255) DEFAULT NULL,
  `categorie` int(11) NOT NULL DEFAULT 2,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `categorie` (`categorie`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`categorie`) REFERENCES `categorie_utilizator` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- parolele sunt in clar pentru ca includes/login.inc.php compara direct sirul
INSERT INTO `users` (`id`, `email`, `parola`, `nume`, `prenume`, `data_inscriere`, `poza`, `categorie`) VALUES
(1, 'admin@adapost.ro', 'admin', 'Administrator', 'Adapost', '2024-01-01', NULL, 1),
(2, 'user@test.ro', 'user', 'Ionescu', 'Maria', '2024-02-15', NULL, 2);

-- ---------------------------------------------------------------------------
-- Paginile site-ului; meniul este generat din aceasta tabela (header_logged.php)
--   categorie_utilizator = cui ii este permisa pagina
--   vizibil = 1 -> apare in meniu, 0 -> acces permis, dar fara link in meniu
-- Numele "Cont", "Favorite", "Log out" si "Log in" sunt tratate special in
-- header_logged.php (se afiseaza in functie de sesiune), deci nu le modifica.
-- ---------------------------------------------------------------------------
CREATE TABLE `pagini` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume_pagina` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `categorie_utilizator` int(11) NOT NULL,
  `vizibil` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `categorie_utilizator` (`categorie_utilizator`),
  CONSTRAINT `pagini_ibfk_1` FOREIGN KEY (`categorie_utilizator`) REFERENCES `categorie_utilizator` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `pagini` (`nume_pagina`, `link`, `categorie_utilizator`, `vizibil`) VALUES
-- meniul public (categoria 2 = vizitator si utilizator logat)
('Home',                     'index.php',                       2, 1),
('Misiune',                  'misiune.php',                     2, 1),
('Voluntari',                'voluntari.php',                   2, 1),
('Parteneri',                'parteneri.php',                   2, 1),
('Adopta',                   'adopta.php',                      2, 1),
('Adopta la distanta',       'adopta_distanta.php',             2, 1),
('Foster',                   'foster.php',                      2, 1),
('Voluntariat',              'voluntariat.php',                 2, 1),
('Doneaza online',           'doneaza_online.php',              2, 1),
('Doneaza fizic',            'doneaza_fizic.php',               2, 1),
('Redirectioneaza 3.5%',     'redirect.php',                    2, 1),
('Happy end',                'happy_end.php',                   2, 1),
('Contact',                  'contact.php',                     2, 1),
('Cont',                     'cont.php',                        2, 1),
('Favorite',                 'favorite.php',                    2, 1),
('Log in',                   'log_in.php',                      2, 1),
('Log out',                  'includes/logout.inc.php',         2, 1),
-- pagini permise, dar care nu apar in meniu
('Detalii animal',           'pet.php',                         2, 0),
('Inregistrare',             'sign_up.php',                     2, 0),
('Recuperare parola',        'forgot_password.php',             2, 0),
('Template',                 'template.php',                    2, 0),

-- meniul de administrare (categoria 1)
('Dashboard',                'admin_dashboard.php',             1, 1),
('Gestiune animale',         'admin_pets.php',                  1, 1),
('Adoptii fizice',           'admin_adoptiiFizice.php',         1, 1),
('Adoptii la distanta',      'admin_adoptiiDistanta.php',       1, 1),
('Clienti',                  'admin_usersCustomers.php',        1, 1),
('Membri',                   'admin_usersMembers.php',          1, 1),
('Sponsori',                 'admin_usersSponsors.php',         1, 1),
('Donatii online',           'admin_donatiiOnline.php',         1, 1),
('Formular 3.5%',            'admin_donatiiFormular.php',       1, 1),
('Log out',                  'includes/logout.inc.php',         1, 1),
-- formularele de adaugare/editare si paginile publice, permise adminului
('Editare animal',           'admin_actionPet.php',             1, 0),
('Editare adoptie fizica',   'admin_actionAdoptiiFizice.php',   1, 0),
('Editare adoptie distanta', 'admin_actionAdoptiiDistanta.php', 1, 0),
('Editare utilizator',       'admin_actionUser.php',            1, 0),
('Editare membru',           'admin_actionMembru.php',          1, 0),
('Editare sponsor',          'admin_actionSponsor.php',         1, 0),
('Home',                     'index.php',                       1, 0),
('Adopta',                   'adopta.php',                      1, 0),
('Detalii animal',           'pet.php',                         1, 0),
('Contact',                  'contact.php',                     1, 0),
('Cont',                     'cont.php',                        1, 0),
('Template admin',           'template_admin.php',              1, 0);

-- ---------------------------------------------------------------------------
-- Drepturi (tabela exista in schema veche, momentan nu este folosita in cod)
-- ---------------------------------------------------------------------------
CREATE TABLE `drepturi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pagina` int(11) NOT NULL,
  `categorie_utilizator` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pagina` (`id_pagina`),
  KEY `categorie_utilizator` (`categorie_utilizator`),
  CONSTRAINT `drepturi_ibfk_1` FOREIGN KEY (`id_pagina`) REFERENCES `pagini` (`id`) ON DELETE CASCADE,
  CONSTRAINT `drepturi_ibfk_2` FOREIGN KEY (`categorie_utilizator`) REFERENCES `categorie_utilizator` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ---------------------------------------------------------------------------
-- Animale
-- `poza` pastreaza numele fisierului urcat; pe disc devine
-- includes/admin/uploads/profile-{id}-{poza} (vezi admin_pets.php)
-- ---------------------------------------------------------------------------
CREATE TABLE `pet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `specie` varchar(50) NOT NULL DEFAULT 'caine',
  `nume` varchar(100) NOT NULL,
  `varsta` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `talie` varchar(20) NOT NULL,
  `temperament` varchar(50) NOT NULL,
  `data_intrare` date NOT NULL,
  `descriere` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'disponibil',
  `poza` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- id-urile si numele pozelor corespund fisierelor deja existente in
-- includes/admin/uploads/; restul datelor sunt exemple
INSERT INTO `pet` (`id`, `specie`, `nume`, `varsta`, `sex`, `talie`, `temperament`, `data_intrare`, `descriere`, `status`, `poza`) VALUES
(1,  'caine', 'Rex',   3, 'M', 'medie', 'prietenos', '2023-05-10', 'Caine jucaus, se intelege bine cu copiii.', 'disponibil', 'p1.jpeg'),
(3,  'caine', 'Luna',  2, 'F', 'mica',  'prietenos', '2023-07-22', 'Foarte atasata de oameni, potrivita pentru apartament.', 'disponibil', 'p2.jpeg'),
(32, 'caine', 'Bruno', 5, 'M', 'mare',  'prietenos', '2024-01-15', 'Calm si ascultator, ideal pentru curte.', 'disponibil', 'p3.jpeg'),
(33, 'caine', 'Nala',  1, 'F', 'medie', 'anxios',    '2024-03-02', 'Timida la inceput, are nevoie de rabdare.', 'disponibil', 'p10.jpg'),
(34, 'caine', 'Max',   4, 'M', 'mare',  'prietenos', '2024-04-18', 'Energic, are nevoie de plimbari lungi.', 'rezervat', 'p11.jpg'),
(35, 'caine', 'Bella', 6, 'F', 'medie', 'prietenos', '2024-06-05', 'Blanda si linistita, potrivita pentru familii.', 'disponibil', 'p3.jpeg'),
(36, 'caine', 'Rocky', 2, 'M', 'medie', 'prietenos', '2024-08-11', 'Sociabil, se intelege cu alti caini.', 'disponibil', 'p8.jpg'),
(37, 'caine', 'Sasha', 3, 'F', 'mica',  'prietenos', '2024-09-27', 'Adora joaca si mangaierile.', 'disponibil', 'p9.jpg');

-- ---------------------------------------------------------------------------
-- Adoptii
-- includes/admin/addadoptiefizica.inc.php nu trimite `tip_adoptie`,
-- de aceea coloana are valoare implicita
-- ---------------------------------------------------------------------------
CREATE TABLE `adoptii` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pet` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nume` varchar(100) NOT NULL,
  `prenume` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_adoptie` date NOT NULL,
  `tip_adoptie` varchar(50) NOT NULL DEFAULT 'fizica',
  PRIMARY KEY (`id`),
  KEY `id_pet` (`id_pet`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `adoptii_ibfk_1` FOREIGN KEY (`id_pet`) REFERENCES `pet` (`id`) ON DELETE CASCADE,
  CONSTRAINT `adoptii_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `adoptii` (`id`, `id_pet`, `id_user`, `nume`, `prenume`, `email`, `data_adoptie`, `tip_adoptie`) VALUES
(1, 34, 2, 'Ionescu', 'Maria', 'user@test.ro', '2024-05-20', 'fizica');

CREATE TABLE `adoptii_distanta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perioada` varchar(50) NOT NULL,
  `id_adoptie` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_adoptie` (`id_adoptie`),
  CONSTRAINT `adoptii_distanta_ibfk_1` FOREIGN KEY (`id_adoptie`) REFERENCES `adoptii` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ---------------------------------------------------------------------------
-- Favorite
-- ---------------------------------------------------------------------------
CREATE TABLE `favorite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pet` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pet` (`id_pet`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`id_pet`) REFERENCES `pet` (`id`) ON DELETE CASCADE,
  CONSTRAINT `favorite_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ---------------------------------------------------------------------------
-- Donatii online
-- ---------------------------------------------------------------------------
CREATE TABLE `donatii_online` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `nume` varchar(100) NOT NULL,
  `prenume` varchar(100) NOT NULL,
  `suma` decimal(10,2) NOT NULL,
  `data_donatie` date NOT NULL,
  `recurenta` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `donatii_online_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ---------------------------------------------------------------------------
-- Formular 3.5%
-- ---------------------------------------------------------------------------
CREATE TABLE `formular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(100) NOT NULL,
  `prenume` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_completare` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ---------------------------------------------------------------------------
-- Sponsori (cod_fiscal, CUI si adresa sunt folosite de
-- includes/admin/admin_addSponsor.inc.php si admin_actionSponsor.php)
-- ---------------------------------------------------------------------------
CREATE TABLE `sponsori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefon` varchar(20) DEFAULT NULL,
  `poza` varchar(255) NOT NULL DEFAULT '',
  `cod_fiscal` varchar(50) DEFAULT NULL,
  `CUI` varchar(50) DEFAULT NULL,
  `adresa` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `sponsorizari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sponsor` int(11) NOT NULL,
  `id_factura` varchar(50) DEFAULT NULL,
  `suma` decimal(10,2) NOT NULL,
  `data_sponsorizare` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sponsor` (`id_sponsor`),
  CONSTRAINT `sponsorizari_ibfk_1` FOREIGN KEY (`id_sponsor`) REFERENCES `sponsori` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

SET FOREIGN_KEY_CHECKS = 1;
