<?php


//Affiche le contenu du tablea recuperation des données user
function afficherTableau($users, $headers)
{
?>

	<table class="styled-table">
		<thead>
			<tr>
				<?php foreach ($headers as $header) : ?>
					<th><?php echo $header; ?></th>
				<?php endforeach; ?>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($users as $user) : ?>

				<tr>
					<td><?= $user["id"] ?></td>
					<td><?= $user["nom"] ?></td>
					<td><?= $user["prenom"] ?></td>
					<td><?= $user["age"] ?></td>
					<td><?= $user["adresse"] ?></td>
					<td><?= $user["cinema"] ?></td>
					<td><?= '<a href=formulaireUser.php?id=' . $user["id"] . ' >' . "<img src='../images/pencil-64.png'>" . '</a>'; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php
}

//Affiche le header du tableau
function getHeaderTable()
{
	$headers = array();
	$headers[] = "ID";
	$headers[] = "Nom";
	$headers[] = "Prenom";
	$headers[] = "Age";
	$headers[] = "Adresse";
	// $headers[] = "Ville";
	// $headers[] = "Province";
	// $headers[] = "Pays";
	// $headers[] = "Po";
	$headers[] = "Cinema";
	$headers[] = "Modifier";

	return $headers;
}
?>


<?php

//Affiche le menu User
function navuser()
{
$recherche = isset($_POST['recherche']) ? trim($_POST['recherche']) : "";
?>

	<div class="topnav">
        <a class="active" href="../index.php">Home</a>
        <a href=formulaireUser.php?id=0>Ajouter Utilisateur</a>
        <a href="export.php">Exporter CVS</a>
        <div class="search-container">
            <form action="" method="post">
            <input type="text" placeholder="Search.." name="recherche" value="<?= $recherche ?>">
            <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
<?php
}