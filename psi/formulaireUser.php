<?php
include 'mesFunctionsSQL.php';
include 'afficherUser.php';

$id = $_GET["id"];
if ($id == 0) {
	$psi = getNewUser();
	$action = "CREATE";
	$libelle = "Creer";
} else {
	$psi = readUser($id);
	$action = "UPDATE";
	$libelle = "Mettre a jour";
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

			<input type="hidden" name="id" value="<?php echo $psi['idPSI'];  ?>" />
			<input type="hidden" name="action" value="<?php echo $action;  ?>" />
		<div>
			<label for="nomADB">Nom du Batiment :</label>
			<input type="text" id="nomADB" name="nomADB" value="<?php echo $psi['nomADB']; ?>">
		</div>
		<div>
			<label for="nomBatiment">Adresse du Batiment</label>
			<input type="text" id="nomBatiment" name="nomBatiment" value="<?php echo $psi['nomBatiment'];  ?>" required>
		</div>
		<div>
			<label for="coordonnateur">Coordonnateur:</label>
			<input type="text" id="coordonnateur" name="coordonnateur" value="<?php echo $psi['coordonnateur'];  ?>" required>
		</div>
		<div>
			<label for="adresse">adresse :</label>
			<input id="adresse" name="adresse" value="<?php echo $psi['adresse'];  ?>" required></input>
		</div>

		<div class="button">
			<button type="submit" name="envoi"><?php echo $libelle;  ?></button>
		</div>
		</p>
	</form>

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