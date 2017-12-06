<?php
require 'config.php';

function getRegister($login, $pwd, $nom, $prenom) {
  $bdd = getBdd();
  $regis = $bdd->prepare('INSERT INTO User (login, password, nom, prenom) VALUES (?, ?, ?, ?)');
  return $regis->execute(array($login, $pwd, $nom, $prenom));
}