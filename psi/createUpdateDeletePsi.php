<?php
include 'mesFunctionsSQL.php';
include 'afficherUser.php';
$action = $_POST["action"];


if ($action == "DELETE") {
	$id = $_POST["id"];
} else {
	$id = $_POST["id"];
	$nomADB = $_POST["nomADB"];
	$coordonnateur = $_POST["coordonnateur"];
	$telJour = $_POST["telJour"];
	$telSoir = $_POST["telSoir"];
	$nomADP = $_POST["nomADP"];
	$responsable = $_POST["responsable"];
	$tel = $_POST["tel"];
	$courriel = $_POST["courriel"];

	$principale = $_POST["principale"];
	$autre = $_POST["autre"];
	$nombreDeSousSol = $_POST["nombreDeSousSol"];
	$NombreDetage = $_POST["NombreDetage"];
	$nombreDappentis = $_POST["nombreDappentis"];
	$nombreDeGrenier = $_POST["nombreDeGrenier"];
	$ascenseurNombre = $_POST["ascenseurNombre"];
	$monteChargeNombre = $_POST["monteChargeNombre"];
	$communicationDansAscendeur = $_POST["communicationDansAscendeur"];
	if (isset($_POST["rappelAutomatique"]) == NULL) { $rappelAutomatique = 0; } else { $rappelAutomatique = 1;};
	if (isset($_POST["rappelManuel"]) == NULL) { $rappelManuel = 0; } else { $rappelManuel = 1;};
	$ascenseurPompier = $_POST["ascenseurPompier"];
	$nombreDeCageDescalierDeSecours = $_POST["nombreDeCageDescalierDeSecours"];
}



if ($action == "CREATE") {
	validate_fields();

	createUser($nomADB, $coordonnateur, $telJour, $telSoir, $nomADP, $responsable, $tel, $courriel,
	$principale, $autre, $nombreDeSousSol, $NombreDetage, $nombreDappentis, $nombreDeGrenier, $ascenseurNombre, $monteChargeNombre,
	$communicationDansAscendeur, $rappelAutomatique, $rappelManuel, $ascenseurPompier, $nombreDeCageDescalierDeSecours);
	header("location:listPSI.php?message=User Created Successfully...!");
	exit;
}

if ($action == "UPDATE") {
	validate_fields();

	updateUser($id, $nomADB, $coordonnateur, $telJour, $telSoir, $nomADP, $responsable, $tel, $courriel,
 	 $principale, $autre, $nombreDeSousSol, $NombreDetage, $nombreDappentis, $nombreDeGrenier, $ascenseurNombre, $monteChargeNombre, $communicationDansAscendeur, $rappelAutomatique, $rappelManuel, $ascenseurPompier, $nombreDeCageDescalierDeSecours);
	header("location:listPSI.php?message=User Updated Successfully...!");
	exit;
}
if ($action == "DELETE") {
	deleteUser($id);
	header("location:listPSI.php?message=User Deleted Successfully...!");
}


//Validation des champs du formulaire de la page formulaireUser.php
function validate_fields()
{

	$erreurs = array();
	$flag = false;
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
	} else {
		$id = 0;
	}
	// // validation du champ nomADB si il est vide
	// if (empty($_POST["nomADB"])) {
	// 	$flag = true;
	// 	$erreurs['nomADBErr'] = "Please enter a valid Nom & Adresse Du Bâtiment";
	// }
	// validation du champ nomADB si conforme au preg_match
	if (!empty($_POST["nomADB"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['nomADB'])) {
		$flag = true;
		$erreurs['nomADBErr'] = "Only letters, Numbers and white space allowed";
	}


	// validation du champ coordonnateur si conforme au preg_match
	if (!empty($_POST["coordonnateur"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['coordonnateur'])) {
		$flag = true;
		$erreurs['coordonnateurErr'] = "Only letters, Numbers and white space allowed";
	}


	// validation du champ telJour si conforme au preg_match
	if (!empty($_POST["telJour"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['telJour'])) {
		$flag = true;
		$erreurs['telJourErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ telJour si conforme au preg_match
	if (!empty($_POST["telSoir"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['telSoir'])) {
		$flag = true;
		$erreurs['telSoirErr'] = "Only letters, Numbers and white space allowed";
	}


	// validation du champ nomADP si conforme au preg_match
	if (!empty($_POST["nomADP"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['nomADP'])) {
		$flag = true;
		$erreurs['nomADPErr'] = "Only letters, Numbers and white space allowed";
	}

	
	// validation du champ responsable si conforme au preg_match
	if (!empty($_POST["responsable"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['responsable'])) {
		$flag = true;
		$erreurs['responsableErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ tel si conforme au preg_match
	if (!empty($_POST["tel"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['tel'])) {
		$flag = true;
		$erreurs['telErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ courriel si conforme au preg_match
	if (!empty($_POST["courriel"]) && !preg_match('/\S+@\S+\.\S+/', $_POST['courriel'])) {
		$flag = true;
		$erreurs['courrielErr'] = "enter a valid email";
	}


	// validation du champ principale si conforme au preg_match
	if (!empty($_POST["principale"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['principale'])) {
		$flag = true;
		$erreurs['principaleErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ autre si conforme au preg_match
	if (!empty($_POST["autre"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['autre'])) {
		$flag = true;
		$erreurs['autreErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ nombreDeSousSol si conforme au preg_match
	if (!empty($_POST["nombreDeSousSol"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['nombreDeSousSol'])) {
		$flag = true;
		$erreurs['nombreDeSousSolErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ NombreDetage si conforme au preg_match
	if (!empty($_POST["NombreDetage"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['NombreDetage'])) {
		$flag = true;
		$erreurs['NombreDetageErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ nombreDappentis si conforme au preg_match
	if (!empty($_POST["nombreDappentis"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['nombreDappentis'])) {
		$flag = true;
		$erreurs['nombreDappentisErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ nombreDeGrenier si conforme au preg_match
	if (!empty($_POST["nombreDeGrenier"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['nombreDeGrenier'])) {
		$flag = true;
		$erreurs['nombreDeGrenierErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ ascenseurNombre si conforme au preg_match
	if (!empty($_POST["ascenseurNombre"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['ascenseurNombre'])) {
		$flag = true;
		$erreurs['ascenseurNombreErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ monteChargeNombre si conforme au preg_match
	if (!empty($_POST["monteChargeNombre"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['monteChargeNombre'])) {
		$flag = true;
		$erreurs['monteChargeNombreErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ communicationDansAscendeur si conforme au preg_match
	if (!empty($_POST["communicationDansAscendeur"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['communicationDansAscendeur'])) {
		$flag = true;
		$erreurs['communicationDansAscendeurErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ rappelAutomatique si conforme au preg_match
	if (!empty($_POST["rappelAutomatique"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['rappelAutomatique'])) {
		$flag = true;
		$erreurs['rappelAutomatiqueErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ rappelManuel si conforme au preg_match
	if (!empty($_POST["rappelManuel"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['rappelManuel'])) {
		$flag = true;
		$erreurs['rappelManuelErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ ascenseurPompier si conforme au preg_match
	if (!empty($_POST["ascenseurPompier"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['ascenseurPompier'])) {
		$flag = true;
		$erreurs['ascenseurPompierErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ nombreDeCageDescalierDeSecours si conforme au preg_match
	if (!empty($_POST["nombreDeCageDescalierDeSecours"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['nombreDeCageDescalierDeSecours'])) {
		$flag = true;
		$erreurs['nombreDeCageDescalierDeSecoursErr'] = "Only letters, Numbers and white space allowed";
	}


	if ($flag == true) {

		header("location:formulairePsi.php?&id=$id&erreurs=" . json_encode($erreurs));
		exit;
	}
}
