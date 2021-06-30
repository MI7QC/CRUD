





-- MySQL Script generated by MySQL Workbench
-- Tue Jun 22 17:46:17 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema tuto_php
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema tuto_php
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `tuto_php` DEFAULT CHARACTER SET utf8 ;
USE `tuto_php` ;

-- -----------------------------------------------------
-- Table `tuto_php`.`utilisateurs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tuto_php`.`utilisateurs` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(128) NOT NULL,
  `prenom` VARCHAR(128) NOT NULL,
  `age` VARCHAR(128) NOT NULL,
  `adresse` VARCHAR(256) NOT NULL,
  `cinema` TINYINT(1) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


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
  `uea` TINYINT(1) NULL,
  `udl` TINYINT(1) NULL,
  `generatrice` TINYINT(1) NULL,
  `modele` VARCHAR(128) NULL,
  `amp` VARCHAR(128) NULL,
  `exteroeir` TINYINT(1) NULL,
  `surtoit` TINYINT(1) NULL,
  `interieur` TINYINT(1) NULL,
  `interieurText` VARCHAR(128) NULL,
  `diesel` TINYINT(1) NULL,
  `gazn` TINYINT(1) NULL,
  `essence` TINYINT(1) NULL,
  `Propane` TINYINT(1) NULL,
  `gaznaturel` TINYINT(1) NULL,
  `gazp` TINYINT(1) NULL,
  `autrereservoir` TINYINT(1) NULL,
  `autrereservoirtext` VARCHAR(128) NULL,
  `planetage` TINYINT(1) NULL,
  `autreinfo` VARCHAR(512) NULL,
  `paneauAlarmeP` TINYINT(1) NULL,
  `ExterieurP` TINYINT(1) NULL,
  `interieurP` TINYINT(1) NULL,
  `boutonsilenceP` TINYINT(1) NULL,
  `remiseP` TINYINT(1) NULL,
  `accusedeP` TINYINT(1) NULL,
  `PanneauP` TINYINT(1) NULL,
  `microP` TINYINT(1) NULL,
  `teleP` TINYINT(1) NULL,
  `zones` TINYINT(1) NULL,
  `systemeP` TINYINT(1) NULL,
  `vueP` TINYINT(1) NULL,
  `chaqueP` TINYINT(1) NULL,
  `vanneP` TINYINT(1) NULL,
  `vannedeP` TINYINT(1) NULL,
  `interrupteurP` TINYINT(1) NULL,
  `vanneetP` TINYINT(1) NULL,
  `pompeaP` TINYINT(1) NULL,
  `vuedP` TINYINT(1) NULL,
  `panneaudecP` TINYINT(1) NULL,
  `boutonetP` TINYINT(1) NULL,
  `systemesP` TINYINT(1) NULL,
  `bonbonneP` TINYINT(1) NULL,
  `declencheurP` TINYINT(1) NULL,
  `preactionP` TINYINT(1) NULL,
  `exterieurPhoto` TINYINT(1) NULL,
  `interieurPhoto` TINYINT(1) NULL,
  `generatriceP` TINYINT(1) NULL,
  `vuePhoto` TINYINT(1) NULL,
  `panneaudeP` TINYINT(1) NULL,
  `boutonarretP` TINYINT(1) NULL,
  `ups` TINYINT(1) NULL,
  `ascenseursP` TINYINT(1) NULL,
  `panneaurappelP` TINYINT(1) NULL,
  `boutonrappel` TINYINT(1) NULL,
  `panneauintP` TINYINT(1) NULL,
  `systemeappelP` TINYINT(1) NULL,
  `desenfumageP` TINYINT(1) NULL,
  `PanneaucontroleP` TINYINT(1) NULL,
  PRIMARY KEY (`idPsi`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;