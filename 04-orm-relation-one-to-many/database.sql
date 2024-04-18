CREATE TABLE `personne` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `categ_id` int
)ENGINE=InnoDB;

CREATE TABLE `categ` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL
)ENGINE=InnoDB;

ALTER TABLE `personne` ADD FOREIGN KEY (`categ_id`) REFERENCES `categ` (`id`);
