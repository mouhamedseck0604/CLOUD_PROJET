-- ============================================================
-- Script SQL : Création de la base de données et de la table
-- Projet    : Gestion de Produits
-- Base      : gestion_produits
-- Table     : produits
-- ============================================================

-- Création de la base de données (si elle n'existe pas déjà)
CREATE DATABASE IF NOT EXISTS `gestion_prod`
  DEFAULT CHARACTER SET utf8mb4
  DEFAULT COLLATE utf8mb4_general_ci;

-- Sélection de la base
USE `gestion_prod`;

-- Suppression de la table si elle existe déjà (pour éviter les conflits)
DROP TABLE IF EXISTS `produits`;

-- Création de la table `produits`
CREATE TABLE `produits` (
  `id`         INT             NOT NULL AUTO_INCREMENT,
  `designtion` VARCHAR(255)    NOT NULL,
  `quantite`   INT             NOT NULL,
  `prix`       DECIMAL(10, 2)  NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ============================================================
-- Insertion de quelques exemples de produits
-- ============================================================
INSERT INTO `produits` (`designtion`, `quantite`, `prix`) VALUES
  ('Ordinateur portable HP',   10,  899.99),
  ('Souris sans fil Logitech', 50,   29.99),
  ('Clavier mécanique RGB',    30,   79.99),
  ('Écran 24 pouces Full HD',  15,  199.99),
  ('Casque audio Bluetooth',   25,   49.99);

