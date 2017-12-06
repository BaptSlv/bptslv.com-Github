<?php ob_start(); ?>
	<?php foreach ($CateOns as $CateOn): ?>
               	<option value="<?= $CateOn['id'] ?>"><?= $CateOn['name'] ?></option>
	<?php endforeach; ?>
<?php $listD = ob_get_clean(); ?>