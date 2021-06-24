<?php
include 'mesFunctionsSQL.php';
include 'afficherUser.php';
//recupération des données du form
// quel type d'action sera choisi
$action = $_POST["action"];


if ($action == "DELETE") {
	$id = $_POST["id"];
} else {
	$id = $_POST["id"];
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$age = $_POST["age"];
	$adresse = $_POST["adresse"];
	if (isset($_POST["cinema"]) == NULL) {
		$cinema = 0;
	} else {
		$cinema = 1;
	}	
}



if ($action == "CREATE") {
	validate_fields();

	createUser($nom, $prenom, $age, $adresse, $cinema);
	header("location:mainPageUser.php?message=User Created Successfully...!");
	exit;
}

if ($action == "UPDATE") {
	validate_fields();

	updateUser($id, $nom, $prenom, $age, $adresse, $cinema);
	header("location:mainPageUser.php?message=User Updated Successfully...!");
	exit;
}
if ($action == "DELETE") {
	deleteUser($id);
	header("location:mainPageUser.php?message=User Deleted Successfully...!");
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
	// validation du champ nom si il est vide
	if (empty($_POST["nom"])) {
		$flag = true;
		$erreurs['nomErr'] = "Please enter a valid nom";
	}
	// validation du champ nom si conforme au preg_match
	if (!empty($_POST["nom"]) && !preg_match('/^[a-zA-Z-\s]+$/', $_POST['nom'])) {
		$flag = true;
		$erreurs['nomErr'] = "Only letters and white space allowed";
	}
	// validation du champ prenom si il est vide
	if (empty($_POST["prenom"])) {
		$flag = true;
		$erreurs['prenomErr'] = "Please enter a valid nom";
	}
	// validation du champ prenom si conforme au preg_match
	if (!empty($_POST["prenom"]) && !preg_match('/^[a-zA-Z-\s]+$/', $_POST['prenom'])) {
		$flag = true;
		$erreurs['prenomErr'] = "Only letters and white space allowed";
	}

	// validation du champ age si il est vide
	if (empty($_POST["age"])) {
		$flag = true;
		$erreurs['ageErr'] = "Please enter a valid age";
	}
	// validation du champ age si conforme au preg_match
	if (!empty($_POST["age"]) && !preg_match('/^[1-9][0-9]*$/', $_POST['age'])) {
		$flag = true;
		$erreurs['ageErr'] = "Only number allowed";
	}

	// validation du champ age si il est vide
	if (empty($_POST["adresse"])) {
		$flag = true;
		$erreurs['adresseErr'] = "Please enter a valid adresse";
	}
	// validation du champ adresse si conforme au preg_match
	if (!empty($_POST["adresse"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['adresse'])) {
		$flag = true;
		$erreurs['adresseErr'] = "Only number allowed";
	}
	//si un des champ est egale a true retour une erreur dans le champ.
	if ($flag == true) {

		header("location:formulaireUser.php?&id=$id&erreurs=" . json_encode($erreurs));
		exit;
	}
}
