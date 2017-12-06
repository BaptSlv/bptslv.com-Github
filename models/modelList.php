<?php
require 'config.php';

function getTraitCate($name, $userId) {
  $bdd = getBdd();
  $categ = $bdd->prepare('INSERT INTO taskcategory (name, categoryuserid) VALUES (?, ?)');
  return $categ->execute(array($name, $userId));
}

function getTraitement($categoryId, $descTache, $lvlTache, $userId) {
  $bdd = getBdd();
  $tasks = $bdd->prepare('INSERT INTO Tache (labeltache, description, lvltache, categoryId, tacheuserid) VALUES (?, ?, ?, ?, ?)');
  return $tasks->execute(array(getCateById($categoryId), $descTache, $lvlTache, $categoryId, $userId));
}

function getUrgent() {
  $bdd = getBdd();
  $tdlUs = $bdd->prepare('SELECT * FROM Tache WHERE delete_at IS NULL AND lvltache = 3 AND tacheuserid = ?');
  $tdlUs->execute(array($_SESSION['userid']));
  return $tdlUs->fetchAll(PDO::FETCH_ASSOC);
}

function getCateOn() {
  $bdd = getBdd();
  $CateOns = $bdd->prepare('SELECT * FROM taskcategory WHERE categoryuserid = ?');
  $CateOns->execute(array($_SESSION['userid']));
  return $CateOns->fetchAll(PDO::FETCH_ASSOC);
}

function getListOfCategory() {
  $bdd = getBdd();
  $tdlXs = $bdd->prepare('SELECT * FROM taskcategory WHERE categoryuserid = ?');
  $tdlXs->execute(array($_SESSION['userid']));
  return $tdlXs->fetchAll(PDO::FETCH_ASSOC);
}

function getTaskByCategory($id) {
  $bdd = getBdd();
  $tdlXs = $bdd->prepare('SELECT * FROM Tache WHERE delete_at IS NULL AND categoryId = ? AND tacheuserid = ? ORDER BY lvltache DESC');
  $tdlXs->execute(array((int)$id, $_SESSION['userid']));
  return $tdlXs->fetchAll(PDO::FETCH_ASSOC);
}

function getCateById($id) {
  $bdd = getBdd();
  $cateNames = $bdd->prepare('SELECT * FROM taskcategory WHERE id = ? AND categoryuserid = ?');
  $cateNames->execute(array((int)$id, $_SESSION['userid']));
  return $cateNames->fetch(PDO::FETCH_ASSOC)['name'];
}