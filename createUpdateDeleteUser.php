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
	createUser($nom, $prenom, $age, $adresse, $cinema);
	echo "Utilisateur créer <br>";
	echo "<a href='index.php'>Liste des utilisateurs</a>";
}

if ($action == "UPDATE") {
	updateUser($id, $nom, $prenom, $age, $adresse, $cinema);
	echo "user update <br>";
	echo "<a href='index.php'>Liste des utilisateurs</a>";
}
if ($action == "DELETE") {
	deleteUser($id);
	echo "user delete <br>";
	echo "<a href='index.php'>Liste des utilisateurs</a>";
}
