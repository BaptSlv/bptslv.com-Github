<?php
session_start ();
require '../models/modelList.php';

if(isset($_POST['name'])) {
    getTraitCate(htmlspecialchars($_POST['name']), $_SESSION['userid']);
}

if(isset($_POST['desctache'], $_POST['lvltache'], $_POST['categoryId']) 
	&& !empty($_POST['desctache']) 
	&& !empty($_POST['lvltache']) 
	&& !empty($_POST['categoryId'])) {
	getTraitement(htmlspecialchars($_POST['categoryId']), htmlspecialchars($_POST['desctache']), htmlspecialchars($_POST['lvltache']), $_SESSION['userid']);
}

function getTasks($id) {
	return getTaskByCategory($id);
}

$CateOns = getCateOn();
if( $CateOns ) {
	require '../views/vueCtg.php';
} else {
	$msgErreur = 'Category introuvable';
	require '../views/vueErreur.php';
}

$tdlUs = getUrgent();
if($tdlUs) {
	require '../views/vueTdlU.php';
} else {
	$msgErreur = 'Category introuvable';
	require '../views/vueErreur.php';
}

$taskcategory = getListOfCategory();
if($taskcategory) {
	require '../views/vueTdlX';
} else {
	$msgErreur = 'Category introuvable';
	require '../views/vueErreur.php';
}

require '../templates/list.php';?>