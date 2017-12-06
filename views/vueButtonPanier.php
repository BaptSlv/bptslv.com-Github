<?php ob_start(); ?>
<div class="dropdown-menu">
  <a class="dropdown-item" href="../controlers/indexPanier.php">Accéder à mon panier</a>
  <p class="dropdown-item">Items : <?= $items ?></p>
  <p class="dropdown-item">Total HT : <?= number_format($total, 2) ?> €</p>
</div>
<?php $infoP = ob_get_clean(); ?>