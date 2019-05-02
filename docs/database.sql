CREATE TABLE `categorie` (
  `id_categorie` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(50),
  `description` TEXT,
  `img` VARCHAR(50)
);

CREATE TABLE `vente` (
  `id_vente` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `id_item` INT REFERENCES item(id_item),
  `id_acheteur` INT REFERENCES acheteur(id_acheteur),
  `id_livraison` INT REFERENCES livraison(id_livraison),
  `id_paiement` INT REFERENCES livraison(id_livraison),
  `quantite` INT DEFAULT 1,
  `date_paiement` DATE,
  `date_expedition` DATE
);

CREATE TABLE `type_promo` (
  `id_type_promo` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(50),
  `date_debut` DATE,
  `date_fin` DATE
);

CREATE TABLE `item` (
  `id_item` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(50),
  `photos` VARCHAR(50),
  `description` TEXT,
  `video` VARCHAR(50) DEFAULT NULL,
  `pu` INT DEFAULT 0,
  `variations` VARCHAR(50),
  `stock` INT DEFAULT 0,
  `id_categorie` INT REFERENCES categorie(id_categorie),
  `id_vendeur` INT REFERENCES vendeur(id_vendeur)
);

CREATE TABLE `flash` (
  `id_item` INT PRIMARY KEY NOT NULL,
  `promo` VARCHAR(50)
);

CREATE TABLE `type_cb` (
  `id_type_cb` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(50),
  `img` VARCHAR(50)
);

CREATE TABLE `vendeur` (
  `id_utilisateur` INT PRIMARY KEY NOT NULL,
  `pseudo` VARCHAR(50),
  `id_img_fond` INT REFERENCES img_fond(id_img_fond),
  `photo` VARCHAR(50)
);

CREATE TABLE `img_fond` (
  `id_img_fond` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(50),
  `img` VARCHAR(50)
);

CREATE TABLE `code_promo` (
  `id_code_promo` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `code` VARCHAR(10),
  `promo` VARCHAR(50)
);

CREATE TABLE `acheteur` (
  `id_utilisateur` INT PRIMARY KEY NOT NULL REFERENCES utilisateur(id_utilisateur),
  `id_paiement` INT REFERENCES paiement(id_paiement),
  `id_livraison` INT REFERENCES livraison(id_livraison)
);

CREATE TABLE `administrateur` (
  `id_utilisateur` INT PRIMARY KEY NOT NULL REFERENCES utilisateur(id_utilisateur)
);

CREATE TABLE `utilisateur` (
  `id_utilisateur` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(50),
  `prénom` VARCHAR(50),
  `mail` VARCHAR(50),
  `mdp` VARCHAR(50)
);

CREATE TABLE `paiement` (
  `id_paiement` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `id_type_cb` INT REFERENCES type_cb(id_type_cb),
  `nom` VARCHAR(50),
  `date_expiration` DATE,
  `cle` VARCHAR(3),
  `id_acheteur` INT REFERENCES acheteur(id_utilisateur)
);

CREATE TABLE `promo` (
  `id_item` INT PRIMARY KEY NOT NULL,
  `promo` VARCHAR(50),
  `id_type_promo` INT REFERENCES type_promo(id_type_promo)
);

CREATE TABLE `livraison` (
  `id_livraison` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(50),
  `prenom` VARCHAR(50),
  `adresse_1` VARCHAR(50),
  `adresse_2` VARCHAR(50),
  `ville` VARCHAR(50),
  `cp` VARCHAR(50),
  `pays` VARCHAR(50),
  `tel` VARCHAR(50),
  `id_acheteur` INT REFERENCES acheteur(id_utilisateur)
);

