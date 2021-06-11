<?php

function afficherTableau($psis, $headers)
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
			<?php foreach ($psis as $psi) : ?>

				<tr>
					<td><?= $psi["idPSI"] ?></td>
					<td><?= $psi["nomADB"] ?></td>
					<td><?= $psi["nomBatiment"] ?></td>
					<td><?= $psi["coordonnateur"] ?></td>
					<td><?= $psi["cellJour"] ?></td>
					<td><?= $psi["cellSoir"] ?></td>
					<td><?= $psi["nomADP"] ?></td>
					<td><?= $psi["responsable"] ?></td>
					<td><?= $psi["cellADP"] ?></td>
					<td><?= $psi["courriel"] ?></td>
					<td><?= '<a href=psi/formulairePSI.php?id=' . $psi["idPSI"] . ' >' . "<img src='../images/pencil-64.png'>" . '</a>'; ?></td>
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
	$headers[] = "nomADB";
	$headers[] = "nomBatiment";
	$headers[] = "coordonnateur";
	$headers[] = "cellJour";
	$headers[] = "cellSoir";
	$headers[] = "nomADP";
	$headers[] = "responsable";
	$headers[] = "cellADP";
	$headers[] = "courriel";
	$headers[] = "Modifier";

	return $headers;
}


?>