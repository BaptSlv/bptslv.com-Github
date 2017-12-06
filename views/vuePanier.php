<?php ob_start(); ?>
<?php $totauxdestotaux = 0;
foreach ($infoIds as $infoId): 
	$totaux = $infoId['price'] * $infoId['quantity'] * 1.196;
	$totauxdestotaux += $totaux; ?>
<form action="" method="post">
	<input type="hidden" name="artid" value="<?= $infoId['id'] ?>">
	<tr>
		<th scope="row"><?= $infoId['name'] ?></th>
		<td><?= number_format($infoId['price'], 2) ?> €</td>
		<td>
			<input class="form-control" value="<?= $infoId['quantity'] ?>" type="number" min="1" name="quantite"/>
		</td>
		<td><input type="submit" value="Editer" name="editer" class="btn btn-primary"></td>
		<td><input type="submit" value="Supprimer" name="supprimer" class="btn btn-danger"></td>
		<td>19,6%</td>
		<td><?= number_format($totaux, 2) ?> €</td>
	</tr>
</form>
<?php endforeach; ?>
	<tr class="gold-yellow">
		<th scope="row">Total TTC</th>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><?= number_format($totauxdestotaux, 2) ?> €</td>
	</tr>
<?php $panier = ob_get_clean(); ?>