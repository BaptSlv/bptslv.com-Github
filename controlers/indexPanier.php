<?php
session_start();
require '../models/modelOffres.php';

$infoIds = array();
if(isset($_SESSION['panier'])) {
	foreach ($_SESSION['panier'] as $panier) {
		$offresult = getOffreById($panier['id']);
		$offresult['quantity'] = $panier['quantity'];
		array_push($infoIds, $offresult);
	}
}

if (isset($_POST['editer'], $_POST['quantite'], $_POST['artid'])
	&& is_numeric($_POST['artid'])
	&& is_numeric($_POST['quantite'])
	&& !empty($_POST['artid'])
	&& !empty($_POST['quantite'])
	&& $_POST['quantite'] > 0) {
		$tabid = array_search(htmlspecialchars($_POST['artid']), array_column($_SESSION['panier'], 'id'));
		if($tabid !== false) {
			$_SESSION['panier'][$tabid]['quantity'] = htmlspecialchars($_POST['quantite']);
			header('Location:/bptslv.com/controlers/indexPanier.php');
		}
}

if(isset($_POST['supprimer'], $_POST['artid']) 
	&& is_numeric($_POST['artid'])
	&& !empty($_POST['artid'])) {
	$tabid = array_search(htmlspecialchars($_POST['artid']), array_column($_SESSION['panier'], 'id'));
		if($tabid !== false) {
			array_splice($_SESSION['panier'], $tabid, 1);
			header('Location:/bptslv.com/controlers/indexPanier.php');
		}
}

require '../views/vuePanier.php';

require '../templates/panier.php';