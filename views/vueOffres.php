<?php ob_start(); ?>
  <?php foreach ($offres as $offre):?>  
    <div class="col-lg-4">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"><?= $offre['name'] ?></h4>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <i class="fa fa-check" aria-hidden="true"></i> Compte personnel
            </li>
            <li class="list-group-item">
              <i class="fa fa-check" aria-hidden="true"></i> Création de To Do List
            </li>
            <li class="list-group-item">
              <i class="fa fa-check" aria-hidden="true"></i> Gestion de to Do List
            </li>
            <li class="list-group-item">
              <i class="fa fa-times" aria-hidden="true"></i> Partage de To Do List
            </li>
            <li class="list-group-item">
              <i class="fa fa-times" aria-hidden="true"></i> Accès anticipé aux nouvelles fonctionnalités
            </li>
          </ul>
          <form action="" method="post">
            <input type="hidden" value="<?= $offre['id'] ?>" name="offresid">
            <input type="submit" value="<?= number_format($offre['price'], 2) ?> € / mois" name="SavePanier" class="btn btn-primary btnpanier">
          </form>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

<?php $offresP = ob_get_clean(); ?>