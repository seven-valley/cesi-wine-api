# Création de la database
```
CREATE DATABASE wine_api CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE wine_api;

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `annee` year NOT NULL,
  `prix` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `produit` (`id`, `nom`, `annee`, `prix`) VALUES
(1, 'test vin 2', 2000, 1200.99),
(2, 'A.O.P MÉDOC CRU BOURGEOIS', 2018, 13.99),
(3, 'toto', 0000, 0),
(6, 'test vin 2', 2000, 1200.99);

````