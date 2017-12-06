<?php
require 'config.php';

  function deleteUser($userId) {
  $bdd = getBdd();
  $deleteAc = $bdd->prepare('UPDATE User SET delete_ac = CURRENT_TIMESTAMP WHERE userid = ?');
  return $deleteAc->execute(array($userId));
}

 function editUser($login, $pwd, $userId) {
  $bdd = getBdd();
  $edits = $bdd->prepare('UPDATE User SET login = ?, password = ? WHERE userid = ?');
  return $edits->execute(array($login, $pwd, $userId));
}

function readUserId() {
    $bdd = getBdd();
    $usersId = $bdd->prepare('SELECT * FROM User WHERE userid = ?');
    $usersId->execute(array($_SESSION['userid']));
    return $usersId->fetch(PDO::FETCH_ASSOC);
}