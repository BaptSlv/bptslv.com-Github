<?php
session_start ();
require '../models/modelactiveAccount.php';

$login = htmlspecialchars($_POST['login']);
$pwd = htmlspecialchars($_POST['password']);

if(isset($login, $pwd)
	&& !empty($login)
	&& !empty($pwd)) {
	$result = activeAccount($login, $pwd);
	if ($result) {
		$_SESSION['userid'] = $result['userid'];
        header('Location:/bptslv.com/controlers/indexList.php');
	} 
	else {
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
	}
}

require '../templates/activeAccount.php';