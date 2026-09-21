-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2026 at 09:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animal_shelter`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoptii`
--

CREATE TABLE `adoptii` (
  `id` int(11) NOT NULL,
  `id_pet` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nume` varchar(100) NOT NULL,
  `prenume` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_adoptie` date NOT NULL,
  `tip_adoptie` varchar(50) NOT NULL DEFAULT 'fizica'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adoptii`
--

INSERT INTO `adoptii` (`id`, `id_pet`, `id_user`, `nume`, `prenume`, `email`, `data_adoptie`, `tip_adoptie`) VALUES
(1, 34, 2, 'Ionescu', 'Maria', 'user@test.ro', '2024-05-20', 'fizica');

-- --------------------------------------------------------

--
-- Table structure for table `adoptii_distanta`
--

CREATE TABLE `adoptii_distanta` (
  `id` int(11) NOT NULL,
  `perioada` varchar(50) NOT NULL,
  `id_adoptie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categorie_utilizator`
--

CREATE TABLE `categorie_utilizator` (
  `id` int(11) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `redirect` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorie_utilizator`
--

INSERT INTO `categorie_utilizator` (`id`, `categorie`, `redirect`) VALUES
(1, 'admin', 'admin_dashboard.php'),
(2, 'utilizator', 'index.php');

-- --------------------------------------------------------

--
-- Table structure for table `donatii_online`
--

CREATE TABLE `donatii_online` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nume` varchar(100) NOT NULL,
  `prenume` varchar(100) NOT NULL,
  `suma` decimal(10,2) NOT NULL,
  `data_donatie` date NOT NULL,
  `recurenta` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drepturi`
--

CREATE TABLE `drepturi` (
  `id` int(11) NOT NULL,
  `id_pagina` int(11) NOT NULL,
  `categorie_utilizator` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `id` int(11) NOT NULL,
  `id_pet` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `formular`
--

CREATE TABLE `formular` (
  `id` int(11) NOT NULL,
  `nume` varchar(100) NOT NULL,
  `prenume` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_completare` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pagini`
--

CREATE TABLE `pagini` (
  `id` int(11) NOT NULL,
  `nume_pagina` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `categorie_utilizator` int(11) NOT NULL,
  `vizibil` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pagini`
--

INSERT INTO `pagini` (`id`, `nume_pagina`, `link`, `categorie_utilizator`, `vizibil`) VALUES
(1, 'Home', 'index.php', 2, 0),
(2, 'Misiune', 'misiune.php', 2, 0),
(3, 'Voluntari', 'voluntari.php', 2, 0),
(4, 'Parteneri', 'parteneri.php', 2, 0),
(5, 'Adopta', 'adopta.php', 2, 1),
(6, 'Adopta la distanta', 'adopta_distanta.php', 2, 0),
(7, 'Foster', 'foster.php', 2, 0),
(8, 'Voluntariat', 'voluntariat.php', 2, 0),
(9, 'Doneaza online', 'doneaza_online.php', 2, 1),
(10, 'Doneaza fizic', 'doneaza_fizic.php', 2, 0),
(11, 'Redirectioneaza 3.5%', 'redirect.php', 2, 1),
(12, 'Happy end', 'happy_end.php', 2, 0),
(13, 'Contact', 'contact.php', 2, 1),
(14, 'Cont', 'cont.php', 2, 1),
(15, 'Favorite', 'favorite.php', 2, 1),
(16, 'Log in', 'log_in.php', 2, 1),
(17, 'Log out', 'includes/logout.inc.php', 2, 1),
(18, 'Detalii animal', 'pet.php', 2, 0),
(19, 'Inregistrare', 'sign_up.php', 2, 0),
(20, 'Recuperare parola', 'forgot_password.php', 2, 0),
(21, 'Template', 'template.php', 2, 0),
(22, 'Dashboard', 'admin_dashboard.php', 1, 0),
(23, 'Gestiune animale', 'admin_pets.php', 1, 1),
(24, 'Adoptii fizice', 'admin_adoptiiFizice.php', 1, 1),
(25, 'Adoptii la distanta', 'admin_adoptiiDistanta.php', 1, 1),
(26, 'Clienti', 'admin_usersCustomers.php', 1, 0),
(27, 'Membri', 'admin_usersMembers.php', 1, 0),
(28, 'Sponsori', 'admin_usersSponsors.php', 1, 0),
(29, 'Donatii online', 'admin_donatiiOnline.php', 1, 1),
(30, 'Formular 3.5%', 'admin_donatiiFormular.php', 1, 1),
(31, 'Log out', 'includes/logout.inc.php', 1, 1),
(32, 'Editare animal', 'admin_actionPet.php', 1, 0),
(33, 'Editare adoptie fizica', 'admin_actionAdoptiiFizice.php', 1, 0),
(34, 'Editare adoptie distanta', 'admin_actionAdoptiiDistanta.php', 1, 0),
(35, 'Editare utilizator', 'admin_actionUser.php', 1, 0),
(36, 'Editare membru', 'admin_actionMembru.php', 1, 0),
(37, 'Editare sponsor', 'admin_actionSponsor.php', 1, 0),
(38, 'Home', 'index.php', 1, 0),
(39, 'Adopta', 'adopta.php', 1, 0),
(40, 'Detalii animal', 'pet.php', 1, 0),
(41, 'Contact', 'contact.php', 1, 0),
(42, 'Cont', 'cont.php', 1, 0),
(43, 'Template admin', 'template_admin.php', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `id` int(11) NOT NULL,
  `specie` varchar(50) NOT NULL DEFAULT 'caine',
  `nume` varchar(100) NOT NULL,
  `varsta` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `talie` varchar(20) NOT NULL,
  `temperament` varchar(50) NOT NULL,
  `data_intrare` date NOT NULL,
  `descriere` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'disponibil',
  `poza` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`id`, `specie`, `nume`, `varsta`, `sex`, `talie`, `temperament`, `data_intrare`, `descriere`, `status`, `poza`) VALUES
(1, 'caine', 'Rex', 3, 'M', 'medie', 'prietenos', '2023-05-10', 'Caine jucaus, se intelege bine cu copiii.', 'rezervat', 'p1.jpeg'),
(3, 'caine', 'Luna', 2, 'F', 'mica', 'prietenos', '2023-07-22', 'Foarte atasata de oameni, potrivita pentru apartament.', 'disponibil', 'p2.jpeg'),
(32, 'caine', 'Bruno', 5, 'M', 'mare', 'prietenos', '2024-01-15', 'Calm si ascultator, ideal pentru curte.', 'disponibil', 'p3.jpeg'),
(33, 'caine', 'Nala', 1, 'F', 'medie', 'anxios', '2024-03-02', 'Timida la inceput, are nevoie de rabdare.', 'disponibil', 'p10.jpg'),
(34, 'caine', 'Max', 4, 'M', 'mare', 'prietenos', '2024-04-18', 'Energic, are nevoie de plimbari lungi.', 'rezervat', 'p11.jpg'),
(35, 'caine', 'Bella', 6, 'F', 'medie', 'prietenos', '2024-06-05', 'Blanda si linistita, potrivita pentru familii.', 'disponibil', 'p3.jpeg'),
(36, 'caine', 'Rocky', 2, 'M', 'medie', 'prietenos', '2024-08-11', 'Sociabil, se intelege cu alti caini.', 'disponibil', 'p8.jpg'),
(37, 'caine', 'Sasha', 3, 'F', 'mica', 'prietenos', '2024-09-27', 'Adora joaca si mangaierile.', 'disponibil', 'p9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sponsori`
--

CREATE TABLE `sponsori` (
  `id` int(11) NOT NULL,
  `nume` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefon` varchar(20) DEFAULT NULL,
  `poza` varchar(255) NOT NULL DEFAULT '',
  `cod_fiscal` varchar(50) DEFAULT NULL,
  `CUI` varchar(50) DEFAULT NULL,
  `adresa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sponsorizari`
--

CREATE TABLE `sponsorizari` (
  `id` int(11) NOT NULL,
  `id_sponsor` int(11) NOT NULL,
  `id_factura` varchar(50) DEFAULT NULL,
  `suma` decimal(10,2) NOT NULL,
  `data_sponsorizare` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `parola` varchar(255) NOT NULL,
  `nume` varchar(100) NOT NULL,
  `prenume` varchar(100) NOT NULL,
  `data_inscriere` date DEFAULT NULL,
  `poza` varchar(255) DEFAULT NULL,
  `categorie` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `parola`, `nume`, `prenume`, `data_inscriere`, `poza`, `categorie`) VALUES
(1, 'admin@adapost.ro', 'admin', 'Administrator', 'Adapost', '2024-01-01', NULL, 1),
(2, 'user@test.ro', 'user', 'Ionescu', 'Maria', '2024-02-15', NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoptii`
--
ALTER TABLE `adoptii`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pet` (`id_pet`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `adoptii_distanta`
--
ALTER TABLE `adoptii_distanta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_adoptie` (`id_adoptie`);

--
-- Indexes for table `categorie_utilizator`
--
ALTER TABLE `categorie_utilizator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donatii_online`
--
ALTER TABLE `donatii_online`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `drepturi`
--
ALTER TABLE `drepturi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pagina` (`id_pagina`),
  ADD KEY `categorie_utilizator` (`categorie_utilizator`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pet` (`id_pet`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `formular`
--
ALTER TABLE `formular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagini`
--
ALTER TABLE `pagini`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_utilizator` (`categorie_utilizator`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsori`
--
ALTER TABLE `sponsori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsorizari`
--
ALTER TABLE `sponsorizari`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sponsor` (`id_sponsor`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `categorie` (`categorie`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adoptii`
--
ALTER TABLE `adoptii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adoptii_distanta`
--
ALTER TABLE `adoptii_distanta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donatii_online`
--
ALTER TABLE `donatii_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drepturi`
--
ALTER TABLE `drepturi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formular`
--
ALTER TABLE `formular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pagini`
--
ALTER TABLE `pagini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `sponsori`
--
ALTER TABLE `sponsori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sponsorizari`
--
ALTER TABLE `sponsorizari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adoptii`
--
ALTER TABLE `adoptii`
  ADD CONSTRAINT `adoptii_ibfk_1` FOREIGN KEY (`id_pet`) REFERENCES `pet` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `adoptii_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `adoptii_distanta`
--
ALTER TABLE `adoptii_distanta`
  ADD CONSTRAINT `adoptii_distanta_ibfk_1` FOREIGN KEY (`id_adoptie`) REFERENCES `adoptii` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `donatii_online`
--
ALTER TABLE `donatii_online`
  ADD CONSTRAINT `donatii_online_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `drepturi`
--
ALTER TABLE `drepturi`
  ADD CONSTRAINT `drepturi_ibfk_1` FOREIGN KEY (`id_pagina`) REFERENCES `pagini` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `drepturi_ibfk_2` FOREIGN KEY (`categorie_utilizator`) REFERENCES `categorie_utilizator` (`id`);

--
-- Constraints for table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`id_pet`) REFERENCES `pet` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorite_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pagini`
--
ALTER TABLE `pagini`
  ADD CONSTRAINT `pagini_ibfk_1` FOREIGN KEY (`categorie_utilizator`) REFERENCES `categorie_utilizator` (`id`);

--
-- Constraints for table `sponsorizari`
--
ALTER TABLE `sponsorizari`
  ADD CONSTRAINT `sponsorizari_ibfk_1` FOREIGN KEY (`id_sponsor`) REFERENCES `sponsori` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`categorie`) REFERENCES `categorie_utilizator` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
