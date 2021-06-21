-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 25 Mai 2018 à 13:57
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tuto_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs`
(
  `id` int
(11) NOT NULL,
  `nom` varchar
(128) NOT NULL,
  `prenom` varchar
(128) NOT NULL,
  `age` int
(11) NOT NULL,
  `adresse` varchar
(255) NOT NULL,
  `cinema` tinyint
(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
ADD PRIMARY KEY
(`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `age`, `adresse`, `cinema`) VALUES ('1', 'asd', 'asd', '22', '23sdasdsadsa', '0');



-- -----------------------------------------------------
-- Table `tuto_php`.`psi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tuto_php`.`psi` (
  `idPsi` INT NOT NULL AUTO_INCREMENT,
  `nomADB` VARCHAR(256) NULL,
  `coordonnateur` VARCHAR(256) NULL,
  `telJour` VARCHAR(128) NULL,
  `telSoir` VARCHAR(128) NULL,
  `nomADP` VARCHAR(128) NULL,
  `responsable` VARCHAR(128) NULL,
  `tel` VARCHAR(128) NULL,
  `courriel` VARCHAR(128) NULL,
  `principale` VARCHAR(128) NULL,
  `autre` VARCHAR(128) NULL,
  `nombreDeSousSol` VARCHAR(128) NULL,
  `NombreDetage` VARCHAR(128) NULL,
  `nombreDappentis` VARCHAR(128) NULL,
  `nombreDeGrenier` VARCHAR(128) NULL,
  `ascenseurNombre` VARCHAR(128) NULL,
  `monteChargeNombre` VARCHAR(128) NULL,
  `communicationDansAscendeur` VARCHAR(128) NULL,
  `rappelAutomatique` TINYINT(1) NULL,
  `rappelManuel` TINYINT(1) NULL,
  `ascenseurPompier` VARCHAR(128) NULL,
  `nombreDeCageDescalierDeSecours` VARCHAR(128) NULL,
  `nbreDappartements` VARCHAR(128) NULL,
  `pJour` VARCHAR(128) NULL,
  `pSoir` VARCHAR(128) NULL,
  `pNuit` VARCHAR(128) NULL,
  `pFDS` VARCHAR(128) NULL,
  `oJour` VARCHAR(128) NULL,
  `oSoir` VARCHAR(128) NULL,
  `oNuit` VARCHAR(128) NULL,
  `oFDS` VARCHAR(128) NULL,
  `rJour` VARCHAR(128) NULL,
  `rSoir` VARCHAR(128) NULL,
  `rNuit` VARCHAR(128) NULL,
  `rFDS` VARCHAR(128) NULL,
  `paba` VARCHAR(128) NULL,
  `cinema` VARCHAR(128) NULL,
  `bars` VARCHAR(128) NULL,
  `ecole` VARCHAR(128) NULL,
  `expositions` VARCHAR(128) NULL,
  `restaurants` VARCHAR(128) NULL,
  `prison` VARCHAR(128) NULL,
  `hopital` VARCHAR(128) NULL,
  `clinique` VARCHAR(128) NULL,
  `chsld` VARCHAR(128) NULL,
  `appartements` VARCHAR(128) NULL,
  `hotel` VARCHAR(128) NULL,
  `accueil` VARCHAR(128) NULL,
  `hebergements` VARCHAR(128) NULL,
  `bureaux` VARCHAR(128) NULL,
  `cabinets` VARCHAR(128) NULL,
  `magasins` VARCHAR(128) NULL,
  `detaillants` VARCHAR(128) NULL,
  `commerce` VARCHAR(128) NULL,
  `ateliers` VARCHAR(128) NULL,
  `entrepot` VARCHAR(128) NULL,
  `usine` VARCHAR(128) NULL,
  `stationnement` VARCHAR(128) NULL,
  `specifiez` VARCHAR(128) NULL,
  `sai` TINYINT(1) NULL,
  `saiMarque` VARCHAR(128) NULL,
  `adressable` TINYINT(1) NULL,
  `zoneX` TINYINT(1) NULL,
  `unEtape` TINYINT(1) NULL,
  `deuxetape` TINYINT(1) NULL,
  `etp` TINYINT(1) NULL,
  `periode` TINYINT(1) NULL,
  `pheure` VARCHAR(128) NULL,
  `panneauS` VARCHAR(128) NULL,
  `annonciateur` TINYINT(1) NULL,
  `textannonciateur` VARCHAR(128) NULL,
  `rac` TINYINT(1) NULL,
  `racNomTel` VARCHAR(45) NULL,
  `scu` TINYINT(1) NULL,
  `scuMarque` VARCHAR(128) NULL,
  `rda` TINYINT(1) NULL,
  `adv` TINYINT(1) NULL,
  `pressE` TINYINT(1) NULL,
  `dea` TINYINT(1) NULL,
  `rdrm` TINYINT(1) NULL,
  `tac` TINYINT(1) NULL,
  `aaag` TINYINT(1) NULL,
  `autreS` VARCHAR(128) NULL,
  `sdga` TINYINT(1) NULL,
  `eau` TINYINT(1) NULL,
  `air` TINYINT(1) NULL,
  `dssogs` TINYINT(1) NULL,
  `dtlb` TINYINT(1) NULL,
  `pompeAfeu` TINYINT(1) NULL,
  `pafeu` VARCHAR(128) NULL,
  `ralg` TINYINT(1) NULL,
  `vds` TINYINT(1) NULL,
  `cageE` TINYINT(1) NULL,
  `autreShuitdeux` TINYINT(1) NULL,
  `autreShuit` VARCHAR(128) NULL,
  `bid` TINYINT(1) NULL,
  `raccordP` TINYINT(1) NULL,
  `raccord` VARCHAR(128) NULL,
  `extincteursp` TINYINT(1) NULL,
  `typeE` VARCHAR(128) NULL,
  `sep` TINYINT(1) NULL,
  `efixe` TINYINT(1) NULL,
  `efixetext` VARCHAR(128) NULL,
  `relieUn` TINYINT(1) NULL,
  `eGaz` TINYINT(1) NULL,
  `eGazText` VARCHAR(128) NULL,
  `reliedeux` TINYINT(1) NULL,
  `preaction` TINYINT(1) NULL,
  `delugue` VARCHAR(128) NULL,
  `delugueText` VARCHAR(128) NULL,
  `relietrois` TINYINT(1) NULL,
  `autresectionhuit` TINYINT(1) NULL,
  `autersHuitText` VARCHAR(128) NULL,
  `reliequatre` TINYINT(1) NULL,
  `vpea` TINYINT(1) NULL,
  `panneauA` TINYINT(1) NULL,
  `StationM` TINYINT(1) NULL,
  `detecteurD` TINYINT(1) NULL,
  `barreP` TINYINT(1) NULL,
  `BoutonP` TINYINT(1) NULL,
  `cle` TINYINT(1) NULL,
  `autresneuf` TINYINT(1) NULL,
  `autreneufText` VARCHAR(128) NULL,
  `retenueM` TINYINT(1) NULL,
  `rideau` TINYINT(1) NULL,
  `Systemed` TINYINT(1) NULL,
  `parPA` TINYINT(1) NULL,
  `controle` TINYINT(1) NULL,
  `controlText` VARCHAR(128) NULL,
  `spe` TINYINT(1) NULL,
  `sss` TINYINT(1) NULL,
  `toutb` TINYINT(1) NULL,
  `sdcc` TINYINT(1) NULL,
  `sdccText` VARCHAR(128) NULL,
  `sas` TINYINT(1) NULL,
  `sasText` VARCHAR(128) NULL,
  PRIMARY KEY (`idPsi`))
ENGINE = InnoDB;
