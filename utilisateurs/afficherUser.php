<?php

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