<?php
require 'config.php';

function activeAccount($login, $pwd) {
  $bdd = getBdd();
  $deleteAc = $bdd->prepare('UPDATE User SET delete_ac = NULL WHERE login = ? AND password = ?');
  	if($deleteAc->execute(array($login, $pwd))) {
  		$logIns = $bdd->prepare('SELECT * FROM User WHERE login = ? AND password = ?');
      $logIns->execute(array($login, $pwd));
      $result = $logIns->fetch(PDO::FETCH_ASSOC);
    return $result;
  	}
    else {
  		return false;
  	}
}