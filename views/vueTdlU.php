<?php ob_start(); ?>
	<?php foreach ($tdlUs as $tdlU): ?>  
	  <tr>
	    <td><?= $tdlU['labeltache'] ?></td>
	    <td><?= $tdlU['description'] ?></td>
	    <td><?= $tdlU['lvltache'] ?></td>
	  </tr>
	<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>