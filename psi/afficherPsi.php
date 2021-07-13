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
					<td><?= $psi["idPsi"] ?></td>
					<td><?= $psi["nomADB"] ?></td>
					<td><?= $psi["coordonnateur"] ?></td>
					<td><?= $psi["telJour"] ?></td>
					<td><?= $psi["telSoir"] ?></td>
					<td><?= $psi["nomADP"] ?></td>
					<td><?= $psi["responsable"] ?></td>
					<td><?= $psi["tel"] ?></td>
					<td><?= $psi["courriel"] ?></td>
					<td><?= '<a href=formulairePSI.php?id=' . $psi["idPsi"] . ' >' . "<img src='../images/pencil-64.png'>" . '</a>'; ?></td>
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
	$headers[] = "coordonnateur";
	$headers[] = "cellJour";
	$headers[] = "cellSoir";
	$headers[] = "nomADP";
	$headers[] = "responsable";
	$headers[] = "tel";
	$headers[] = "courriel";
	$headers[] = "Modifier";
	return $headers;
}
?>

<?php
//Affiche le menu Psi
function navpsi()
{
$recherche = isset($_POST['recherche']) ? trim($_POST['recherche']) : "";
?>

	<div class="topnav">
        <a class="active" href="../index.php">Home</a>
        <a href=formulairePSI.php?id=0>New Form PSI</a>
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