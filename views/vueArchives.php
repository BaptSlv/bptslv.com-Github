<?php ob_start(); ?>
	<?php foreach ($reads as $read): ?>  
	  <tr><form action="" method="post">
	    <td>
	    	<select name="categoryId" class="custom-select">
                <?php foreach ($CateOns as $CateOn): ?>
               		<option value="<?= $CateOn['id'] ?>" <?php if($CateOn['id'] == $read['categoryId']){echo "selected";} ?> ><?= $CateOn['name'] ?></option>
				<?php endforeach; ?>
            </select>
	    </td>
	    <td>
	    	<input class="form-control" value="<?= $read['description'] ?>" type="text" name="description"/>
	    </td>
	    <td>
	    	<select name="lvltache" class="custom-select">
                <option value="1" <?php if($read['lvltache'] == 1){echo "selected";} ?>>1 (Bas)</option>
                <option value="2" <?php if($read['lvltache'] == 2){echo "selected";} ?>>2 (Modéré)</option>
                <option value="3" <?php if($read['lvltache'] == 3){echo "selected";} ?>>3 (Elevé)</option>
            </select>
	    </td>
	    <td>
	    	<input type="hidden" value="<?= $read['tacheid'] ?>" name="tacheid" class="btn btn-primary">
	    	<input type="submit" value="Editer" name="editer" class="btn btn-primary">
	    </td>
	    <td>
	    	<input type="submit" value="Réactiver" name="reactiver" class="btn btn-danger">
	    </td>
	  </form></tr>
	<?php endforeach; ?>
<?php $archive = ob_get_clean(); ?>