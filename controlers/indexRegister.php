<?php
session_start();
require '../models/modelRegister.php';

if (isset($_SESSION['userid'])) {
	header('Location:/bptslv.com/controlers/indexList.php');
}

if(isset($_POST['register'], $_POST['login'], $_POST['password'], $_POST['nom'], $_POST['prenom'])
	&& !empty($_POST['login']) 
	&& !empty($_POST['password']) 
	&& !empty($_POST['nom'])
	&& !empty($_POST['prenom'])) {
    getRegister(htmlspecialchars($_POST['login']), htmlspecialchars($_POST['password']), htmlspecialchars($_POST['nom']), htmlspecialchars($_POST['prenom']));
    header('Location:/bptslv.com/controlers/indexLogin.php');
}

require '../templates/register.php';