-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           10.6.12-MariaDB-0ubuntu0.22.04.1 - Ubuntu 22.04
-- SE du serveur:                debian-linux-gnu
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour district_symfony
CREATE DATABASE IF NOT EXISTS `district_symfony` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `district_symfony`;

-- Listage de la structure de table district_symfony. categorie
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table district_symfony.categorie : ~3 rows (environ)
DELETE FROM `categorie`;
INSERT INTO `categorie` (`id`, `libelle`, `image`, `active`) VALUES
	(1, 'Pizza', 'pizza_cat.jpg', 1),
	(2, 'Burger', 'burger_cat.jpg', 1),
	(3, 'Pasta', 'pasta_cat.jpg', 1);

-- Listage de la structure de table district_symfony. commande
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `utilisateur_id` int(11) DEFAULT NULL,
  `date_commande` date NOT NULL,
  `total` decimal(6,2) NOT NULL,
  `etat` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6EEAA67DFB88E14F` (`utilisateur_id`),
  CONSTRAINT `FK_6EEAA67DFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table district_symfony.commande : ~11 rows (environ)
DELETE FROM `commande`;
INSERT INTO `commande` (`id`, `utilisateur_id`, `date_commande`, `total`, `etat`) VALUES
	(1, 1, '2020-11-30', 16.00, 3),
	(2, 2, '2020-11-30', 20.00, 3),
	(3, NULL, '2023-07-17', 8.00, 1),
	(4, NULL, '2023-07-17', 8.00, 1),
	(5, NULL, '2023-07-17', 8.00, 1),
	(6, NULL, '2023-07-17', 8.00, 1),
	(7, NULL, '2023-07-17', 8.00, 1),
	(8, 4, '2023-07-17', 16.00, 1),
	(9, 4, '2023-07-17', 16.00, 1),
	(10, 4, '2023-07-17', 16.00, 1),
	(11, 4, '2023-07-17', 16.00, 1),
	(12, 4, '2023-07-17', 16.00, 1);

-- Listage de la structure de table district_symfony. contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `objet` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table district_symfony.contact : ~3 rows (environ)
DELETE FROM `contact`;
INSERT INTO `contact` (`id`, `objet`, `email`, `message`) VALUES
	(1, 'test', 'chris80@service.com', 'test !!!!!!!!!!!!!!!!!!!!!'),
	(2, 'test', 'chris80@service.com', 'test !!!!!!!!!!!!!!!!!!!!!'),
	(3, 'test', 'chris80@service.com', 'test !!!!!!!!!!!!!!!!!!!!!');

-- Listage de la structure de table district_symfony. detail
CREATE TABLE IF NOT EXISTS `detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plat_id` int(11) DEFAULT NULL,
  `commande_id` int(11) DEFAULT NULL,
  `quantite` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2E067F93D73DB560` (`plat_id`),
  KEY `IDX_2E067F9382EA2E54` (`commande_id`),
  CONSTRAINT `FK_2E067F9382EA2E54` FOREIGN KEY (`commande_id`) REFERENCES `commande` (`id`),
  CONSTRAINT `FK_2E067F93D73DB560` FOREIGN KEY (`plat_id`) REFERENCES `plat` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table district_symfony.detail : ~11 rows (environ)
DELETE FROM `detail`;
INSERT INTO `detail` (`id`, `plat_id`, `commande_id`, `quantite`) VALUES
	(1, 1, 1, 4),
	(2, 2, 2, 2),
	(3, 2, 3, 1),
	(4, 2, 4, 1),
	(5, 2, 5, 1),
	(6, 2, 6, 1),
	(7, 2, 7, 1),
	(8, 2, 8, 2),
	(9, 2, 9, 2),
	(10, 2, 10, 2),
	(11, 2, 11, 2),
	(12, 2, 12, 2);

-- Listage de la structure de table district_symfony. messenger_messages
CREATE TABLE IF NOT EXISTS `messenger_messages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table district_symfony.messenger_messages : ~1 rows (environ)
DELETE FROM `messenger_messages`;

-- Listage de la structure de table district_symfony. plat
CREATE TABLE IF NOT EXISTS `plat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_id` int(11) DEFAULT NULL,
  `libelle` varchar(50) DEFAULT NULL,
  `description` longtext NOT NULL,
  `prix` decimal(6,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2038A207BCF5E72D` (`categorie_id`),
  CONSTRAINT `FK_2038A207BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table district_symfony.plat : ~2 rows (environ)
DELETE FROM `plat`;
INSERT INTO `plat` (`id`, `categorie_id`, `libelle`, `description`, `prix`, `image`, `active`) VALUES
	(1, 1, 'Pizza Bianca', 'Une pizza fine et croustillante garnie de crème mascarpone légèrement citronnée et de tranches de saumon fumé, le tout relevé de baies roses et de basilic frais.', 14.00, 'pizza-salmon.png', 1),
	(2, 2, 'District Burger', 'Burger composé d’un bun’s du boulanger, deux steaks de 80g (origine française), de deux tranches poitrine de porc fumée, de deux tranches cheddar affiné, salade et oignons confits.', 8.00, 'hamburger.jpg', 1),
	(3, 2, 'Cheeseburger', 'Burger composé d’un bun’s du boulanger, de salade, oignons rouges, pickles, oignon confit, tomate, d’un steak d’origine Française, d’une tranche de cheddar affiné, et de notre sauce maison.', 8.00, 'cheesburger.jpg', 1),
	(4, 3, 'Lasagnes', 'Découvrez notre recette des lasagnes, l\'une des spécialités italiennes que tout le monde aime avec sa viande hachée et gratinée à l\'emmental. Et bien sûr, une inoubliable béchamel à la noix de muscade.', 12.00, 'lasagnes_viande.jpg', 1),
	(5, 3, 'Tagliatelles au saumon', 'Découvrez notre recette délicieuse de tagliatelles au saumon frais et à la crème qui qui vous assure un véritable régal !', 12.00, 'tagliatelles-saumon.jpg', 1);

-- Listage de la structure de table district_symfony. utilisateur
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `cp` varchar(20) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `roles` longtext NOT NULL COMMENT '(DC2Type:json)',
  `is_verified` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1D1C63B3E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table district_symfony.utilisateur : ~5 rows (environ)
DELETE FROM `utilisateur`;
INSERT INTO `utilisateur` (`id`, `email`, `password`, `nom`, `prenom`, `telephone`, `adresse`, `cp`, `ville`, `roles`, `is_verified`) VALUES
	(1, 'email1@email1.com', '$2y$13$wDDXtItIl5vHkB5lhpZgw.mIsMnBJMMuvT.sE4lggxXls7J1sDBWO', 'nom1', 'jean', '0611111111', '11 rue du moulin', '80000', 'amiens', '["ROLE_1"]', 0),
	(2, 'email2@email2.com', '456', 'nom2', 'charles', '0622222222', '22 avenue de la place', '80000', 'abbeville', '["ROLE_2"]', 0),
	(3, 'michel@service.com', '$2y$13$bWiaY7mrxYDpUMlkOixe6.WGJTI7ovD0uvd.LV.v1QvJyt0dUPK8u', 'michel', 'aaaa', '010203040506', '33 rue citron', '80000', 'amiens', '[]', 0),
	(4, 'john@service.com', '$2y$13$vdYv8aVmkG5Yc51/MC7Dnev4c0fah7d2DJ5yABJNeaLpXiplGQF5C', 'john', 'doe', '12345678', '44 rue citron', '80000', 'amiens', '[]', 0),
	(5, 'Chris80@service.fr', '123456', 'Chamb', 'Chris', '0611111111', '38 rue jean biloute', '80310', 'Picquigny', '["ROLE_USER","ROLE_ADMIN"]', 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
