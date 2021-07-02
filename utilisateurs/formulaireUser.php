<?php
include 'mesFunctionsSQL.php';
include 'afficherUser.php';

//Verification de l'id dans le URL si vide ou remplis
$id = isset($_GET['id']) ? $_GET['id'] : '';

//si le ID recupérer est egal à 0 l'action sera de créer un User Sinon mise a jours
if ($id==0) {
	$user = getNewUser();
	$action = "CREATE";
	$libelle = "Creer";
} else {
	$user = readUser($id);
	$action = "UPDATE";
	$libelle = "Mettre a jour";
}


//Affiche tout les erreurs dans le form
if (isset($_GET['erreurs']) ){
$erreurs=json_decode($_GET['erreurs']);
}
?>

<html>
<header>
	<link rel="stylesheet" href="../styles/formulaireUser.css">
</header>

<body>
	<form action="createUpdateDeleteUser.php" method="post">
		<p>
			<a href="mainPageUser.php">Liste des utilisateurs</a>

			<input type="hidden" name="id" value="<?php if(isset($user['id'])) {echo $user['id']; } ?>" />
			<input type="hidden" name="action" value="<?php echo $action;  ?>" />
		<div>
			<label for="name">Nom :</label>
			<input type="text" id="nom" name="nom" value="<?php if(isset($user['nom'])) { echo $user['nom'];} ?>">
			<span class="error"> <?php if(isset($erreurs->nomErr)){ echo $erreurs->nomErr; }  ?></span>

		</div>
		<div>
			<label for="prenom">Prenom</label>
			<input type="text" id="prenom" name="prenom" value="<?php if(isset($user['prenom'])) { echo $user['prenom'];  }?>" >
			<span class="error"> <?php if(isset($erreurs->prenomErr)){ echo $erreurs->prenomErr; }  ?></span>
			
		</div>
		<div>
			<label for="age">Age:</label>
			<input type="text" id="age" name="age" value="<?php if(isset($user['age'])) { echo $user['age']; } ?>">
			<span class="error"> <?php if(isset($erreurs->ageErr)){ echo $erreurs->ageErr; }  ?></span>
		</div>
		<div>
			<label for="adresse">adresse :</label>
			<input id="adresse" name="adresse" value="<?php if(isset($user['adresse'])) { echo $user['adresse']; } ?>" ></input>
			<span class="error"> <?php if(isset($erreurs->adresseErr)){ echo $erreurs->adresseErr; }  ?></span>
		</div>
		<div>
			<label for="cinema">cinema :</label>
			<input type="checkbox" id="cinema" name="cinema" <?php if ($user['cinema'] == 1) $user['cinema'] = "checked"; echo $user['cinema'] ?>>
		</div>
		<div class="button">
			<button type="submit" name="envoi"><?php echo $libelle;  ?></button>
			<button type="submit" name="action" value="copie" formaction="createUpdateDeleteUser.php">Copie Local</button>
		</div>
		</p>
	</form>

	<br>

	<!-- si l'id recupérer n'est pas egal a 0 l'option Supprimer sera afficher -->
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