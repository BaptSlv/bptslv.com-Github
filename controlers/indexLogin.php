<?php
session_start ();
require '../models/modelLogin.php';

if (isset($_SESSION['userid'])) {
	header('Location:/bptslv.com/controlers/indexList.php');
}

$login = htmlspecialchars($_POST['login']);
$pwd = htmlspecialchars($_POST['password']);

if(isset($login, $pwd) 
	&& !empty($login)
	&& !empty($pwd)) {
	$result = getInfo($login, $pwd);
	if ($result) {
		$_SESSION['userid'] = $result['userid'];
        header('Location:/bptslv.com/controlers/indexList.php');
	} 
	else {
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
	}
}

require '../templates/login.php';