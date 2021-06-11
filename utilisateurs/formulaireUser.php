<?php
include 'mesFunctionsSQL.php';
include 'afficherUser.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id == 0) {
	$user = getNewUser();
	$action = "CREATE";
	$libelle = "Creer";
} else {
	$user = readUser($id);
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
			<a href="mainPageUser.php">Liste des utilisateurs</a>

			<input type="hidden" name="id" value="<?php if (isset($user['id'])) {
														echo $user['id'];
													} ?>" />
			<input type="hidden" name="action" value="<?php echo $action;  ?>" />
		<div>
			<label for="name">Nom :</label>
			<input type="text" id="nom" name="nom" value="<?php if (isset($user['nom'])) {
																echo $user['nom'];
															} ?>">
			<span class="error">* <?php if (isset($_GET['nomErr'])) {
										echo $_GET['nomErr'];
									}  ?></span>

		</div>
		<div>
			<label for="prenom">Prenom</label>
			<input type="text" id="prenom" name="prenom" value="<?php if (isset($user['prenom'])) {
																	echo $user['prenom'];
																} ?>" required>
		</div>
		<div>
			<label for="age">Age:</label>
			<input type="text" id="age" name="age" value="<?php if (isset($user['age'])) {
																echo $user['age'];
															} ?>" required>
		</div>
		<div>
			<label for="adresse">adresse :</label>
			<input id="adresse" name="adresse" value="<?php if (isset($user['adresse'])) {
															echo $user['adresse'];
														} ?>" required></input>
		</div>
		<div>
			<label for="cinema">cinema :</label>
			<input type="checkbox" id="cinema" name="cinema" <?php if (isset($user['cinema'])) {
																	echo "checked";
																} ?>>
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