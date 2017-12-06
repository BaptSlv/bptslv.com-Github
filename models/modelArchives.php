<?php
require 'config.php';

 function getEdit($description, $categoryId, $lvltache, $hidden, $userId) {
  $bdd = getBdd();
  $edits = $bdd->prepare('UPDATE Tache SET description = ?, categoryId = ?, lvltache = ? WHERE tacheid = ? AND tacheuserid = ?');
  return $edits->execute(array($description, $categoryId, $lvltache, $hidden, $userId));
}

 function getRecreate($hidden, $userId) {
  $bdd = getBdd();
  $delete = $bdd->prepare('UPDATE Tache SET delete_at = NULL WHERE tacheid = ? AND tacheuserid = ?');
  return $delete->execute(array($hidden, $userId));
}

function getCateOn() {
  $bdd = getBdd();
  $CateOns = $bdd->prepare('SELECT * FROM taskcategory WHERE categoryuserid = ?');
  $CateOns->execute(array($_SESSION['userid']));
  return $CateOns->fetchAll(PDO::FETCH_ASSOC);
}

function getRead() {
  $bdd = getBdd();
  $reads = $bdd->prepare('SELECT * FROM Tache WHERE delete_at IS NOT NULL AND tacheuserid = ? ORDER BY labeltache DESC');
  $reads->execute(array($_SESSION['userid']));
  return $reads->fetchAll(PDO::FETCH_ASSOC);
}