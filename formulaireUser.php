<?php
include 'mesFunctionsSQL.php';
include 'afficherUser.php';

$id = $_GET["id"];
if ($id == 0) {
	$user = getNewUser();
	$action = "CREATE";
	$libelle = "Creer";
} else {
	$user = readUser($id);
	$action = "UPDATE";
	$libelle = "Mettre a jour";
}



$nomErr =  "";

$nom = "";

if (isset($_POST['envoi'])) {

	if (empty($_POST["nom"])) {

		$nomErr = "Please enter a valid nom";
	} else {

		$nom = test_input($_POST["nom"]);

		// check if nom only contains letters and whitespace

		if (!preg_match("/^[a-zA-Z-' ]*$/", $nom)) {

			$nomErr = "Only letters and white space allowed";
		}
	}


	function test_input($data)
	{

		$data = trim($data);

		$data = stripslashes($data);

		$data = htmlspecialchars($data);

		var_dump($data);
		return $data;
	}
}


?>

<html>
<header>
	<link rel="stylesheet" href="style.css">
</header>

<body>
	<form action="createUpdateDeleteUser.php" method="post">
		<p>
			<a href="index.php">Liste des utilisateurs</a>

			<input type="hidden" name="id" value="<?php echo $user['id'];  ?>" />
			<input type="hidden" name="action" value="<?php echo $action;  ?>" />
		<div>
			<label for="name">Nom :</label>
			<input type="text" id="nom" name="nom" value="<?php echo $user['nom']; ?>">
			<span class="error">* <?php echo $nomErr; ?></span>

		</div>
		<div>
			<label for="prenom">Prenom</label>
			<input type="text" id="prenom" name="prenom" value="<?php echo $user['prenom'];  ?>" required>
		</div>
		<div>
			<label for="age">Age:</label>
			<input type="text" id="age" name="age" value="<?php echo $user['age'];  ?>" required>
		</div>
		<div>
			<label for="adresse">adresse :</label>
			<input id="adresse" name="adresse" value="<?php echo $user['adresse'];  ?>" required></input>
		</div>
		<div>
			<label for="cinema">cinema :</label>
			<input type="checkbox" id="cinema" name="cinema" <?php if ($user['cinema'] == 1) $user['cinema'] = "checked";
																echo $user['cinema'] ?>>
		</div>
		<div class="button">
			<button type="submit" name="envoi"><?php echo $libelle;  ?></button>
		</div>
		</p>
	</form>

	<?php

	echo "<h2> Final Output:</h2>";

	echo $nom;

	?>
	<br>

	<?php if ($action != "CREATE") { ?>
		<form action="createUpdateDeleteUser.php" method="post">
			<input type="hidden" name="action" value="DELETE" />
			<input type="hidden" name="id" value="<?php echo $user['id'];  ?>" />
			<p>
			<div class="button">
				<button type="submit">Supprimer</button>
			</div>
			</p>
		</form>
	<?php } ?>

</body>

</html>