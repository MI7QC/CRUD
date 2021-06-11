<?php
include 'mesFunctionsSQL.php';
include 'afficherUser.php';
$action = $_POST["action"];

var_dump($action);



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

	// echo "Utilisateur créer <br>";
	// echo "<a href='index.php'>Liste des utilisateurs</a>";
}

if ($action == "UPDATE") {
	validate_fields();
	updateUser($id, $nom, $prenom, $age, $adresse, $cinema);
	header("location:mainPageUser.php?message=User Updated Successfully...!");

	// echo "user update <br>";
	// echo "<a href='index.php'>Liste des utilisateurs</a>";
}
if ($action == "DELETE") {
	deleteUser($id);
	header("location:mainPageUser.php?message=User Deleted Successfully...!");

	// echo "user delete <br>";
	// echo "<a href='index.php'>Liste des utilisateurs</a>";
}

function validate_fields()
{
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
	} else {
		$id = 0;
	}
	if (empty($_POST["nom"])) {
		$nomErr = "Please enter a valid nom";
		header("location:formulaireUser.php?nomErr=$nomErr&$id");
		exit;
	} elseif (!empty($_POST["nom"]) && !preg_match('/^[a-zA-Z\s]+$/', $_POST['nom'])) {
		$nomErr = "Only letters and white space allowed";
		header("location:formulaireUser.php?nomErr=$nomErr&id");
		exit;
	}
}
