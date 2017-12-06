<?php
session_start();
require '../models/modelBredUser.php';

if(isset($_POST['editer'], $_POST['login'], $_POST['password'])
	&& !empty($_POST['login'])
	&& !empty($_POST['password'])) {
	if(editUser(htmlspecialchars($_POST['login']), htmlspecialchars($_POST['password']), $_SESSION['userid'])) {
	header('Location:/bptslv.com/controlers/indexBredUser.php');
	}
} else if(isset($_POST['deleteAccount'])) {
	if(deleteUser($_SESSION['userid'])) {
		header('Location:/bptslv.com/index.html');
	}
}

$user = readUserId();
if($user) {
	require '../views/vueBredUser.php';
} else {
	$msgErreur = 'User introuvable';
	require '../views/vueErreur.php';
}

require '../templates/bredUser.php';