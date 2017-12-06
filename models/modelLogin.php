<?php
require 'config.php';

function getInfo($login, $pwd) {
	$bdd = getBdd();
    $logIns = $bdd->prepare('SELECT * FROM User WHERE login = ? AND password = ? AND delete_ac IS NULL');
    $logIns->execute(array($login, $pwd));
    $result = $logIns->fetch(PDO::FETCH_ASSOC);
return $result;
}