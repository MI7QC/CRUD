<?php

function getDatabaseConnexion()
{
	try {
		$user = "root";
		$pass = "";
		$pdo = new PDO('mysql:host=localhost;dbname=tuto_php', $user, $pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	} catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
}


// récupere tous les users
function getAllPSI()
{
	$con = getDatabaseConnexion();
	$requete = 'SELECT * from psi';
	$rows = $con->query($requete);
	return $rows;
}

// creer un user
function createUser($nomADB, $coordonnateur, $telJour, $telSoir, $nomADP, $responsable, $tel, $courriel,
$principale, $autre, $nombreDeSousSol, $NombreDetage, $nombreDappentis, $nombreDeGrenier, $ascenseurNombre, $monteChargeNombre,
$communicationDansAscendeur, $rappelAutomatique, $rappelManuel, $ascenseurPompier, $nombreDeCageDescalierDeSecours)
{
	try {
		$con = getDatabaseConnexion();
		$sql = "INSERT INTO psi (nomADB, coordonnateur, telJour, telSoir, nomADP, responsable, tel, courriel,
		principale,autre,nombreDeSousSol,NombreDetage,nombreDappentis,nombreDeGrenier,ascenseurNombre,monteChargeNombre,communicationDansAscendeur,rappelAutomatique,rappelManuel,ascenseurPompier,nombreDeCageDescalierDeSecours) 
					VALUES ('$nomADB', '$coordonnateur', '$telJour' ,'$telSoir','$nomADP','$responsable','$tel','$courriel',
					'$principale','$autre','$nombreDeSousSol','$NombreDetage','$nombreDappentis','$nombreDeGrenier','$ascenseurNombre','$monteChargeNombre','$communicationDansAscendeur','$rappelAutomatique','$rappelManuel','$ascenseurPompier','$nombreDeCageDescalierDeSecours')";
		$con->exec($sql);
	} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
}

//recupere un user
function readUser($id)
{
	$con = getDatabaseConnexion();
	$requete = "SELECT * from psi where idPsi = '$id' ";
	$stmt = $con->query($requete);
	$row = $stmt->fetchAll();
	if (!empty($row)) {
		return $row[0];
	}
}

//met à jour le user
function updateUser($id, $nomADB, $coordonnateur, $telJour, $telSoir, $nomADP, $responsable, $tel, $courriel,
$principale, $autre, $nombreDeSousSol, $NombreDetage, $nombreDappentis, $nombreDeGrenier, $ascenseurNombre, $monteChargeNombre, $communicationDansAscendeur, $rappelAutomatique, $rappelManuel, $ascenseurPompier, $nombreDeCageDescalierDeSecours)
{
	try {
		$con = getDatabaseConnexion();
		$requete = "UPDATE psi set 
						nomADB = '$nomADB',
						coordonnateur = '$coordonnateur',
						telJour = '$telJour',
						telSoir = '$telSoir', 
						nomADP = '$nomADP', 
						responsable = '$responsable', 
						tel = '$tel', 
						courriel = '$courriel',
						principale = '$principale',
						autre = '$autre',
						nombreDeSousSol = '$nombreDeSousSol',
						NombreDetage = '$NombreDetage',
						nombreDappentis = '$nombreDappentis',
						nombreDeGrenier = '$nombreDeGrenier',
						ascenseurNombre = '$ascenseurNombre',
						monteChargeNombre = '$monteChargeNombre',
						communicationDansAscendeur = '$communicationDansAscendeur',
						rappelAutomatique = '$rappelAutomatique',
						rappelManuel = '$rappelManuel',
						ascenseurPompier = '$ascenseurPompier',
						nombreDeCageDescalierDeSecours = '$nombreDeCageDescalierDeSecours'
						where idPsi = '$id' ";
		$stmt = $con->query($requete);
	} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
}

// suprime un user
function deleteUser($id)
{
	try {
		$con = getDatabaseConnexion();
		$requete = "DELETE from psi where idPsi = '$id' ";
		$stmt = $con->query($requete);
	} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
}

function getNewUser()
{
	$psi["idPSI"] = "";
	$psi["nomADB"] = "";
	$psi["nomBatiment"] = "";
	$psi["coordonnateur"] = "";
	$psi["cellJour"] = "";
	$psi["cellSoir"] = "";
	$psi["nomADP"] = "";
	$psi["responsable"] = "";
	$psi["cellADP"] = "";
	$psi["courriel"] = "";
}
